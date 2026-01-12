<?php
// DB connection
include('auth.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch main image for a given product ID
function getMainImage($conn, $productID) {
    $sql = "SELECT URL FROM Images WHERE ProductID = ? AND Is_main = '1' LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $productID);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row ? $row['URL'] : "";
}

// Function to fetch products for a given flag (Is_Featured / Is_Trending)
function fetchProducts($conn, $flagColumn, $limit = 10) {
    $products = [];
    $sql = "SELECT ProductID, Title, Sale_Price, Collection_Name, Sub_category, Product_Categories
            FROM Inventory
            WHERE $flagColumn = 1
            LIMIT ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $limit);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $mainImage = getMainImage($conn, $row['ProductID']);
        $products[$row['ProductID']] = [
            "c_name" => $row['Collection_Name'] ?: "default_collection",
            "sc_name"=>$row['Sub_category'],
            "pc_name" => $row['Product_Categories'],
            "img"    => $mainImage,
            "title"  => $row['Title'],
            "Price"  => "₹" . number_format($row['Sale_Price'])
        ];
    }

    return $products;
}

// Fetch featured products
$is_featured = fetchProducts($conn, "Is_Featured", 10);

// Fetch trending products
$is_trending = fetchProducts($conn, "Is_Trending", 10);

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
