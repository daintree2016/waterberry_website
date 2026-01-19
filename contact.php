<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php include("header.php") ?>
    <main class="main-container">
        
        <section class="contact-grid">
            <div class="info-card">
                <h2>Get in Touch with Us</h2>
                <p class="subtitle">To get more details, please fill-up and submit</p>
                
                <div class="info-item">
                    <label>Call</label>
                    <p>+901 846 3964 3962</p>
                </div>
                <div class="info-item">
                    <label>Email</label>
                    <p>example@gmail.com</p>
                </div>
                <div class="info-item">
                    <label>Open Hour</label>
                    <p>9:00 am - 7:00 Pm</p>
                </div>
                <div class="info-item">
                    <label>Location</label>
                    <p>123 Street Road, Central Colony 34</p>
                </div>
            </div>

            <div class="form-card">
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" placeholder="Enter your name">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" placeholder="Enter your mail">
                </div>
                <div class="input-group">
                    <label>Phone number</label>
                    <div class="phone-input">
                        <span class="prefix">+91</span>
                        <input type="text" placeholder="9874563210">
                    </div>
                </div>
                <div class="input-group">
                    <label>Message</label>
                    <textarea placeholder="Write here..."></textarea>
                </div>
                <button class="btn-submit">Submit</button>
            </div>
        </section>
     <section class="map-section">
    <div class="map-header">
        <h3>Search Location by Google Map</h3>
        <div class="map-icons"></div>
    </div>
    <div id="map-container" class="map-placeholder clickable-map" title="Click to open in Google Maps">
        <div class="map-pin">📍</div>
        <p class="map-label">Click to view: 1-49 Chanakyapuri Layout, PM Palem</p>
    </div>
</section>
    </main>
    <?php include("footer.php") ?>
<script>
    document.getElementById('map-container').addEventListener('click', function() {
    const address = "Door No 1-49 Chanakyapuri Layout PM Palem Madhurawada Visakhapatnam Andhra Pradesh 530041";
    
    // Encodes the address for a URL
    const encodedAddress = encodeURIComponent(address);
    
    // Creates the Google Maps URL
    const googleMapsUrl = `https://www.google.com/maps/search/?api=1&query=${encodedAddress}`;
    
    // Opens in a new tab
    window.open(googleMapsUrl, '_blank');
});
</script>
</body>
</html>