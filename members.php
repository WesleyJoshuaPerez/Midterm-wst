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

// Team members data
$members = [
    [
        "name" => "Troy Francis Navales Mendoza",
        "birthdate" => "September 9, 2004",
        "address" => "Balut, Orion, Bataan",
        "role" => "Documenter",
        "image" => "frontend/assets/images/Members/Mendoza.jpg"
    ],
    [
        "name" => "Sebastian Kean Ojerio Paclaon",
        "birthdate" => "September 9, 2003",
        "address" => "Cataning, Balanga, Bataan",
        "role" => "Documenter and QA Tester",
        "image" => "frontend/assets/images/Members/Paclaon.jpg"
    ],
    [
        "name" => "Wesley Joshua Heramis Perez",
        "birthdate" => "March 17, 2004",
        "address" => "Bilolo, Orion, Bataan",
        "role" => "Lead Programmer",
        "image" => "frontend/assets/images/Members/Perez.jpg"
    ],
    [
        "name" => "Angeline Kate Enriquez Rezada",
        "birthdate" => "November 20, 2003",
        "address" => "Roosevelt, Dinalupihan, Bataan",
        "role" => "Project Leader and Programmer",
        "image" => "frontend/assets/images/Members/Rezada.png"
    ]
];
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
    <div class="header-links">
        <a href="admin.php">Admin Page</a>
        <a href="proj_description.php">Project Description</a>
        <a href="#">Members</a>
        <!-- Logout link now properly logs out the user -->
        <a href="?logout=true">Logout</a>
    </div>
    <div class="container">
        <h1>Members Description</h1>
        <div class="members">
            <?php foreach ($members as $member): ?>
                <div class="member-info">
                    <img src="<?= htmlspecialchars($member['image']) ?>" alt="Member Avatar">
                    <p><strong>Name:</strong> <?= htmlspecialchars($member["name"]) ?></p>
                    <p><strong>Birthdate:</strong> <?= htmlspecialchars($member["birthdate"]) ?></p>
                    <p><strong>Address:</strong> <?= htmlspecialchars($member["address"]) ?></p>
                    <p><strong>Role:</strong> <?= htmlspecialchars($member["role"]) ?></p>
                </div>
            <?php endforeach; ?>
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
