<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Product page</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/product.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php"); ?>    

<div class="container">

  <!-- LEFT -->
  <div class="thumbs">
    <img src="https://londonlash.com/cdn/shop/products/Stanley-LL4.jpg?v=1708446397">
    <img src="https://static01.nyt.com/images/2022/05/17/fashion/17STANLEY-BOTTLE1/17STANLEY-BOTTLE1-videoSixteenByNineJumbo1600.jpg">
    <img src="https://hips.hearstapps.com/hmg-prod/images/stanley-quencher-tumbler-april-2023-642b61bd06f19.png?crop=0.668xw:1.00xh;0.0850xw,0&resize=640:*">
    <img src="https://media.greenmatters.com/brand-img/Ina3-uiYY/0x0/are-stanley-cups-worth-it-2-1704721221015.jpg">
    <img src="https://baskets-store.com/cdn/shop/collections/526B7563.jpg?v=1750689905">
    <img src="https://baskets-store.com/cdn/shop/collections/526B7563.jpg?v=1750689905">
    
  </div>

  <!-- MAIN IMAGE -->
  <div class="main">
    <img src="https://baskets-store.com/cdn/shop/collections/526B7563.jpg?v=1750689905">
  </div>

  <!-- DETAILS -->
  <div class="details">
    <div class="brand">Stanley</div>
    <div class="title">Stanley 40 oz. Quencher H2.0 FlowState Tumbler - POOL</div>

    <div class="price-row">
      <div class="price">₹12,847 </div>
      <div class="old">₹10,847</div>
      <div class="discount">-24% </div>
    </div>

    <div class="desc">
      ON-THE-GO CONVENIENCE: With a detachable crossbody strap, this carry-all fits your 40 OZ Stanley tumbler for hands-free sipping while commuting or adventuring. The thoughtful design of this Stanley accessory keeps your essentials organized.

    </div>

   <div class="product-actions">
    <div class="quantity-selector">
        <button type="button" class="qty-btn" id="minus">-</button>
        <span class="qty-number">1</span>
        <button type="button" class="qty-btn" id="plus">+</button>
    </div>

    <button class="wishlist-btn">
        <span class="heart-icon">♡</span>
    </button>
</div>
<br>
    <div class="buttons">
      <button class="add">ADD TO CART</button>
      <button class="buy">BUY NOW</button>
    </div>

    <div class="ship">Ships at January 14th.</div>

   <div class="features">
  <div class="feature-item">
    <img src="images/delivery-rider-black-icon.png" alt="Fast Shipping">
  </div>
  <div class="feature-item">
    <img src="images/sale-return-icon_11083555.png" alt="Easy Return">
  </div>
  <div class="feature-item">
    <img src="images/secure-payment-icon.png" alt="Pay Safe">
  </div>
  <div class="feature-item">
    <img src="images/quality-assurance-icon.png" alt="Quality Assured">
  </div>
</div>

   <div class="side-info">

  <!-- KEY POINTS -->
  <div class="simple-box toggle-box">
    <div class="simple-header">
      <span>Key Points</span>
      <span class="simple-icon">+</span>
    </div>
    <div class="simple-body">
      <ul>
        <li>Delivery Mode: Handled with care via Local Courier</li>
        <li>The Wait: Expect your parcel in 10–15 days</li>
        <li>Our Gift: No shipping costs, ever</li>
        <li>Change of Heart: Easy returns for 2 days</li>
        <li>The Box: 100% Earth-Friendly Compostable Packaging</li>
      </ul>
    </div>
  </div>

  <!-- WARRANTY -->
  <!-- <div class="simple-box toggle-box">
    <div class="simple-header">
      <span>Warranty</span>
      <span class="simple-icon">+</span>
    </div>

    <div class="simple-body">
      <p>
        This product comes with a <strong>1 Month warranty</strong>.
        The warranty covers defects in materials and normal use.
        Proof of purchase is required to claim warranty support.
      </p>
    </div>
  </div> -->

</div> 
  </div>
<!-- KEY POINTS + SHIPPING -->


