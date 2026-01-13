<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("db.php")?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nova+Mono&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php") ?>

  <div id="newsletterModal" class="modal-overlay">
    <div class="modal-container">
        <button class="close-modal" onclick="closeModal()">&times;</button>

        <div class="modal-section modal-text">
            <div class="modal-inner">
                <p class="psst">PSST! GET</p>
                <h2 class="promo-head">10% OFF</h2>
                <p class="promo-desc">
                    Join our email list to <strong>save 10%</strong>, and be the first to hear about new products and deals.
                </p>
               
                <form class="modal-form">
                    <input type="email" placeholder="Email" required>
                    <button type="submit" class="continue-btn">CONTINUE</button>
                </form>
            </div>
        </div>

        <div class="modal-section modal-image">
            <img src="3.png" alt="Products">
        </div>
    </div>
</div>
 
 <div class="banner">

    <div class="left_arrow">
        <p><</p>
    </div>
    <div class="right_arrow">
        <p>></p>
    </div>
    <div class="left-side">
    </div>

        <div class="watch-container">
        </div>    

    <div class="right-side">
        <a href="#" class="shop-now-btn">Shop Now</a>
    </div>

</div>
    <h2 class="heading">Categories</h2>
    <div class="cat-grid-wrapper">
        <div class="cat-item-card card-earphone">
            <div class="card-content">
                <span class="label">Enjoy</span>
                <span class="title-top">With</span>
                <span class="title-main">Earphone</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://jbtek.in/wp-content/uploads/2023/06/JB-EP225-e1685619026609-430x430.png" alt="Earphone">
        </div>
        <div class="cat-item-card card-watch">
            <div class="card-content">
                <span class="label">New</span>
                <span class="title-top">Smart</span>
                <span class="title-main">Watch</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://png.pngtree.com/png-vector/20241101/ourmid/pngtree-trendy-smartwatch-with-notifications-and-apps-png-image_14218279.png" alt="Watch">
        </div>
        <div class="cat-item-card card-laptop">
            <div class="card-content">
                <span class="label">Trend</span>
                <span class="title-top">Devices</span>
                <span class="title-main">Laptop</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://www.transparentpng.com/thumb/laptop/YmlelI-laptops-png-images-notebook-png-image-laptop.png" alt="Laptop">
        </div>
        <div class="cat-item-card card-console">
            <div class="card-content">
                <span class="label">Enjoy</span>
                <span class="title-top">Gaming</span>
                <span class="title-main">Console</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://wallpapers.com/images/featured/ps5-console-png-ywbv2gv3gfw23o3w.jpg" alt="Console">
        </div>
        <div class="cat-item-card card-oculus">
            <div class="card-content">
                <span class="label">New</span>
                <span class="title-top">Game</span>
                <span class="title-main">Oculus</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://cdn.prod.website-files.com/676a58d5fdde7ec989f63f29/676a58d5fdde7ec989f63f3e_cat1-5.avif" alt="Oculus">
        </div>
        <div class="cat-item-card card-speaker">
            <div class="card-content">
                <span class="label">Trend</span>
                <span class="title-top">Amazon</span>
                <span class="title-main">Speaker</span>
                <button class="browse-btn">BROWSE</button>
            </div>
            <img src="https://cdn.prod.website-files.com/676a58d5fdde7ec989f63f29/676a58d5fdde7ec989f63f3c_cat1-6.avif" alt="Speaker">
        </div>
    </div>




<!-- BRANDS SECTION -->
<section class="brands-section">
    <h2>Premium Brands Collection</h2>
    <p>Explore top electronics brands, all in one place</p>
<br>
    <div class="brands-row">
        <div class="brand-card"><img src="https://1000logos.net/wp-content/uploads/2017/04/Font-Panasonic-Logo.jpg"></div>
        <div class="brand-card"><img src="https://crystalpng.com/wp-content/uploads/2024/08/stanley-logo-png.png"></div>
        <div class="brand-card"><img src="https://logos-world.net/wp-content/uploads/2020/11/Logitech-Emblem.png"></div>
        <div class="brand-card"><img src="https://i0.wp.com/www.dafontfree.io/wp-content/uploads/2021/08/Sony-Logo-Font.jpg?resize=1100%2C800&ssl=1"></div>
        <div class="brand-card"><img src="https://static.vecteezy.com/system/resources/previews/009/124/770/non_2x/jbl-logo-jbl-letter-jbl-letter-logo-design-initials-jbl-logo-linked-with-circle-and-uppercase-monogram-logo-jbl-typography-for-technology-business-and-real-estate-brand-vector.jpg"></div>
    </div>
</section>

<br><br>
<h2 class="heading">New Launches</h2>
    <div class="prod-grid-wrapper" id="newLaunchesContainer">
    </div>
 
