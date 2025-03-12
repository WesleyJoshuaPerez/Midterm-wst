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
</body>
</html>