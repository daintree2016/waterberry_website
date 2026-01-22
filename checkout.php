<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Require cart items
$cartItems = isset($_SESSION['cart']) && is_array($_SESSION['cart']) ? $_SESSION['cart'] : [];
if (empty($cartItems)) {
    header("Location: cart");
    exit();
}

// Optional: also protect against direct access without login.
if (!isset($_SESSION['customer_id'])) {
    header("Location: signup?next=" . urlencode('checkout'));
    exit();
}

// Calculate totals from session cart
$subtotal = 0.0;
foreach ($cartItems as $item) {
    $qty   = (float)($item['qty'] ?? 1);
    $price = (float)($item['price'] ?? 0);
    $subtotal += $qty * $price;
}
$shipping = 0.0; // can be made dynamic later
$tax      = 0.0; // simple version; tax logic can be added later
$total    = $subtotal + $shipping + $tax;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
<?php include("header.php") ?>
    <main class="checkout-wrapper">
        <div class="checkout-grid">            
            <section class="checkout-details">
                <h1>Checkout</h1>
                
                <form action="payments/index" method="POST" id="checkoutForm">
                    <div class="form-section">
                        <h3>Customer Details</h3>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Full Name *</label>
                                <input type="text" name="customer_name" placeholder="Full name" required>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label>Email *</label>
                                <input type="email" name="email" placeholder="you@example.com" required>
                            </div>
                            <div class="input-group">
                                <label>Phone Number *</label>
                                <div class="phone-input">
                                    <select><option>IN</option></select>
                                    <input type="text" name="mobile" placeholder="00000 00000" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Shipping Details</h3>
                        <div class="input-group">
                            <label>Street Address *</label>
                            <input type="text" name="address" placeholder="Street address" required>
                        </div>
                        <div class="input-row triple">
                            <div class="input-group">
                                <label>Postal Code *</label>
                                <input type="text" name="postal_code" placeholder="PIN code" required>
                            </div>
                            <div class="input-group">
                                <label>City *</label>
                                <input type="text" name="city" placeholder="City" required>
                            </div>
                            <div class="input-group">
                                <label>Country</label>
                                <select name="country"><option>India</option></select>
                            </div>
                        </div>
                    </div>

                    <!-- Map session total to payment gateway expected field -->
                    <input type="hidden" name="amount" value="<?php echo htmlspecialchars(number_format($total, 2, '.', '')); ?>">

                    <div class="form-section">
                        <h3>Payment</h3>
                        <p>Payment will be processed securely via our payment provider.</p>
                        <button type="submit" class="btn-checkout">Pay ₹<?php echo number_format($total, 2); ?></button>
                    </div>
                </form>
            </section>

            <aside class="order-summary">
                <h3>Order Summary</h3>
                <div class="summary-items">
                    <?php foreach ($cartItems as $item): 
                        $qty   = (int)($item['qty'] ?? 1);
                        $price = (float)($item['price'] ?? 0);
                        $title = $item['title'] ?? '';
                        $img   = $item['img'] ?? '';
                        $rowTotal = $qty * $price;
                    ?>
                    <div class="product-item">
                        <?php if ($img): ?>
                        <img src="<?php echo htmlspecialchars($img); ?>" alt="<?php echo htmlspecialchars($title); ?>">
                        <?php endif; ?>
                        <div class="prod-info">
                            <p><?php echo htmlspecialchars($title); ?></p>
                            <p class="price">₹<?php echo number_format($rowTotal, 2); ?></p>
                            <div class="qty-control">
                                <span>Qty: <?php echo $qty; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="totals-table">
                    <div class="total-row"><span>Subtotal</span><span>₹<?php echo number_format($subtotal, 2); ?></span></div>
                    <?php if ($shipping > 0): ?>
                    <div class="total-row"><span>Shipping</span><span>₹<?php echo number_format($shipping, 2); ?></span></div>
                    <?php endif; ?>
                    <?php if ($tax > 0): ?>
                    <div class="total-row"><span>Taxes</span><span>₹<?php echo number_format($tax, 2); ?></span></div>
                    <?php endif; ?>
                    <div class="total-row grand-total"><span>Total</span><span>₹<?php echo number_format($total, 2); ?></span></div>
                </div>
            </aside>
        </div>
    </main>
    <?php include("footer.php") ?>
</body>
</html>
