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
    <title>Project Description Page</title>   
    <link rel="stylesheet" href="frontend/styles/proj_description.css">
</head>
<body>

    <a href="admin.php"></i>Admin Page</a>
    <a href="proj_description.php">Project Description</a>
    <a href="members.php">Members</a>
    <a href="?logout=true">Logout</a>

    <div class="container">
        <h1 class="title">THE MAIN PROBLEM</h1>
        <div class="card">
            <p>
                The main problem of the study is how to develop and implement an online web-based management system that will help 
                the owners and employees of LYNX Fiber Internet streamline the subscription information of their subscribers and 
                exchange monetary transactions regarding their subscription plans.
            </p>
        </div>

        <h1 class="title">THE PROPOSED SOLUTION</h1>
        <div class="card">
            <p>
                To address this problem, the proponents will develop and implement an Online Service Management System for LYNX 
                Fiber Internet with 2D Mapping and Chatbot Integration that would help its owners and employees evaluate the 
                submitted subscription applications, transact monthly subscription bills, monitor the statuses of their 
                subscribers, send notifications via SMS, answer FAQs through a Chatbot, and easily locate the residences of 
                their subscribers in a virtual map.
            </p>
        </div>

        <h1 class="title">PROPOSED USERS</h1>
        <div class="card">
            <ul>
                <li><strong>Administrators:</strong> Monitor payments and subscriber conditions.</li>
                <li><strong>Technicians:</strong> Manage maintenance requests.</li>
                <li><strong>Subscribers:</strong> Act as buyers of the services.</li>
                <li><strong>Non-Subscribers:</strong> Prospective individuals considering LYNX Fiber services.</li>
            </ul>
        </div>

        <h1 class="title">SYSTEM FEATURES</h1>
        <div class="features">
            <div class="feature-card">
                <i class="fas fa-user-lock"></i>
                <p><strong>Login Module:</strong> Distinguishes subscribers, technicians, and admins.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-user-plus"></i>
                <p><strong>Registration Module:</strong> Allows non-subscribers to select a plan and register.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-envelope"></i>
                <p><strong>Recover Accounts Module:</strong> Integrates PHP Mailer for account recovery.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-comments"></i>
                <p><strong>Chatbot Module:</strong> Answers FAQs for subscribers and non-subscribers.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-sms"></i>
                <p><strong>Contact Module:</strong> Sends SMS notifications for payment deadlines and interruptions.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-wallet"></i>
                <p><strong>Payment Module:</strong> Allows monthly subscription bill payments via GCash.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-file-invoice"></i>
                <p><strong>User’s Dashboard:</strong> Lets subscribers monitor billing history and edit details.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-exchange-alt"></i>
                <p><strong>Change Subscription Module:</strong> Allows plan upgrades or downgrades.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-tools"></i>
                <p><strong>Submit Request Module:</strong> Enables subscribers to request maintenance.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-user-cog"></i>
                <p><strong>Technicians Module:</strong> Allows technicians to track maintenance tasks.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-cogs"></i>
                <p><strong>IT Admin Module:</strong> Manages payments, subscription approvals, and maintenance tracking.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-map-marked-alt"></i>
                <p><strong>Virtual Location Module:</strong> Displays a 2D map of subscriber locations.</p>
            </div>
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
