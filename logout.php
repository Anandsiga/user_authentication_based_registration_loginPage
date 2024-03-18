<?php
// Start the session
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Unset all of the session variables
unset($_SESSION['auth']);
unset($_SESSION['auth_user']);

// Destroy the session

// Redirect to login page after logout
header('Location: index.php');
exit;
?>
