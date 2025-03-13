<?php
session_start();

// Prevent back button from accessing a cached session
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");

// Logout logic
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

// Check if the user is logged in
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: not_logged.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>   
    <link rel="stylesheet" href="frontend/styles/admin.css">
</head>
<body>

    <div class="navbar">
        <a href="admin.php">Admin Page</a>
        <a href="proj_description.php">Project Description</a>
        <a href="members.php">Members</a>
        <a href="?logout=true">Logout</a>
    </div>

<div class="container">
<div class="title">
    Online Service Management System for LYNX Fiber Internet with 2D Mapping and Chatbot Integration
    </div>

    <div class="description">
    <p>The fifth group from NW3D is proposing a centralized web application 
    capable of organizing, evaluating and managing payment and contact 
    services on a subscriber base directly streamlining the lines of 
    communication between the administrators and their subscribers. 
    The thesis group consists of two programmers which are <b>Wesley</b> and 
    <b>Kate</b> and two documenters which are <b>Troy</b> and <b>Sebastian.</b></p>
    </div>
</div>
    <div id="particles-js"></div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
    particlesJS("particles-js", {
    particles: {
        number: { value: 50 },
        size: { value: 3 },
        move: { speed: 2 },
        color: { value: "1e1e4e" }, // Change this to your desired color
        line_linked: {
            enable: true, // If you want lines connecting particles
            color: "#1e1e4e", // Change line color too
        }
    }
    });
    </script>
</body>
</html>
