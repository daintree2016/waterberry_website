<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="checkout.css">
</head>
<body>
<?php include("header.php") ?>
    <main class="checkout-wrapper">
        <div class="checkout-grid">
            
            <section class="checkout-details">
                <h1>Checkout</h1>
                
                <div class="form-section">
                    <h3>Customer Details</h3>
                    <div class="input-row">
                        <div class="input-group">
                            <label>First Name *</label>
                            <input type="text" placeholder="Sarah">
                        </div>
                        <div class="input-group">
                            <label>Last Name *</label>
                            <input type="text" placeholder="Davis">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email *</label>
                            <input type="email" placeholder="mail@pagedone.com">
                        </div>
                        <div class="input-group">
                            <label>Phone Number *</label>
                            <div class="phone-input">
                                <select><option>IN</option></select>
                                <input type="text" placeholder="00000 00000">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Shipping Details</h3>
                    <div class="input-group">
                        <label>Street Address *</label>
                        <input type="text" placeholder="Alpha Plus A-1002, Raiya Telephone Exchange">
                    </div>
                    <div class="input-row triple">
                        <div class="input-group">
                            <label>Postal Code *</label>
                            <input type="text" placeholder="360005">
                        </div>
                        <div class="input-group">
                            <label>City *</label>
                            <input type="text" placeholder="Rajkot">
                        </div>
                        <div class="input-group">
                            <label>Country *</label>
                            <select><option>India</option></select>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Payment Method</h3>
                    <div class="payment-options">
                        <label><input type="radio" name="pay"> Paypal</label>
                        <label><input type="radio" name="pay" checked> Credit or Debit Card</label>
                    </div>
                    <div class="input-group">
                        <label>Card Number *</label>
                        <input type="text" placeholder="xxxx xxxx xxxx 4568">
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Expiry Date *</label>
                            <input type="text" placeholder="08/2027">
                        </div>
                        <div class="input-group">
                            <label>CVV *</label>
                            <input type="text" placeholder="000">
                        </div>
                    </div>
                </div>
            </section>
            <aside class="order-summary">
                <h3>Order Summary</h3>
                <div class="summary-items">
                    <div class="product-item">
                        <img src="https://m.media-amazon.com/images/I/716g1XIjzfL._SY879_.jpg" alt="Perfume">
                        <div class="prod-info">
                            <p>Eau De Perfume for Men</p>
                            <p class="price">₹890.00</p>
                            <div class="qty-control">
                                <button>-</button><span>1</span><button>+</button>
                            </div>
                        </div>
                        <button class="remove-item">×</button>
                    </div>
                    <div class="product-item">
                        <img src="https://m.media-amazon.com/images/I/5144Jf0A36L._SX679_.jpg" alt="Makeup">
                        <div class="prod-info">
                            <p>NARS Makeup Kit</p>
                            <p class="price">₹6,500.00</p>
                            <div class="qty-control">
                                <button>-</button><span>1</span><button>+</button>
                            </div>
                        </div>
                        <button class="remove-item">×</button>
                    </div>
                </div>

                <div class="discount-section">
                    <input type="text" placeholder="WELCOME123">
                    <button class="btn-apply">Apply</button>
                </div>

                <div class="totals-table">
                    <div class="total-row"><span>Subtotal</span><span>₹7,390.00</span></div>
                    <div class="total-row"><span>Shipping Charge</span><span>₹650.00</span></div>
                    <div class="total-row"><span>Taxes</span><span>₹1,800.00</span></div>
                    <div class="total-row"><span>Discount</span><span>-₹1,000.00</span></div>
                    <div class="total-row grand-total"><span>Total</span><span>₹8,840.00</span></div>
                </div>
                <button class="btn-checkout">Check Out</button>
            </aside>
        </div>
    </main>
    <?php include("footer.php") ?>
</body>
</html>