function redirect_to_login() {
    location.href = "../../main.php";
}

setInterval(redirect_to_login, 5000);