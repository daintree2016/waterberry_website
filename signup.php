<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include("db.php");

function wb_resolve_next($rawNext) {
    // Prevent infinite ?next nesting and external redirects
    if (!$rawNext) {
        return 'index';
    }
    $parsed = parse_url($rawNext);
    $path = $parsed['path'] ?? '';
    if ($path === '' || strpos($path, '://') !== false) {
        return 'index';
    }
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

$signupError = '';
$signupSuccess = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $redirectTo = wb_resolve_next($_POST['next'] ?? '');
    $fullName = trim($_POST['full_name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm  = $_POST['confirm_password'] ?? '';

    if ($fullName === '' || $email === '' || $password === '' || $confirm === '') {
        $signupError = 'Please fill in all fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signupError = 'Please enter a valid email address.';
    } elseif ($password !== $confirm) {
        $signupError = 'Passwords do not match.';
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT CustomerID FROM Customer WHERE Customer_Email = ? LIMIT 1");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $res = $stmt->get_result();
            $existing = $res->fetch_assoc();
            $stmt->close();

            if ($existing) {
                $signupError = 'An account with this email already exists. Please log in.';
            } else {
                // Split full name
                $parts = preg_split('/\s+/', $fullName, 2);
                $firstName = $parts[0] ?? '';
                $lastName  = $parts[1] ?? '';

                // Generate a simple customer ID
                $customerId = 'WB' . strtoupper(bin2hex(random_bytes(4)));
                $hash = password_hash($password, PASSWORD_BCRYPT);

                // Insert minimal customer record; other address fields can be filled at checkout
                $stmt = $conn->prepare("INSERT INTO Customer (CustomerID, Customer_FirstName, Customer_LastName, Customer_Email, Customer_Password) VALUES (?, ?, ?, ?, ?)");
                if ($stmt) {
                    $stmt->bind_param("sssss", $customerId, $firstName, $lastName, $email, $hash);
                    if ($stmt->execute()) {
                        $_SESSION['customer_id'] = $customerId;
                        $_SESSION['customer_name'] = $fullName;
                        header("Location: " . $redirectTo);
                        exit();
                    } else {
                        $signupError = 'Unable to create account. Please try again.';
                    }
                    $stmt->close();
                } else {
                    $signupError = 'Unable to create account. Please try again.';
                }
            }
        } else {
            $signupError = 'Unable to process signup right now. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="page-bg">

    <div class="login-card">

        <div class="login-left">
            <div class="brand">
                <img src="images/waterberry logo.png" alt="Waterberry Logo">
            </div>

            <h2>Create Account</h2>

            <?php if ($signupError): ?>
                <p style="color: red; margin-bottom: 8px;"><?php echo htmlspecialchars($signupError); ?></p>
            <?php elseif ($signupSuccess): ?>
                <p style="color: green; margin-bottom: 8px;"><?php echo htmlspecialchars($signupSuccess); ?></p>
            <?php endif; ?>

            <form method="POST" autocomplete="on">
                <input type="hidden" name="next" value="<?php echo htmlspecialchars(wb_resolve_next($_GET['next'] ?? '')); ?>">
                <label>Full Name</label>
                <input type="text" name="full_name" placeholder="John Canny" required>

                <label>Email</label>
                <input type="email" name="email" placeholder="johncanny@gmail.com" required>

                <label>Password</label>
                <input type="password" name="password" placeholder="Create password" required>

                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="Confirm password" required>

                <button type="submit" class="login-btn">Create Account</button>
            </form>

            <p class="switch">
                Already have an account?
                <a href="login">Login</a>
            </p>

        </div>

        <div class="login-right">
            <img src="images/chair.jpg" alt="Image">
        </div>

    </div>

</div>

</body>
</html>
