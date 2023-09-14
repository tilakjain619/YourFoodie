<?php
require '../login-main/config.php';

session_start();

$name = $_POST['name'];
$password = $_POST['pass'];



// Query to check admin credentials
$sql = "SELECT * FROM admins WHERE name = '$name' AND pw = '$password'";
$result = $conn->query($sql);

// Check if admin user exists
if ($result->num_rows > 0) {
    // Admin user found, redirect to the home page
    header("Location: ../admin?name=$name");
    exit();
} else {
    // Admin user not found, show an error message
    header("location: ../admin/Adminlogin.php?status=notfound");
}

$conn->close();