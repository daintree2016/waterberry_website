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
        <div class="desc_part">

        </div>
        <a href="product" class="shop-now-btn">Shop Now</a>         
    </div>

</div>
    <h2 class="heading">Categories</h2>
<div class="cat-grid-wrapper">
    <!-- <a href="collection" class="cat-item-card card-earphone" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">Enjoy</span>
            <span class="title-top">With</span>
            <span class="title-main">Earphone</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://jbtek.in/wp-content/uploads/2023/06/JB-EP225-e1685619026609-430x430.png" alt="Earphone">
    </a>

    <a href="collection" class="cat-item-card card-watch" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">New</span>
            <span class="title-top">Smart</span>
            <span class="title-main">Watch</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://png.pngtree.com/png-vector/20241101/ourmid/pngtree-trendy-smartwatch-with-notifications-and-apps-png-image_14218279.png" alt="Watch">
    </a>

    <a href="collection" class="cat-item-card card-laptop" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">Trend</span>
            <span class="title-top">Devices</span>
            <span class="title-main">Laptop</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://www.transparentpng.com/thumb/laptop/YmlelI-laptops-png-images-notebook-png-image-laptop.png" alt="Laptop">
    </a>

    <a href="collection" class="cat-item-card card-console" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">Enjoy</span>
            <span class="title-top">Gaming</span>
            <span class="title-main">Console</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://wallpapers.com/images/featured/ps5-console-png-ywbv2gv3gfw23o3w.jpg" alt="Console">
    </a>

    <a href="collection" class="cat-item-card card-oculus" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">New</span>
            <span class="title-top">Game</span>
            <span class="title-main">Oculus</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://cdn.prod.website-files.com/676a58d5fdde7ec989f63f29/676a58d5fdde7ec989f63f3e_cat1-5.avif" alt="Oculus">
    </a>

    <a href="collection" class="cat-item-card card-speaker" style="text-decoration: none; display: block;">
        <div class="card-content">
            <span class="label">Trend</span>
            <span class="title-top">Amazon</span>
            <span class="title-main">Speaker</span>
            <button class="browse-btn">BROWSE</button>
        </div>
        <img src="https://cdn.prod.website-files.com/676a58d5fdde7ec989f63f29/676a58d5fdde7ec989f63f3c_cat1-6.avif" alt="Speaker">
    </a> -->
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
 <div class="wrapper">
   <div class="section-prod">
        <!--<div id="loader" class="loader">-->
        <!--    <div class="spinner"></div>-->
        <!--    <p>Loading...</p>-->
        <!--</div>-->
   </div>
</div>

<section class="blog-section">
    
    <div class="container">
        <div class="section-header">
            <h2 class="main-title">Latest Blogs</h2>
        </div>

        <div class="blog-grid">
            <!-- <article class="blog-card">
                <div class="blog-image">
                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?q=80&w=500" alt="Smartphone">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><strong>14</strong> Nov 2024</span>

                    </div>
                    <h3 class="blog-title">Top Electronics You Should Have at Home (2026 Edition)</h3>
                    <p class="blog-excerpt">Whether you're upgrading your home setup or buying new devices, here’s a complete guide to the top electronics every home should have in 2026.</p>
                    <a href="blog1" class="read-more">Read More <i class="arrow">›</i></a>
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
                    <h3 class="blog-title">Technology Hack You Won't Get</h3>
                    <p class="blog-excerpt">Laptops offer flexibility; MacBooks provide seamless integration. Pick based on budget and tech needs.</p>
                    <a href="blog2" class="read-more">Read More <i class="arrow">›</i></a>
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
                    <h3 class="blog-title">Top 10 Small Camera In The World</h3>
                    <p class="blog-excerpt">Enjoy tangle-free audio, portability, and great sound quality. Wireless is the future of listening.</p>
                    <a href="blog3" class="read-more">Read More <i class="arrow">›</i></a>
                </div>
            </article> -->
        </div>
    </div>
</section>
<br>
<section class="about-us">
  <div class="about-container">
    <h2 class="about-title">ABOUT US</h2>
    <p class="about-text">
    <p>
