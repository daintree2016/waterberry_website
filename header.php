<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include("db.php")?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<header class="header-container">
    <div class="logo">
        <a href="index"><img src="https://github.com/daintree2016/waterberry_website/blob/main/images/waterberry%20logo.png?raw=true" alt="Flash."></a>
    </div>

    <div class="nav-group-right">
        <nav class="nav-links">
            <a href="index" class="nav-item">Home</a>
            <a href="about" class="nav-item">About us</a>
            <a href="#" class="nav-item">Products</a>
            <a href="blog1.php" class="nav-item">Blogs</a>
            <a href="contact" class="nav-item">Contact us</a>
        </nav>

        
<div class="nav-icons">
    <a href="wishlist" class="icon-link" title="Wishlist">
        <svg class="icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
        </svg>
    </a>

    <a href="cart" class="icon-link" title="Shopping Cart">
        <div class="cart-container">
            <svg class="icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            <span class="cart-count">2</span>
        </div>
    </a>

    <a href="signup" class="icon-link" title="My Account">
        <svg class="icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
    </a>

    <a href="index" class="icon-link" title="Search">
        <svg class="icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
    </a>
</div>
    </div>
</header>
</body>
</html>
