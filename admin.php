<?php
session_start();

// Logout logic
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php"); // Redirect to admin page after logout
    exit();
}

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: not_logged.php"); // Redirect to login page
    exit();
}

// Prevent back button from accessing a cached session
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

?>
<h1>Admin</h1>
<a href="?logout=true">Logout</a>
