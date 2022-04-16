function redirect_to_login() {
    location.href = "../../login.php";
}

setInterval(redirect_to_login, 5000);