<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("db.php");

function wb_resolve_next($rawNext) {
    // Prevent infinite ?next= nesting and external redirects
    if (!$rawNext) {
        return 'index';
    }
    $parsed = parse_url($rawNext);
    $path = $parsed['path'] ?? '';
    if ($path === '' || strpos($path, '://') !== false) {
        return 'index';
    }
    // Normalise common values
    $basename = basename($path);
    if ($basename === '' || $basename === 'index') {
        return 'index';
    }
    if ($basename === 'checkout') {
        return 'checkout';
    }
    if ($basename === 'cart') {
        return 'cart';
    }
    return $basename;
}

$loginError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $redirectTo = wb_resolve_next($_POST['next'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        $loginError = 'Please enter both email and password.';
    } else {
        // Look up customer by email
        $stmt = $conn->prepare("SELECT CustomerID, Customer_FirstName, Customer_LastName, Customer_Email, Customer_Password FROM Customer WHERE Customer_Email = ? LIMIT 1");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $res = $stmt->get_result();
            $user = $res->fetch_assoc();
            $stmt->close();

            if ($user && !empty($user['Customer_Password']) && password_verify($password, $user['Customer_Password'])) {
                // Successful login
                $_SESSION['customer_id'] = $user['CustomerID'];
                $displayName = trim(($user['Customer_FirstName'] ?? '') . ' ' . ($user['Customer_LastName'] ?? ''));
                $_SESSION['customer_name'] = $displayName !== '' ? $displayName : ($user['Customer_Email'] ?? '');

                header("Location: " . $redirectTo);
                exit();
            } else {
                $loginError = 'Invalid email or password.';
            }
        } else {
            $loginError = 'Unable to process login right now. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log in.css">
</head>
<body>

<div class="page-bg">

    <div class="login-card">

        <div class="login-left">
            <div class="brand">
                <img src="images/waterberry logo.png" alt="Waterberry Logo">
            </div>

            <h2>Login</h2>

            <?php if ($loginError): ?>
                <p style="color: red; margin-bottom: 8px;"><?php echo htmlspecialchars($loginError); ?></p>
            <?php endif; ?>

            <form method="POST" autocomplete="on">
                <input type="hidden" name="next" value="<?php echo htmlspecialchars(wb_resolve_next($_GET['next'] ?? '')); ?>">
                <label>Email</label>
                <input type="email" name="email" placeholder="you@example.com" required>

                <label>Password</label>
                <div class="password-box">
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="row">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember Me
                    </label>
                    <!-- Forgot password flow can be added later -->
                    <span></span>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>

            <p class="switch">
                Don't have an account?
                <a href="signup">Signup</a>
            </p>
        </div>

        <div class="login-right">
            <img src="images/chair.jpg" alt="img">
        </div>

    </div>

</div>

</body>
</html>
