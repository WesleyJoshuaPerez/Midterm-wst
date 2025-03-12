<?php
session_start();
 
 

//username and password
$default_username = "Group5";  
$default_password = "group-5";  
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($username === $default_username && $password === $default_password) {
        $_SESSION["loggedin"] = true;
        header("Location: admin.php");
        exit();
    } else {
       $_SESSION["error"] ="Invalid username or password";
        header("Location: not_logged.php");
        exit();

    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="frontend/styles/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
    />
  </head>
  <body>
    <div class="login">
      <form action="" method="POST">
        <h1 id="typing"></h1>

        <div class="input-box">
          <input type="text" name="username" placeholder="Username" required />
          <i class="bx bxs-user"></i>
        </div>

        <div class="input-box">
          <input type="password" name="password" placeholder="Password" required />
          <i class="bx bxs-lock-alt"></i>
        </div>

        <button type="submit" class="button">Login</button>
        <button type="reset" class="button">Reset</button>
      </form>
    </div>
    <script src="js/typing.js"></script>
  </body>
</html>
