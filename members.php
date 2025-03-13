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
        "image" => "frontend/assets/images/Members/Mendoza.jpg",
        "quote" => '"My responsibility as a documenter lies heavily upon reporting the general accomplishments of our group on a given period and then translating those reports into formal written conclusions or generalizations. Also, I was tasked on completing the Chapter 1 to 3 of our thesis that presents all the vital information and necessary background on why we are conducting a study about it in the first place. Although I am not primarily responsible on manually coding the system itself, my role should not be taken lightly as the panelists on our thesis defense could be as observant and precise to our written reports as they are observant and precise throughout the programming development of the system itself. I believe that being a voracious reader, detailed and a perfectionist are among the traits that a good documenter should have in order to successfully carry out the task of forming coherent thoughts, reasonable explanations and timely conclusions about the development and implementation of the proposed system at hand."'
    ],
    [
        "name" => "Sebastian Kean Ojerio Paclaon",
        "birthdate" => "September 9, 2003",
        "address" => "Cataning, Balanga, Bataan",
        "role" => "Documenter and QA Tester",
        "image" => "frontend/assets/images/Members/Paclaon.jpg",
        "quote" => '"As a QA Tester, I am assigned to ensure to check system\'s quality by executing detailed test cases, identifying bugs, and reporting issues straight to the team if one shows up. I will also communicate closely with the lead programmer to quickly fixes bugs and ensure the system meets all requirements. Also, as a Documenter, I’m assigned to maintain a clear and up-to-date documentation meaning one to one to the current progress of the system. I also plan to achieve this by coordinating with our team’s other documenter to help gather accurate information and ensure the documentation supports our project\'s success."'
    ],
    [
        "name" => "Wesley Joshua Heramis Perez",
        "birthdate" => "March 17, 2004",
        "address" => "Bilolo, Orion, Bataan",
        "role" => "Lead Programmer",
        "image" => "frontend/assets/images/Members/Perez.jpg",
        "quote" => '"As a Lead programmer, my responsibilities is to ensure our system implement efficient and effective software development process. I can do that by designing a good system architecture and maintaining a clean and optimize code that can be used as a coding standard of our development team. I also need to ensure that we have an effective code review by using test case, provide a technical guidance and clear communication with my teammates to quickly resolve any challenges in our projects. Ultimately, my goal is to foster a collaborative and innovative developers and empowered teammates by delivering transformative instructions, research, extension, and production through change drivers and responsive guidelines."'
    ],
    [
        "name" => "Angeline Kate Enriquez Rezada",
        "birthdate" => "November 20, 2003",
        "address" => "Roosevelt, Dinalupihan, Bataan",
        "role" => "Project Leader and Programmer",
        "image" => "frontend/assets/images/Members/Rezada.png",
        "quote" => '"As a project leader and a programmer, I believe that my duty is to oversee the progress of both our system and documentation. It is my responsibility to respond to the lead programmer\'s given tasks to me while continuously coordinating with the documenter for the step-by-step progress on our documentation. I plan on executing these responsibilities by continuing to support the works of my group mates, suggest revisions for the betterment of our capstone project, and continuously respond to the system\'s needs. Lastly, I plan on sticking up with my responsibility by collaborating with my group mates with clear vision and determination for the project\'s success."'
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
                    <div class="quote">
                        <p><?= htmlspecialchars($member["quote"]) ?></p>
                    </div>
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