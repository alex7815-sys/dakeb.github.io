<?php
session_start();

// Dummy credentials for demonstration purposes
$valid_username = 'user@example.com';
$valid_password = 'password';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Facebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Facebook</h1>
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <input type="text" id="username" name="username" placeholder="Email or Phone Number" required>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn login-btn">Log In</button>
                <a href="#" class="forgot-password">Forgotten account?</a>
                <div class="divider"></div>
                <button type="button" class="btn signup-btn">Create New Account</button>
            </form>
        </div>
    </div>
</body>
</html>
