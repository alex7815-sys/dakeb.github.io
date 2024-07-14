<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.html');
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Facebook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
            <p>You have successfully logged in.</p>
            <a href="logout.php" class="btn login-btn">Logout</a>
        </div>
    </div>
</body>
</html>
