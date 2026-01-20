<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>collection</title>
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

        <select>
            <option selected disabled>Brand</option>
            <option>Sony</option>
            <option>Canon</option>
            <option>Nikon</option>
            <option>Fujifilm</option>
            <option>Panasonic</option>
        </select>


        <select>
            <option selected disabled>Color</option>
            <option>Black</option>
            <option>Silver</option>
            <option>Grey</option>
            <option>White</option>
        </select>

      
        <div class="price-range">
            <label>Price: <span id="priceValue">₹50,000</span></label>
            <input type="range" min="0" max="100000" value="50000" step="1000" id="priceSlider">
        </div>

    </div>
<div class="background-logo-text">Waterberry</div>

<div class="container">
   
</div>

    
    <div class="product-grid">

       
        <div class="product-card">
            <div class="image-box">
                <img src="https://fotocentreindia.com/wp-content/uploads/Fujifilm-Instax-Mini-SE-Fun-Pack-Instant-Camera-Blue-Online-Buy-in-India_2.jpg" class="product-img" alt="">
                <img src="https://assets.myntassets.com/w_412,q_30,dpr_3,fl_progressive,f_webp/assets/images/28488446/2024/7/22/7f1537a9-73f1-46d8-b7ff-99c6cc1b05831721647928453-FUJIFILM-Blue-Instax-Mini-12-Instant-Camera-5111721647928133-1.jpg" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: Black</p>

            <p class="price">₹1,999 <span class="old-price">₹2,599</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 2 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://media.wired.com/photos/68cb83e86a7338e553645554/1:1/w_3867,h_3867,c_limit/iPhone%2017%20Sage%20SOURCE%20Julian%20Chokkattu.jpg" class="product-img" alt="">
                <img src="https://i.redd.it/gd3ya48htv391.jpg" class="product-image-hover" alt="">
            </div>

            <h4>Casual inphone16</h4>
            <p class="brand">Brand: apple</p>
            <p class="color">Color: light green</p>

            <p class="price">₹799 <span class="old-price">₹999</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 3 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://www.tasteofhome.com/wp-content/uploads/2023/02/TOH-ecomm-stanley-tumblr-water-bottle-via-stanley1913.com_.jpg?w=680" class="product-img" alt="">
                <img src="https://cdn.theatlantic.com/thumbor/209ix1g7QUfMDiQOLNIsTvolhss=/741x0:2646x1905/1080x1080/media/img/mt/2024/01/h_16083210/original.jpg" class="product-image-hover" alt="">
            </div>

            <h4>Stanley</h4>
            <p class="brand">Brand: stanley</p>
            <p class="color">Color: biscuit</p>

            <p class="price">₹2,499 <span class="old-price">₹3,199</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 4 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://rukminim2.flixcart.com/image/480/640/xif0q/sling-bag/8/i/w/women-sling-bag-trendy-designer-sling-bag-for-women-1-5-woman-original-imahff5hetxdrutz.jpeg?q=90" class="product-img" alt="">
                <img src="https://imgmediagumlet.lbb.in/media/2025/01/678df66d840e9d381196eeec_1737356909694.jpg" class="product-image-hover" alt="">
            </div>

            <h4>Slim bag</h4>
            <p class="brand">Brand: Gucci</p>
            <p class="color">Color: Black</p>

            <p class="price">₹1,299 <span class="old-price">₹1,699</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 5 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://cdn.mos.cms.futurecdn.net/BJh458XWGNgr5vCkG45HPB.jpg" class="product-img" alt="">
                <img src="https://images-cdn.ubuy.co.in/67cb1501600c8e53490db480-pentax-17-half-frame-compact-film.jpg" class="product-image-hover" alt="">
            </div>

            <h4>Camera</h4>
            <p class="brand">Brand: canon</p>
            <p class="color">Color: Black</p>

            <p class="price">₹499 <span class="old-price">₹699</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>
   <!-- PRODUCT CARD 6 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://cinemacenter.in/image/cache/catalog/images/0049690_fujifilm-instax-mini-12-instant-film-camera-pastel-blue_500-500x500.jpeg" class="product-img" alt="">
                <img src="https://assets.myntassets.com/w_412,q_30,dpr_3,fl_progressive,f_webp/assets/images/28488446/2024/7/22/7f1537a9-73f1-46d8-b7ff-99c6cc1b05831721647928453-FUJIFILM-Blue-Instax-Mini-12-Instant-Camera-5111721647928133-1.jpg" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: Black</p>

            <p class="price">₹1,999 <span class="old-price">₹2,599</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 7 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1742292638-polaroid-now-gen-2-67d946795e206.jpg?crop=1.00xw:0.801xh;0,0.0547xh&resize=980:*" class="product-img" alt="">
                <img src="https://media.wired.com/photos/592742907034dc5f91bee139/3:2/w_2560%2Cc_limit/PolaroidSnap_021.jpg" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: light green</p>

            <p class="price">₹799 <span class="old-price">₹999</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 8 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://assets.myntassets.com/h_1440,q_75,w_1080/v1/assets/images/28489572/2024/7/16/b162b167-76f0-4e47-8efa-6c51af2dd8c41721122634525-FUJIFILM-Instax-Mini-11-Instant-Camera---Blush-Pink-96117211-1.jpg" class="product-img" alt="">
                <img src="https://images-cdn.ubuy.co.in/683fe4279cb061bfe203dd06-fujifilm-instax-mini-12-instant-camera.jpg" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: biscuit</p>

            <p class="price">₹2,499 <span class="old-price">₹3,199</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 9 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://www.instaxcanada.ca/wp-content/uploads/2024/06/instax-WIDE-400_Green_Product-image-01.png" class="product-img" alt="">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhaX38zHrd2rNUvIRgRUXgUgXb68K3A12mOw&s" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: Black</p>

            <p class="price">₹1,299 <span class="old-price">₹1,699</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>

        <!-- PRODUCT CARD 10 -->
        <div class="product-card">
            <div class="image-box">
                <img src="https://www.skinnydiplondon.com/cdn/shop/files/instax-mini-12-camera-lilac-purple-photography-instax-30628629905495.jpg?v=1692765427&width=1280 " class="product-img" alt="">
                <img src="https://m.media-amazon.com/images/I/71Wejy1yk3L._AC_.jpg" class="product-image-hover" alt="">
            </div>

            <h4>instant camera</h4>
            <p class="brand">Brand: instantx</p>
            <p class="color">Color: Black</p>

            <p class="price">₹499 <span class="old-price">₹699</span></p>

            <button class="add-cart-btn">Add to Cart</button>
        </div>
    </div> <!-- END PRODUCT GRID -->
</div> <!-- END CONTAINER -->
<?php include("footer.php") ?>
<script>
    // PRICE RANGE LIVE UPDATE
    const slider = document.getElementById("priceSlider");
    const output = document.getElementById("priceValue");

    slider.oninput = function () {
        output.textContent = "₹" + this.value.toLocaleString();
    }
    window.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.product-card');
    cards.forEach((card, index) => {
        // Delay increases for each card
        card.style.animationDelay = `${index * 0.1}s`;
    });
});
</script>
</body>
</html>
