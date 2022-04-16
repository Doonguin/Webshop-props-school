<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-register.css">
    <title>Register</title>
</head>
<body>
    <div id="background-image"></div>
    <header>
        <nav>
            <div id="back-home" onclick="back_home()">
                Back to home page
            </div>
        </nav>
    </header>
    <div id="content">
        <h2>Register your account</h2>
        <p id="redirection" style="font-weight: bold"></p>
        <form method="post">
            <label><b>Username:</b></label> <br>
            <input type="text" placeholder="Username" name="userName" required class="login-input"> <br> <br>
            <label><b>Email address:</b></label> <br>
            <input type="email" placeholder="Email" name="eMail" required class="login-input"> <br> <br>
            <label><b>Password:</b></label> <br>
            <input id="first-pass" type="password" placeholder="Password" name="password" required class="login-input" minlength="8"> <br> <br>
            <label><b>Confirm password:</b></label> <br>
            <input id="sec-pass" type="password" placeholder="Confirm password" name="confirm-pass" required class="login-input" minlength="8"> <br>
            <p>Already have  an account? You can login <a href="login.php" style="color: orange;">here</a>.</p>
            <input type="submit" value="Register" id="submit-button">
        </form>
    </div>
    <footer>

    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php

error_reporting(0);

// User id generator
$characters = "0123456789abcdefghijklmnopqrstuvwxyz";
$user_cookie = '';

for ($i = 0; $i < 100; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $user_cookie .= $characters[$index];
}

// Define names
$servername = "localhost";
$dbname = "webshop_gamepropshop";
$hostname = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $hostname, $password, $dbname);

// Request input values
$username = $_REQUEST['userName'];
$email = hash('sha256', trim(strtolower($_REQUEST['eMail'])));
$password = hash('sha256', $_REQUEST['password']);
$confirm_pass = hash('sha256', $_REQUEST['confirm-pass']);
$date = date('Y-m-d');

if ($username == "") {
    return false;
}

// Check if email is in use
$duplicate_email = "SELECT `email` FROM `users` WHERE `email` = '$email'";
$result = $conn->query($duplicate_email);
$email_duplicate = $result->fetch_assoc();

if ($email == $email_duplicate["email"]) {
    echo "<script> document.getElementById('redirection').style.color = 'red'; </script>";
    echo "<script> document.getElementById('redirection').innerHTML = 'Email is already in use, <br> please use a different email'; </script>";
    return false;
}

// Check confirmation password
if ($password != $confirm_pass) {
    // If passwords aren't the same
    echo "<script> document.getElementById('redirection').style.color = 'red'; </script>";
    echo "<script> document.getElementById('redirection').innerHTML = 'Passwords are not the same'; </script>";
    return false;
}  else {
    // Insert data
    $sql = "INSERT INTO `users` (`user_name`, `password`, `email`, `registered_on`, `user_cookie`) VALUES ('$username', '$password', '$email', '$date', '$user_cookie')";
    $conn->query($sql);
    echo "<script> location.href = 'assets/redirection/registry_succes.html'; </script>";
}

setcookie("$user_cookie");

// Close connection
$conn->close();

?>