Waterberry is a modern online electronics destination offering a carefully curated range of
<a href="collection" class="link-uline">smart gadgets</a>,
<a href="collection" class="link-uline">accessories</a>,
<a href="collection" class="link-uline">home tech</a>, and
innovative digital products for a smarter, more effortless lifestyle.
We focus on quality, design, and functionality to bring you everyday tech that fits seamlessly into modern living.
</p>
<style>
    .link-uline {
  color: inherit;
  text-decoration: underline;
  text-decoration-thickness: 2px;
  text-underline-offset: 5px;
  cursor: pointer;
  transition: color 0.3s ease;
}

.link-uline:hover {
  color: #6b5cff; /* your theme color */
}
</style>
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
    const rightSide = document.querySelector(".desc_part");
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
    const rightSide = document.querySelector(".desc_part");
    const item = carouselSlides[carouselPosition];
    watchContainer.innerHTML = `
        <img src="${item.image}" class="watch-image">
    `;
    rightSide.innerHTML = `
        <p class="desc-only">${item.description}</p>
    `;
    carouselTimer = setTimeout(() => {
        carouselPosition =
            (carouselPosition + 1) % carouselSlides.length;
        manualUpdate();
    }, 3000);
}
//END CAROSUEL
//categories
   document.addEventListener("DOMContentLoaded", () => {
    const gridWrapper = document.querySelector(".cat-grid-wrapper");

    if (!gridWrapper) return;

    const loadCategories = async () => {
        try {
            const response = await fetch('categories.json');
            const data = await response.json();

            gridWrapper.innerHTML = ""; 

            data.categories.forEach(item => {
                // We use ${item.class} here to apply your CSS colors
                const cardHTML = `
                    <a href="collection" class="cat-item-card ${item.class}" style="text-decoration: none; display: block;">
                        <div class="card-content">
                            <span class="label">${item.label}</span>
                            <span class="title-top">${item["title-top"]}</span>
                            <span class="title-main">${item["title-main"]}</span>
                            <button class="browse-btn">${item["browse-btn"].toUpperCase()}</button>
                        </div>
                        <img src="${item.image}" alt="${item["title-main"]}">
                    </a>
                `;
                gridWrapper.insertAdjacentHTML('beforeend', cardHTML);
            });
        } catch (error) {
            console.error("Error loading categories:", error);
        }
    };

    loadCategories();
});
//NEW LAUNCHES
async function getNewLaunches() {
  const container = document.getElementById("newLaunchesContainer");

  try {
    // const response = await fetch("./newlaunches.json");
    // if (!response.ok) throw new Error("Failed to load JSON");

    // const products = await response.json();
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
        <div class="prod-item-box" data-id="${key}">
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
    document.querySelectorAll(".prod-item-box").forEach((item)=>{
        item.addEventListener("click",(e)=>{
                const asin = item.dataset.id
                window.location.href=`product?id=${asin}`
        })
        // console.log("this is item: ",item)
        
    })
    

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
//blogs
document.addEventListener('DOMContentLoaded', () => {
    const blogGrid = document.querySelector('.blog-grid');

    async function fetchBlogs() {
        try {
            const response = await fetch('blogs.json');
            if (!response.ok) throw new Error('Failed to fetch blog data');
            
            const blogs = await response.json();
            renderBlogs(blogs);
        } catch (error) {
            console.error('Error:', error);
            blogGrid.innerHTML = `<p>Unable to load blogs at this time.</p>`;
        }
    }

    function renderBlogs(blogs) {
        blogGrid.innerHTML = blogs.map(blog => `
            <article class="blog-card">
                <div class="blog-image">
                    <img src="${blog.image}" alt="${blog.alt}">
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><strong>${blog.date}</strong> ${blog.monthYear}</span>
                    </div>
                    <h3 class="blog-title">${blog.title}</h3>
                    <p class="blog-excerpt">${blog.excerpt}</p>
                    <a href="${blog.link}" class="read-more">Read More <i class="arrow">›</i></a>
                </div>
            </article>
        `).join('');
    }
    fetchBlogs();
});
</script>
</body>
</html>













