<?php
// Start session once for the whole site so cart and login status work everywhere
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("db.php");

// Simple helpers for header
$isLoggedIn = isset($_SESSION['customer_id']);
$customerName = $_SESSION['customer_name'] ?? '';

// Cart count from session
$cartCount = 0;
if (!empty($_SESSION['cart']) && is_array($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += (int)($item['qty'] ?? 1);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

    <div class="hamburger" id="hamburger">
        <a href="index" class="nav-item">Home</a>
        <a href="about" class="nav-item">About</a>
        <!-- <a href="collection" class="nav-item">Products</a> -->
        <a href="blog1" class="nav-item">Blogs</a>
        <a href="contact" class="nav-item">Contact</a>
    </div>

    <nav class="nav-links" id="navLinks">
        <a href="index" class="nav-item">Home</a>
        <a href="about" class="nav-item">About</a>
        <!-- <a href="collection" class="nav-item">Products</a> -->
        <a href="blog1" class="nav-item">Blogs</a>
        <a href="contact" class="nav-item">Contact</a>
    </nav>

</div>


       
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
            <span class="cart-count" id="cart_count"><?php echo (int)$cartCount; ?></span>
        </div>
    </a>

    <a href="<?php echo $isLoggedIn ? 'customer' : 'signup'; ?>" class="icon-link" title="My Account">
        <svg class="icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
    </a>

   <button class="search-btn" id="searchBtn">
    <svg viewBox="0 0 24 24" width="22" height="22" fill="none"
        stroke="currentColor" stroke-width="2">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
</button>
    <!-- SEARCH DROPDOWN -->
<div class="search-overlay" id="searchOverlay"></div>

<div class="search-side-panel" id="searchSidePanel">
    <div class="search-panel-header">
        <h3>Search Our products</h3>
        <button id="closeSearch" class="close-btn">&times;</button>
    </div>
    <div class="search-panel-body">
        <!-- <input type="text" placeholder="Type to search..." id="searchInput" /> -->
        <!-- <div class="search-results">
            </div> -->
    </div>

    <div class="search-container">
    <div class="input-wrapper">
        <input type="text" id="searchInput" placeholder="Type to search...">
    </div>
    <button type="button" id="submitSearch" class="search-action-btn">Search</button>
</div>
</div>
</div>
    </div>
</header>
<script>
const searchBtn = document.getElementById("searchBtn");
const searchSidePanel = document.getElementById("searchSidePanel");
const searchOverlay = document.getElementById("searchOverlay");
const closeSearch = document.getElementById("closeSearch");
const searchInput = document.getElementById("searchInput");

// Function to open panel
searchBtn.addEventListener("click", (e) => {
    e.preventDefault();
    searchSidePanel.classList.add("active");
    searchOverlay.classList.add("active");
    setTimeout(() => searchInput.focus(), 400); // Focus after slide finishes
});

// Function to close panel
const hideSearch = () => {
    searchSidePanel.classList.remove("active");
    searchOverlay.classList.remove("active");
};

closeSearch.addEventListener("click", hideSearch);
searchOverlay.addEventListener("click", hideSearch);
document.getElementById("submitSearch").addEventListener("click", function() {
    const query = document.getElementById("searchInput").value;
   
    if (query.trim() !== "") {
        // Redirects to your search page with the query
        window.location.href = "search?query=" + encodeURIComponent(query);
    } else {
        alert("Please enter a search term.");
    }
});

// Also allow the "Enter" key to trigger the search
document.getElementById("searchInput").addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
        document.getElementById("submitSearch").click();
    }

});


const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("navLinks");

hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

</script>
</body>
</html>
