<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Cart items are stored in $_SESSION['cart'] by add_to_cart.php
$cartItems = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
$isLoggedInCart = isset($_SESSION['customer_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
<?php include("header.php") ?>
    <main class="cart-wrapper">
        <h1 class="cart-title">My Shopping Cart</h1>

        <div class="cart-containers">
            <div class="cart-header">
                <div class="col-desc">Description</div>
                <div class="col-qty">Quantity</div>
                <div class="col-remove">Remove</div>
                <div class="col-price">Price</div>
            </div>

            <?php if (empty($cartItems)): ?>
                <p style="padding: 20px;">Your cart is empty.</p>
            <?php else: ?>
                <?php foreach ($cartItems as $item): 
                    $qty   = (int)($item['qty'] ?? 1);
                    $price = (float)($item['price'] ?? 0);
                    $title = $item['title'] ?? '';
                    $img   = $item['img'] ?? '';
                    $productId = $item['productid'] ?? '';
                    $rowTotal = $price * $qty;
                ?>
                <div class="cart-item" data-id="<?php echo htmlspecialchars($productId); ?>">
                    <div class="col-desc item-detail">
                        <?php if ($img): ?>
                            <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($title); ?>">
                        <?php endif; ?>
                        <div>
                            <p class="product-name"><?php echo htmlspecialchars($title); ?></p>
                        </div>
                    </div>
                    <div class="col-qty">
                        <div class="qty-control">
                            <button class="qty-btn minus">-</button>
                            <input type="text" value="<?php echo $qty; ?>" readonly>
                            <button class="qty-btn plus">+</button>
                        </div>
                    </div>
                    <div class="col-remove">
                        <button class="remove-btn">×</button>
                    </div>
                    <div class="col-price" data-base-price="<?php echo htmlspecialchars($price); ?>">
                        ₹<?php echo number_format($rowTotal, 2); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <div class="cart-summary">
                <div class="summary-box">Subtotal <span id="subtotal">₹0.00</span></div>
                <div class="summary-box total">Total <span id="total">₹0.00</span></div>
            </div>

            <div class="cart-footer">
                <a href="collection" class="btn-continue">Continue Shopping</a>
                <?php if (!empty($cartItems)): ?>
                    <?php if ($isLoggedInCart): ?>
                        <a href="checkout"><button class="btn-checkout">Checkout <span class="cart-icon">🛒</span></button></a>
                    <?php else: ?>
                        <a href="signup?next=<?php echo urlencode('checkout'); ?>">
                            <button class="btn-checkout">Checkout <span class="cart-icon">🛒</span></button>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>
    <br>
<?php include("footer.php") ?>
<script src="js/cart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const subtotalElement = document.getElementById('subtotal');
    const totalElement = document.getElementById('total');

    function recalcTotals() {
        let currentGrandTotal = 0;
        document.querySelectorAll('.cart-item').forEach(item => {
            const priceDiv = item.querySelector('.col-price');
            const basePrice = parseFloat(priceDiv.getAttribute('data-base-price') || 0);
            const qty = parseInt(item.querySelector('input').value) || 0;
            const rowTotal = basePrice * qty;
            priceDiv.innerText = "₹" + rowTotal.toLocaleString('en-IN', { minimumFractionDigits: 2 });
            currentGrandTotal += rowTotal;
        });
        const formatted = "₹" + currentGrandTotal.toLocaleString('en-IN', { minimumFractionDigits: 2 });
        if (subtotalElement) subtotalElement.innerText = formatted;
        if (totalElement) totalElement.innerText = formatted;
    }

    recalcTotals();

    document.querySelectorAll('.qty-control').forEach(control => {
        const minusBtn = control.querySelector('.minus');
        const plusBtn = control.querySelector('.plus');
        const input = control.querySelector('input');
        const item = control.closest('.cart-item');
        const productId = item?.dataset.id;
        const basePrice = parseFloat(item.querySelector('.col-price').getAttribute('data-base-price') || 0);

        function updateQty(newQty) {
            if (!productId) return;
            addToCart(productId, item.querySelector('.product-name').textContent, item.querySelector('img')?.src || '', basePrice, newQty)
                .then(() => {
                    if (newQty <= 0) {
                        item.remove();
                    } else {
                        input.value = newQty;
                    }
                    recalcTotals();
                });
        }

        plusBtn.addEventListener('click', () => {
            const current = parseInt(input.value) || 0;
            updateQty(current + 1);
        });

        minusBtn.addEventListener('click', () => {
            const current = parseInt(input.value) || 0;
            if (current > 1) {
                updateQty(current - 1);
            } else {
                updateQty(0);
            }
        });
    });

    document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.cart-item');
            const productId = item?.dataset.id;
            if (!productId) return;
            addToCart(productId, '', '', 0, 0).then(() => {
                item.remove();
                recalcTotals();
            });
        });
    });
});
</script>
</body>
</html>
