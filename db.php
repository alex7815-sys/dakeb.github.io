<?php
$servername = "localhost";
$dbname = "your_database_name";
$username = "your_database_username";
$password = "your_database_password";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
