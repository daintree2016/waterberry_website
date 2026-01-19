<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist </title>
    <link rel="stylesheet" href="css/wishlist.css">
</head>
<body>

    <main class="wishlist-container">
        <div class="wishlist-title">
            <span>♡ WISHLIST</span>
        </div>

        <div class="wishlist-content">
            <div class="wishlist-header">
                <div class="col-product">PRODUCT</div>
                <div class="col-qty">QUANTITY</div>
                <div class="col-price">PRICE</div>
                <div class="col-stock">STOCK STATUS</div>
                <div class="col-action">ACTION</div>
            </div>

            <div class="product-row">
                <div class="col-product">
                    <img src="https://www.sony.co.in/microsite/where-to-buy/electronics/cyber-shot-compact-cameras/dsc-w800/images/mod-img.jpg" alt="Product">
                    <div class="product-info">
                        <p class="name">Camera</p>
                    </div>
                </div>
                <div class="col-qty">
                    <div class="qty-box">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </div>
                <div class="col-price">
                    <span class="old-price">405.00</span>
                    <span class="new-price">375.00</span>
                </div>
                <div class="col-stock">
                    <span class="in-stock">✓ 6 in stock</span>
                </div>
                <div class="col-action">
                    <div class="action-buttons">
                        <button class="btn-cart">Add To Cart</button>
                        <button class="btn-delete">🗑</button>
                    </div>
                </div>
            </div>
            <div class="product-row">
                <div class="col-product">
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRR-NOKSHO4Q4kruGeMWIsOKUbrQwGl-sadNiT2yE_D1m372NuK60zl9QFm4Vs2i44xaTwAyD9uDkMCFX4fPtfacfOgZdjIhkFth6-AYwQHLEAxicphCA1xBGY" alt="Product">
                    <div class="product-info">
                        <p class="name">Speaker</p>
                    </div>
                </div>
                <div class="col-qty">
                    <div class="qty-box">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </div>
                <div class="col-price">505.00</div>
                <div class="col-stock">
                    <span class="in-stock">✓ 5 in stock</span>
                </div>
                <div class="col-action">
                    <div class="action-buttons">
                        <button class="btn-cart">Add To Cart</button>
                        <button class="btn-delete">🗑</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script>
    // Function to handle deleting a row
document.querySelectorAll('.btn-delete').forEach(button => {
    button.addEventListener('click', function() {
        const row = this.closest('.product-row');
        if (confirm("Are you sure you want to remove this item?")) {
            row.style.opacity = '0';
            setTimeout(() => row.remove(), 300); // Smooth fade out then remove
        }
    });
});

// Function to handle quantity increment/decrement
document.querySelectorAll('.qty-box').forEach(box => {
    const btnMinus = box.querySelector('button:first-child');
    const btnPlus = box.querySelector('button:last-child');
    const qtySpan = box.querySelector('span');

    btnPlus.addEventListener('click', () => {
        let currentQty = parseInt(qtySpan.innerText);
        qtySpan.innerText = currentQty + 1;
    });

    btnMinus.addEventListener('click', () => {
        let currentQty = parseInt(qtySpan.innerText);
        if (currentQty > 1) {
            qtySpan.innerText = currentQty - 1;
        }
    });
});



</script>
</body>
</html>