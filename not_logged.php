<?php
session_start();
$error = isset($_SESSION["error"]) ? $_SESSION["error"] : "";
unset($_SESSION["error"]); // Clear the error message after displaying it
        session_unset();  // Remove session variables
        session_destroy(); // Destroy session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>
    <link rel="stylesheet" href="frontend/styles/not_logged.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
    />
</head>
<body>
    <div class="notlogin">
    <h1>Not Properly Logged In</h1>
    <?php if ($error): ?>
            <h1 style="color: red; text-align: center;"><?php echo $error; ?></h1>
        <?php endif; ?>
        <a href="login.php"><button class="button">Back to login</button></a>
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