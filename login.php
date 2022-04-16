<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-register.css">
    <title>Login</title>
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
        <h2>Enter your login</h2>
        <p id="redirection" style="font-weight: bold; color: red;"></p>
        <form method="post">
            <label><b>Email:</b></label> <br>
            <input type="email" placeholder="Email" name="eMail" required class="login-input"> <br> <br>
            <label><b>Password:</b></label> <br>
            <input type="password" placeholder="Password" name="password" required class="login-input"> <br>
            <p>No account? You can register <a href="register.php">here</a>.</p>
            <input type="submit" value="Login" id="submit-button" name="loginSubmit">
        </form>
    </div>
    <footer>

    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php

error_reporting(0);

// Define names
$servername = "localhost";
$dbname = "webshop_gamepropshop";
$hostname = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $hostname, $password, $dbname);

// Get login values
$loginMail = hash('sha256', trim(strtolower($_REQUEST['eMail'])));
$loginPass = hash('sha256', $_REQUEST['password']);

// Check if account exists
function check_account() {

    $logged_in = false;

    // Get email from database
    $check_existance_account = "SELECT * FROM `users` WHERE `email` = '" . $GLOBALS['loginMail'] . "'";
    $result_email = $GLOBALS['conn']->query($check_existance_account);
    $account_exist = $result_email->fetch_assoc();

    // Get password from database
    $check_password = "SELECT * FROM `users` WHERE `password` = '" . $GLOBALS['loginPass'] . "'";
    $result_password = $GLOBALS['conn']->query($check_password);
    $password_correct = $result_password->fetch_assoc();

    // Checks if email and password combination is correct
    $check_total_login = "SELECT * FROM `users` WHERE `email` = '" . $GLOBALS['loginMail'] . "' AND `password` = '" . $GLOBALS['loginPass'] . "'";
    $results_total = $GLOBALS['conn']->query($check_total_login);
    $login_checked = $results_total->fetch_assoc();

    if ($login_checked["password"] == $GLOBALS['loginPass'] && $login_checked['email'] == $GLOBALS['loginMail']) {
        echo "<script> location.href = 'assets/redirection/logging_in_succes.html'; </script>";
    } else {
        echo "<script> document.getElementById('redirection').innerHTML = 'Combination of password and email is incorrect!' </script>";
    }
}

// Call function
if (isset($_POST['loginSubmit'])) {
    check_account();
}

// Close connection
$conn->close();

?>