</div>
<!-- PRODUCT DETAILS ACCORDION -->


<div class="tabs-section-wrapper">
  <div class="tabs-container">
    <div class="tabs-header">
      <div class="tab-item active" onclick="toggleTab('description', this)">
        <span class="t-icon"></span> Description
      </div>
      <div class="tab-item" onclick="toggleTab('specification', this)">
        <span class="t-icon"></span> About product
      </div>
      <div class="tab-item" onclick="toggleTab('returns', this)">
        <span class="t-icon"></span> Details & specification
      </div>
    </div>

    <div class="tabs-content">
      <div id="description" class="tab-pane active">
        <p>ON-THE-GO CONVENIENCE: With a detachable crossbody strap, this carry-all fits your 40 OZ Stanley tumbler for hands-free sipping while commuting or adventuring. The thoughtful design of this Stanley accessory keeps your essentials organized.</p>
      </div>
      
      <div id="specification" class="tab-pane">
        <p><strong>Material:</strong> BPA-free Stainless Steel<br>
           <strong>Weight:</strong> 1.4 lbs<br>
           <strong>Dimensions:</strong> 3.86L x 5.82W x 12.3H in</p>
      </div>
      <div id="returns" class="tab-pane">
        <p>We offer a 2-day return policy for unused items in original packaging. Proof of purchase required.</p>
      </div>
    </div>
  </div>
</div>

<section class="faq-box">
  <div class="faq-inner">

    <!-- LEFT SIDE -->
    <div class="faq-left">
      <h2>FAQs</h2>
    </div>

    <!-- RIGHT SIDE -->
    <div class="faq-right">

      <div class="faq-item active">
        <div class="faq-question">
          <span>When we get the parcel?</span>
          <span class="faq-icon">−</span>
        </div>
        <div class="faq-answer">
          Yes, all our products are 100% vegan and cruelty-free. We never test on animals.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <span>whats the meaning of waterberry?</span>
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer">
          No, our products are free from parabens, sulfates, and harmful chemicals.
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-question">
          <span>is there any cod option?</span>
          <span class="faq-icon">+</span>
        </div>
        <div class="faq-answer">
          Yes, they are dermatologist-tested and safe for sensitive skin.
        </div>
      </div>

    </div>
  </div>
</section>

</section>
<!-- YOU MAY ALSO LIKE -->
<section class="recommend">
  <div class="recommend-head">
    <h2>You May Also Like</h2>
    <div class="nav-arrows">
      <span onclick="scrollRecommend(-1)">←</span>
      <span onclick="scrollRecommend(1)">→</span>
    </div>
  </div>

  <div class="recommend-list" id="recommendList">
    <div class="card">
      <div class="badge">NEW</div>
      <div class="card-img"><img src="https://media.cnn.com/api/v1/images/stellar/prod/240110181759-01-stanley-cups-target.jpg?c=16x9" /></div>
      <div class="card-info">
        <small>VYA NATURALS</small>
        <h4>Turmeric Clarifying Face Wash</h4>
        <div class="price">₹34</div>
      </div>
    </div>

    <div class="card">
      <div class="badge">LIMITED OFFER</div>
      <div class="card-img"><img src="https://media.greenmatters.com/brand-img/rt7yRotiH/0x0/are-stanley-cups-worth-it-1-1704720942463.jpg" /></div>
      <div class="card-info">
        <small>ISTREE</small>
        <h4>Hyaluronic Acid Toner Plus</h4>
        <div class="price">₹30 <del>₹38</del></div>
      </div>
    </div>

    <div class="card highlight">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://www.waterbottle.tech/wp-content/uploads/2025/08/stanley-cup-collection.jpg" /></div>
      <div class="card-info">
        <small>FRE</small>
        <h4>Purify Body</h4>
        <div class="price">₹24 <del>₹30</del></div>
      </div>
    </div>

    <div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://www.parents.com/thmb/7C5X7yB4Fa2Ugn98fgQNjwK7x7g=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/par-the-new-stanley-cup-has-my-teens-ditching-their-owalas-and-returning-to-the-brand-tout-d5123796560c4738af5d508af116e2cf.jpg" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>
    <div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://cdn.shopify.com/s/files/1/0516/4564/5000/files/Web_PNG_Square-TheQuencherProTourFlipstrawTumbler30OZ-BabyBowPinkPeppermint-Front_ccb2f04d-7f38-4efd-b590-79fc08ad86cc.png?v=1761753219&width=824&height=824" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>    
    <div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://www.tasteofhome.com/wp-content/uploads/2023/02/TOH-ecomm-stanley-tumblr-water-bottle-via-stanley1913.com_.jpg?w=680" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>
    <div class="card">
       <div class="badge">NEW</div>
       <div class="card-img"><img src="https://londonlash.com/cdn/shop/products/Stanley-LL4.jpg?v=1708446397" /></div>
       <div class="card-info">
         <small>STANLEY</small>
         <h4>Pool Blue 40oz</h4>
         <div class="price">₹45</div>
       </div>
    </div>
     <div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://hips.hearstapps.com/hmg-prod/images/stanley-quencher-tumbler-april-2023-642b61bd06f19.png?crop=0.668xw:1.00xh;0.0850xw,0&resize=640:*" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>