<section class="blog-section">
    <div class="container">
        <div class="section-header">
            <h2 class="main-title">Latest Blogs</h2>
        </div>

        <div class="blog-grid">
            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=500" alt="Smartphone">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><strong>14</strong> Nov 2024</span>
                    </div>
                    <h3 class="blog-title">Reasons to Upgrade Your Smartphone</h3>
                    <p class="blog-excerpt">Get better cameras, faster speeds, and improved security. Upgrade for smoother, more efficient use.</p>
                    <a href="#" class="read-more">Read More <i class="arrow">›</i></a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?q=80&w=500" alt="Laptop">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><strong>27</strong> Oct 2024</span>
                    </div>
                    <h3 class="blog-title">Laptop vs. MacBook: A Quick Guide</h3>
                    <p class="blog-excerpt">Laptops offer flexibility; MacBooks provide seamless integration. Pick based on budget and tech needs.</p>
                    <a href="#" class="read-more">Read More <i class="arrow">›</i></a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=500" alt="Headphones">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><strong>15</strong> Oct 2024</span>
                    </div>
                    <h3 class="blog-title">The Case for Wireless Headphones</h3>
                    <p class="blog-excerpt">Enjoy tangle-free audio, portability, and great sound quality. Wireless is the future of listening.</p>
                    <a href="#" class="read-more">Read More <i class="arrow">›</i></a>
                </div>
            </article>
        </div>
    </div>
</section>
<br>
<section class="about-us">
  <div class="about-container">
    <h2 class="about-title">ABOUT US</h2>
    <p class="about-text">
    Waterberry is a modern online electronics store offering a curated range of smart gadgets, accessories, home tech, and innovative digital products for everyday living.
  </div>
</section>
<br>
<br>

<?php include("footer.php") ?>
<script>
let carouselSlides = [];
let carouselPosition = 0;
let carouselTimer = null;
async function get_carousel() {
    const watchContainer = document.querySelector(".watch-container");
    const leftSide = document.querySelector(".left-side");
    const rightSide = document.querySelector(".right-side");
    try {
        const response = await fetch('./carousel.json');
        if (response.status === 200) {
            const data = await response.json();
            carouselSlides = data.carousel;
            if (carouselSlides.length > 0) {
                const jsonTitle = carouselSlides[0].sale;
                const formattedTitle = jsonTitle.replace(" ", "<br>");
                leftSide.innerHTML = `<h1>${formattedTitle}</h1>`;
            }
            function update_carousel() {
                const currentItem = carouselSlides[carouselPosition];
                watchContainer.innerHTML = `
                    <img src="${currentItem.image}" class="watch-image">
                `;
                rightSide.innerHTML = `
                    <p class="desc-only">${currentItem.description}</p>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                `;
                carouselPosition =
                    (carouselPosition + 1) % carouselSlides.length;
                carouselTimer = setTimeout(update_carousel, 3000);
            }
            update_carousel();
        }
    } catch (error) {
        console.error("Error:", error);
    }
}
get_carousel();
document.querySelector(".left_arrow").addEventListener("click", () => {
    clearTimeout(carouselTimer);
    carouselPosition =
        (carouselPosition - 1 + carouselSlides.length) % carouselSlides.length;
    manualUpdate();
});
document.querySelector(".right_arrow").addEventListener("click", () => {
    clearTimeout(carouselTimer);
    carouselPosition =
        (carouselPosition + 1) % carouselSlides.length;
    manualUpdate();
});
function manualUpdate() {
    const watchContainer = document.querySelector(".watch-container");
    const rightSide = document.querySelector(".right-side");
    const item = carouselSlides[carouselPosition];
    watchContainer.innerHTML = `
        <img src="${item.image}" class="watch-image">
    `;
    rightSide.innerHTML = `
        <p class="desc-only">${item.description}</p>
        <a href="#" class="shop-now-btn">Shop Now</a>
    `;
    carouselTimer = setTimeout(() => {
        carouselPosition =
            (carouselPosition + 1) % carouselSlides.length;
        manualUpdate();
    }, 3000);
}


async function getNewLaunches() {
  const container = document.getElementById("newLaunchesContainer");

  try {
    const response = await fetch("./newlaunches.json");
    if (!response.ok) throw new Error("Failed to load JSON");

    const products = await response.json();
    let html = "";
    
    const resp = await fetch("get_featured");
    console.log(resp);
    const text = await resp.text();
    const data = JSON.parse(text);
    console.log(data["is_featured"]);
    const data_set = data.is_trending
    console.log("ds: ",data_set)

    Object.entries(data_set).forEach(([key,val])=>{
         console.log(val["Price"])
      html += `
        <div class="prod-item-box">
          <div class="image-container">
            <img src="${val["img"]["main"]}" class="main-img" alt="${val["title"]}">
            <img src="${val["img"]["secondary"]}" class="hover-img" alt="${val["title"]}">
          </div>
          <div class="product-info">
            <div class="divider"></div>
            <h3 class="product-title">${val["title"]}</h3>
            <p class="product-price">${val["Price"]}</p>
          </div>
        </div>
      `;
    });

    container.innerHTML = html;

  } catch (error) {
    console.error("New Launches Error:", error);
  }
}
getNewLaunches();
// window.onload = function() {
//     setTimeout(() => {
//         document.getElementById("newsletterModal").style.display = "flex";
//     }, 1000);
// };
function closeModal() {
    document.getElementById("newsletterModal").style.display = "none";
}
window.onclick = function(event) {
    let modal = document.getElementById("newsletterModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

async function get_products() {
    try {
        const response = await fetch("get_featured");

        console.log(response);

        const text = await response.text();
        console.log("text",text)

        const data = JSON.parse(text);
        console.log(data);

    } catch (error) {
        console.error("Error:", error);
    }
}

get_products();

</script>
</body>
</html>


