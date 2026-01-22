<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Wishlist is tied to logged-in customer
if (empty($_SESSION['customer_id'])) {
    header("Location: login?next=wishlist");
    exit();
}

include("db.php");

$customerId = $_SESSION['customer_id'];
$items = [];

// Fetch wishlist items from DB (same Wishlist table used in waterberry/customer.php)
if ($stmt = $conn->prepare("SELECT ProductID, Title, Img, Price FROM Wishlist WHERE CustomerID = ? ORDER BY created_at DESC")) {
    $stmt->bind_param("s", $customerId);
    if ($stmt->execute()) {
        $res = $stmt->get_result();
        while ($row = $res->fetch_assoc()) {
            $items[] = $row;
        }
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <link rel="stylesheet" href="css/wishlist.css">
</head>
<body>
<?php include("header.php") ?> 
    
<div class="wishlist-container">
    <h2>♡ WISHLIST</h2>

    <?php if (empty($items)): ?>
        <p style="padding: 20px; text-align:center; color:#6b7280;">No wishlist items yet.</p>
    <?php else: ?>
    <table>
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $row): 
                $pid   = $row['ProductID'];
                $title = $row['Title'] ?: $row['ProductID'];
                $img   = $row['Img'] ?: '';
                $price = (float)($row['Price'] ?? 0);
            ?>
            <tr data-productid="<?php echo htmlspecialchars($pid); ?>" data-title="<?php echo htmlspecialchars($title); ?>" data-img="<?php echo htmlspecialchars($img); ?>" data-price="<?php echo htmlspecialchars($price); ?>">
                <td>
                    <div class="product-info">
                        <?php if ($img): ?>
                            <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($title); ?>">
                        <?php endif; ?>
                        <span><?php echo htmlspecialchars($title); ?></span>
                    </div>
                </td>
                <td>
                    <span class="price-new">₹<?php echo number_format($price, 2); ?></span>
                </td>
                <td>
                    <button class="btn wishlist-add-cart">Add To Cart</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
</div>
<?php include("footer.php") ?>
<script src="js/cart.js"></script>
<script>
// Simple "Add to Cart" from wishlist rows
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.wishlist-add-cart').forEach(btn => {
        btn.addEventListener('click', async () => {
            const row = btn.closest('tr');
            if (!row) return;
            const productId = row.dataset.productid;
            const title = row.dataset.title;
            const img = row.dataset.img;
            const price = parseFloat(row.dataset.price || '0');
            if (!productId || !price) {
                alert('Unable to add this item to cart.');
                return;
            }
            const resp = await addToCart(productId, title, img, price, 1);
            if (resp && !resp.error) {
                alert('Added to cart!');
            } else {
                alert('Could not add to cart. Please try again.');
            }
        });
    });
});
</script>
</body>
</html>
