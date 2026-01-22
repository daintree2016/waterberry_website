<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collection</title>
    <link rel="stylesheet" href="css/collection.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
<?php include("header.php") ?>  
<div class="container">
  <div class="collection-banner-wrapper">
      <div class="collection-banner">
          <img src="https://cdn.prod.website-files.com/66547b42c3b080bb5846ef43/6655d9c844d95f781916ed3e_Contact%20Us%20Image-p-1080.webp" alt="Collection">
      </div>
  </div>

  <div class="filters">
      <!-- Future dynamic filters (Brand, Price, etc.) can go here -->
  </div>

  <div class="background-logo-text">
     <img src="images/waterberry logo.png" alt="Collection">
  </div>

  <!-- Product grid to be filled dynamically from get_featured.php -->
  <div class="product-grid" id="collectionGrid">
      <!-- JS will inject product cards here -->
  </div>
</div> <!-- END CONTAINER -->
<?php include("footer.php") ?>
<script>
// Fetch products from the same JSON API used on the homepage
async function loadCollection() {
    const grid = document.getElementById('collectionGrid');
    if (!grid) return;

    try {
        const resp = await fetch('get_featured');
        const text = await resp.text();
        const data = JSON.parse(text);
        const allProducts = {
            ...(data.is_featured || {}),
            ...(data.is_trending || {})
        };

        grid.innerHTML = '';

        Object.entries(allProducts).forEach(([productId, val], index) => {
            const mainImg = (val.img && val.img.main) ? val.img.main : '';
            const hoverImg = (val.img && val.img.secondary) ? val.img.secondary : (mainImg || '');
            const title   = val.title || 'Product';
            const brand   = val.Brand || 'Waterberry';
            const price   = val.Price || '';

            const card = document.createElement('div');
            card.className = 'product-card';
            card.dataset.id = productId;

            card.innerHTML = `
                <div class="image-box">
                    <img src="${mainImg}" class="product-img" alt="${title}">
                    <img src="${hoverImg}" class="product-image-hover" alt="${title}">
                </div>
                <h4>${title}</h4>
                <p class="brand">Brand: ${brand}</p>
                <p class="price">${price}</p>
                <button class="add-cart-btn">View Details</button>
            `;

            // Staggered animation similar to your original static cards
            card.style.animationDelay = (index * 0.1) + 's';

            // Navigate to product page on click
            card.addEventListener('click', (e) => {
                // Allow button styling without blocking navigation
                if (e.target.classList.contains('add-cart-btn')) {
                    e.preventDefault();
                }
                window.location.href = 'product?id=' + encodeURIComponent(productId);
            });

            grid.appendChild(card);
        });
    } catch (err) {
        console.error('Error loading collection:', err);
        if (grid) {
            grid.innerHTML = '<p>Unable to load products right now. Please try again later.</p>';
        }
    }
}

window.addEventListener('DOMContentLoaded', loadCollection);
</script>
</body>
</html>