<div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://cdn.shopify.com/s/files/1/0516/4564/5000/files/Web_PNG_Square-TheQuencherProTourFlipstrawTumbler30OZ-BabyBowPinkPeppermint-Front_ccb2f04d-7f38-4efd-b590-79fc08ad86cc.png?v=1761753219&width=824&height=824" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>  
    <div class="card">
      <div class="badge">BEST SELLER</div>
      <div class="card-img"><img src="https://cdn.shopify.com/s/files/1/0516/4564/5000/files/Web_PNG_Square-TheQuencherProTourFlipstrawTumbler30OZ-BabyBowPinkPeppermint-Front_ccb2f04d-7f38-4efd-b590-79fc08ad86cc.png?v=1761753219&width=824&height=824" /></div>
      <div class="card-info">
        <small>THE ORDINARY</small>
        <h4>Squalane Cleanser</h4>
        <div class="price">₹36</div>
      </div>
    </div>  
  </div>
</section>
<?php include("footer.php"); ?> 
</body>
<script>
  // ===== THUMBNAIL CLICK =====
const thumbs = document.querySelectorAll('.thumbs img');
const mainImg = document.querySelector('.main img');

thumbs.forEach(thumb => {
  thumb.addEventListener('click', () => {
    mainImg.src = thumb.src;
    thumbs.forEach((thumb) => {
  thumb.addEventListener('click', () => {
    // Add fade-out class
    mainImg.classList.add('fade-out');

    // Wait for transition to finish, then change image
    setTimeout(() => {
      mainImg.src = thumb.src;
      mainImg.classList.remove('fade-out');
    }, 200); // match half of the CSS transition time
  });
});
  });
});

// ===== THUMBNAIL ARROWS =====
const thumbContainer = document.querySelector('.thumbs');
const thumbArrows = document.querySelectorAll('.thumbs .arrow');

thumbArrows.forEach(arrow => {
  arrow.addEventListener('click', () => {
    if(arrow.textContent === '↑'){
      thumbContainer.scrollTop -= 120; 
    } else {
      thumbContainer.scrollTop += 120; 
    }
  });
});


// 1. Heart Button Logic
const heart = document.querySelector('.wishlist-btn'); 

