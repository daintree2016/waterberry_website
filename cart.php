<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>

    <main class="cart-wrapper">
        <h1 class="cart-title">My Shopping Cart</h1>

        <div class="cart-container">
            <div class="cart-header">
                <div class="col-desc">Description</div>
                <div class="col-qty">Quantity</div>
                <div class="col-remove">Remove</div>
                <div class="col-price">Price</div>
            </div>

            <div class="cart-item">
                <div class="col-desc item-detail">
                    <img src="https://m.media-amazon.com/images/I/61S1NCpIX4L._SX679_.jpg" alt="Leggings">
                    <div>
                        <p class="product-name">Streamline Leggings</p>
                        <p class="product-code">Product Code: MLSB</p>
                    </div>
                </div>
                <div class="col-qty">
                    <div class="qty-control">
                        <button class="qty-btn minus">-</button>
                        <input type="text" value="1" readonly>
                        <button class="qty-btn plus">+</button>
                    </div>
                </div>
                <div class="col-remove">
                    <button class="remove-btn">×</button>
                </div>
                <div class="col-price">55</div>
            </div>

            <div class="cart-item">
                <div class="col-desc item-detail">
                    <img src="https://m.media-amazon.com/images/I/716g1XIjzfL._SY879_.jpg" alt="Sports Bra">
                    <div>
                        <p class="product-name">Bottle</p>
                        <p class="product-code">Product Code: MLSB</p>
                    </div>
                </div>
                <div class="col-qty">
                    <div class="qty-control">
                        <button class="qty-btn minus">-</button>
                        <input type="text" value="1" readonly>
                        <button class="qty-btn plus">+</button>
                    </div>
                </div>
                <div class="col-remove">
                    <button class="remove-btn">×</button>
                </div>
                <div class="col-price">55</div>
            </div>

            <div class="cart-summary">
                <div class="summary-box">Subtotal <span id="subtotal">110.00</span></div>
                <div class="summary-box total">Total <span id="total">110.00</span></div>
            </div>

            <div class="cart-footer">
                <button class="btn-continue">Continue Shopping</button>
                <button class="btn-checkout">Checkout <span class="cart-icon">🛒</span></button>
            </div>
        </div>
    </main>
<Script>
   document.addEventListener('DOMContentLoaded', () => {
    const subtotalElement = document.getElementById('subtotal');
    const totalElement = document.getElementById('total');

    function updateAllPrices() {
        let currentGrandTotal = 0;
        const cartItems = document.querySelectorAll('.cart-item');

        cartItems.forEach(item => {
            const priceDiv = item.querySelector('.col-price');
            // We use 'data-base-price' or the initial text to keep the original price (55)
            const basePrice = parseFloat(priceDiv.getAttribute('data-base-price') || 55);
            const qty = parseInt(item.querySelector('input').value);
            
            // Calculate price for this specific row
            const rowTotal = basePrice * qty;
            priceDiv.innerText = "₹" + rowTotal.toLocaleString('en-IN');
            
            // Add to the overall grand total
            currentGrandTotal += rowTotal;
        });

        // Update the bottom summary
        const formattedGrandTotal = "₹" + currentGrandTotal.toLocaleString('en-IN', {
            minimumFractionDigits: 2
        });
        
        if(subtotalElement) subtotalElement.innerText = formattedGrandTotal;
        if(totalElement) totalElement.innerText = formattedGrandTotal;
    }

    // Button Listeners
    document.querySelectorAll('.qty-control').forEach(control => {
        const minusBtn = control.querySelector('.minus');
        const plusBtn = control.querySelector('.plus');
        const input = control.querySelector('input');

        plusBtn.addEventListener('click', () => {
            input.value = parseInt(input.value) + 1;
            updateAllPrices();
        });

        minusBtn.addEventListener('click', () => {
            let val = parseInt(input.value);
            if (val > 1) {
                input.value = val - 1;
                updateAllPrices();
            }
        });
    });
    // Remove logic
    document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const row = e.target.closest('.cart-item');
            row.remove();
            updateAllPrices();
        });
    });

    // Initialize on page load
    updateAllPrices();
}); 
</Script>
</body>
</html>