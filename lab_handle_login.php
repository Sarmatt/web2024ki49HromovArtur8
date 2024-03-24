<?php
// Start the session
session_start();

// Check if the user credentials are valid (you need to implement your logic here)
$username = $_POST['username']; // Assuming you are using POST method for login
$password = $_POST['password']; // Assuming you are using POST method for login

// Check if the login is successful (replace this with your actual authentication logic)
$isLoginSuccessful = true; // Replace this with your authentication logic

if ($isLoginSuccessful) {
    // Set session variables
    $_SESSION['username'] = $username;
}

// Redirect to the default.php page
header("Location: default.php");
exit();
?>