heart.addEventListener('click', () => {
    heart.classList.toggle('active');
  
    const icon = heart.querySelector('.heart-icon');
    if (heart.classList.contains('active')) {
        icon.textContent = '♥'; 
        icon.style.color = '#e74c3c'; 
    } else {
        icon.textContent = '♡'; 
        icon.style.color = '#333';  
    }
});
// 2. Quantity Selector Logic
const minusBtn = document.getElementById('minus');
const plusBtn = document.getElementById('plus');
const qtyNumber = document.querySelector('.qty-number');
// Plus Button Click
plusBtn.addEventListener('click', () => {
    let currentQty = parseInt(qtyNumber.textContent);
    qtyNumber.textContent = currentQty + 1;
});
// Minus Button Click
minusBtn.addEventListener('click', () => {
    let currentQty = parseInt(qtyNumber.textContent);
    if (currentQty > 1) {
        qtyNumber.textContent = currentQty - 1;
    }
});
const accordionItems = document.querySelectorAll('.product-accordion .acc-item');
accordionItems.forEach((item, index) => {
  const header = item.querySelector('.acc-header');
  const body = item.querySelector('.acc-body');
  const icon = item.querySelector('.icon');
  // OPEN FIRST ITEM BY DEFAULT
  if(index === 0){
    item.classList.add('open');
    body.style.maxHeight = body.scrollHeight + "px";
    icon.textContent = '−';
  }
  header.addEventListener('click', () => {
    accordionItems.forEach(i => {
      if (i !== item) { // close others
        i.classList.remove('open');
        i.querySelector('.acc-body').style.maxHeight = 0;
        i.querySelector('.icon').textContent = '+';
      }
    });

    // toggle current item
    if(item.classList.contains('open')){
      item.classList.remove('open');
      body.style.maxHeight = 0;
      icon.textContent = '+';
    } else {
      item.classList.add('open');
      body.style.maxHeight = body.scrollHeight + "px";
      icon.textContent = '−';
    }
  });
});


// TOGGLE KEYPOINTS & WARRANTY WITH CONTENT
const toggleBoxes = document.querySelectorAll('.toggle-box');

toggleBoxes.forEach(box => {
  const header = box.querySelector('.simple-header');
  const body = box.querySelector('.simple-body');
  const icon = box.querySelector('.simple-icon');

  header.addEventListener('click', () => {
    // close others
    toggleBoxes.forEach(b => {
      if (b !== box) {
        b.classList.remove('active');
        b.querySelector('.simple-body').style.maxHeight = null;
        b.querySelector('.simple-icon').textContent = '+';
      }
    });

    // toggle current
    if (box.classList.contains('active')) {
      box.classList.remove('active');
      body.style.maxHeight = null;
      icon.textContent = '+';
    } else {
      box.classList.add('active');
      body.style.maxHeight = body.scrollHeight + 'px';
      icon.textContent = '−';
    }
  });
});


const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item=>{
  const question = item.querySelector('.faq-question');
  const answer = item.querySelector('.faq-answer');
  const icon = item.querySelector('.faq-icon');

  question.addEventListener('click',()=>{
    faqItems.forEach(i=>{
      if(i!==item){
        i.classList.remove('active');
        i.querySelector('.faq-answer').style.maxHeight = null;
        i.querySelector('.faq-icon').textContent = '+';
      }
    });

    if(item.classList.contains('active')){
      item.classList.remove('active');
      answer.style.maxHeight = null;
      icon.textContent = '+';
    }else{
      item.classList.add('active');
      answer.style.maxHeight = answer.scrollHeight + 'px';
      icon.textContent = '−';
    }
  });
});


function scrollRecommend(direction) {
  const list = document.getElementById('recommendList');
  // Scroll by the width of the visible container
  const scrollAmount = list.clientWidth + 32; 
  
  list.scrollBy({
    left: direction * scrollAmount,
    behavior: 'smooth'
  });
}


function toggleTab(tabId, element) {
    // 1. Remove active class from all tab buttons
    const tabs = document.querySelectorAll('.tab-item');
    tabs.forEach(tab => tab.classList.remove('active'));
    
    // 2. Add active class to clicked tab
    element.classList.add('active');

    // 3. Hide all panes except the description
    const panes = document.querySelectorAll('.tab-pane');
    panes.forEach(pane => {
        if(pane.id !== 'description') {
            pane.classList.remove('show');
        }
    });

    // 4. If clicked tab is NOT description, show its content
    if (tabId !== 'description') {
        document.getElementById(tabId).classList.add('show');
    }
}
</script>
</html>
