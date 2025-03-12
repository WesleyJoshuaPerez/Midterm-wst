<?php
 

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Description</title>
    <link rel="stylesheet" href="frontend/styles/members.css">
</head>
<body>
    <?php include 'backend/members.php'; ?>
    <div class="header-links">
        <a href="#">Admin Page</a>
        <a href="#">Project Description</a>
        <a href="#">Members</a>
        <a href="login.php">Logout</a>
    </div>
    <div class="container">
        <h1>Members Description</h1>
        <div class="members">
            <?php foreach ($members as $member): ?>
                <div class="member-info">
                    <img src="<?= $member['image'] ?>" alt="Member Avatar">
                    <p><strong>Name:</strong> <?= $member["name"] ?></p>
                    <p><strong>Birthdate:</strong> <?= $member["birthdate"] ?></p>
                    <p><strong>Address:</strong> <?= $member["address"] ?></p>
                    <p><strong>Role:</strong> <?= $member["role"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>