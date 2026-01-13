<?php
// DB connection
include('db.php');

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Function to fetch main image for a given product ID
function getMainImage($conn, $productID) {
    $images = [
        "main" => "",
        "secondary" => ""
    ];

    // 1️⃣ Get main image (Is_main = 1)
    $sql = "SELECT URL FROM Images WHERE ProductID = ? AND Is_main = 1 LIMIT 1";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $productID);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $images["main"] = $row["URL"];
        }
        $stmt->close();
    }

    // 2️⃣ Get secondary image (Is_main = 0)
    $sql = "SELECT URL FROM Images WHERE ProductID = ? AND Is_main = 0 LIMIT 1";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $productID);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $images["secondary"] = $row["URL"];
        }
        $stmt->close();
    }

    // 3️⃣ Fallback: if no secondary, reuse main
    if (empty($images["secondary"])) {
        $images["secondary"] = $images["main"];
    }

    return $images;
}

// Function to fetch products for a given flag (Is_Featured / Is_Trending)
function fetchProducts($conn, $flagColumn) {
    $products = [];
    // Use backticks for column name to handle case sensitivity
    $flagColumnEscaped = "`" . $conn->real_escape_string($flagColumn) . "`";
    $sql = "SELECT ProductID, Title, Sale_Price, Collection_Name, Sub_category, Product_Categories, Brand
            FROM Inventory
            WHERE $flagColumnEscaped = 1
            ORDER BY Slno DESC";
    
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        error_log("SQL Prepare failed for column $flagColumn: " . $conn->error);
        return [];
    }
    
    // $stmt->bind_param("i", $limit);
    if (!$stmt->execute()) {
        error_log("SQL Execute failed for column $flagColumn: " . $stmt->error);
        $stmt->close();
        return [];
    }
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $mainImage = getMainImage($conn, $row['ProductID']);
        $products[$row['ProductID']] = [
            "c_name" => $row['Collection_Name'] ?: "default_collection",
            "sc_name"=>$row['Sub_category'],
            "pc_name" => $row['Product_Categories'],
            "img"    => $mainImage,
            "title"  => $row['Title'],
            "Price"  => "₹" . number_format($row['Sale_Price']),
            "Brand" => $row['Brand']
        ];
    }
    
    $stmt->close();
    return $products;
}

// Fetch featured products - check both case variations
$is_featured = fetchProducts($conn, "Is_Featured");
// If no results with Is_Featured, try lowercase
if (empty($is_featured)) {
    $is_featured = fetchProducts($conn, "is_featured");
}

// Fetch trending products - check both case variations
$is_trending = fetchProducts($conn, "Is_Trending");
// If no results with Is_Trending, try lowercase
if (empty($is_trending)) {
    $is_trending = fetchProducts($conn, "is_trending");
}

// Combine into final JSON structure
$final_json = [
    "is_featured" => $is_featured,
    "is_trending" => $is_trending
];

// Output JSON
header('Content-Type: application/json');
echo json_encode($final_json, JSON_PRETTY_PRINT);

// Close connection
$conn->close();
?>
