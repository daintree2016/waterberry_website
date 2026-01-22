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
                    <p>+91 90184 63964</p>
                </div>
                <div class="info-item">
                    <label>Email</label>
                    <p>support@thewaterberry.com</p>
                </div>
                <div class="info-item">
                    <label>Open Hour</label>
                    <p>9:00 am - 7:00 pm</p>
                </div>
                <div class="info-item">
                    <label>Location</label>
                    <p>Door No 1-49, Chanakyapuri Layout, PM Palem, Visakhapatnam, Andhra Pradesh 530041</p>
                </div>
            </div>

            <div class="form-card">
                <!-- Thank You Message (Initially Hidden) -->
                <div id="thankyou_msg" style="display:none; padding: 16px; background-color: #d4edda; color: #155724; border-radius: 5px; font-size: 14px;">
                    Thank you for reaching out, we'll get back to you soon.
                </div>

                <!-- Contact Form (Avyona-style AJAX to contact_form.php) -->
                <form id="contact_form">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your mail" required>
                    </div>
                    <div class="input-group">
                        <label>Phone number</label>
                        <div class="phone-input">
                            <span class="prefix">+91</span>
                            <input type="text" id="phone" name="phone" placeholder="9874563210" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Message</label>
                        <textarea id="message" name="message" placeholder="Write here..." required></textarea>
                    </div>
                    <button type="submit" class="btn-submit">Submit</button>
                </form>
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
<script src="js/jquery-1.11.0.min.js"></script>
<script>
// Open Google Maps on map click
    document.getElementById('map-container').addEventListener('click', function() {
    const address = "Door No 1-49 Chanakyapuri Layout PM Palem Madhurawada Visakhapatnam Andhra Pradesh 530041";
    
    // Encodes the address for a URL
    const encodedAddress = encodeURIComponent(address);
    
    // Creates the Google Maps URL
    const googleMapsUrl = `https://www.google.com/maps/search/?api=1&query=${encodedAddress}`;
    
    window.open(googleMapsUrl, '_blank');
});

// Avyona-style contact form submit to contact_form endpoint
$('#contact_form').on('submit', function(e) {
    e.preventDefault();

    const name = $('#name').val();
    const email = $('#email').val();
    const phone = $('#phone').val();
    const message = $('#message').val();

    $.ajax({
        type: 'POST',
        url: 'contact_form',
        data: {
            name: name,
            email: email,
            phone: phone,
            message: message
        },
        success: function(response) {
            let data = response;
            try {
                if (typeof response === 'string') {
                    data = JSON.parse(response);
                }
            } catch (e) {
                console.warn('contact_form: non-JSON response', response);
                data = { status: 'success', email_sent: false };
            }

            console.log('contact_form: stored query, email sent:', !!data.email_sent);
            if (data.email_error) {
                console.error('contact_form email_error:', data.email_error);
            }
            $('#contact_form').hide();
            $('#thankyou_msg').show();
        },
        error: function() {
            alert('An error occurred. Please try again.');
        }
    });
});
</script>
</body>
</html>
