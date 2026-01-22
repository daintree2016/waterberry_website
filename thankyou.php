<?php
// Determine payment status from query params set by payments/return.php
$paid    = isset($_GET['paid']) && $_GET['paid'] === '1';
$status  = $_GET['status'] ?? '';
$isError = ($status === 'error');
$isCancelled = (!$paid && !$isError && $status === 'cancelled');

$headline = 'Thank you!';
$message  = "THANK YOU FOR YOUR ORDER<br>Visit again";
$icon     = '✓';

if ($isCancelled) {
    $headline = 'Payment Cancelled';
    $message  = "Your payment was cancelled or not completed.<br>Your order has not been charged.";
    $icon     = '!';
} elseif ($isError) {
    $headline = 'Something went wrong';
    $message  = "We could not verify your payment due to a system error.<br>Please contact support or try again.";
    $icon     = '!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/thankyou.css">
</head>
<body>
<?php include("header.php") ?> 
<div class="thankyou-page">

    <!-- <div class="shape yellow"></div>
    <div class="shape green"></div> -->

    <div class="content">
        <div class="check-icon"><?php echo htmlspecialchars($icon); ?></div>

        <h1><?php echo htmlspecialchars($headline); ?></h1>
        <p>
            <?php echo $message; ?>
        </p>

        <div class="cards">

            <div class="card">
                <h3>Connect With Us</h3>
                <div class="social-icons">
                    <span class="fb">f</span>
                    <span class="in">in</span>
                    <span class="pin">p</span>
                    <span class="tw">t</span>
                </div>
            </div>

            <div class="card">
                <h3>Visit Our Website</h3>
                <a href="#" class="btn">Visit Website</a>
            </div>

        </div>
    </div>

</div>
<?php include("footer.php") ?>
</body>
</html>
