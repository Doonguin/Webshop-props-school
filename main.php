<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Webshop</title>
</head>
<body>
    <header>
        <a href="main.php">
            <div id="logo"></div>
        </a>
        <nav>
            <div class="nav first">
                Home
            </div>
            <div class="nav double-line">
                Movie props
            </div>
            <div class="nav double-line">
                Game props
            </div>
            <div class="nav">
                Faq
            </div>
            <div class="nav search-bar">
                <img src="assets/img/search.ico">
                <input type="text" placeholder="search">
            </div>
            <div class="nav basket">
                Basket
            </div>
            <div class="nav login" onclick="login()">
                Login
            </div>
        </nav>
    </header>
    <h1>Welcome to the game prop shop!</h1>
    <div id="title-button">
        <p>About us</p>
        <img src="assets/img/arrow.ico" width="30px" height="30px" class="arrow-title-button">
    </div>
    <div id="banner">
        <img class="banner-image" src="assets/img/banner1.png">
    </div>
    <div id="side-bar">
        <h2 style="margin-top: 80px;">Filters</h2>
        <form method="post">
            <label><b>Price range:</b></label> <br>
            <label>€</label>
            <input type="number" min="10" max="1200" value="10" class="input-field" name="min-price"> 
            <label>to</label>
            <label>€</label>
            <input type="number" min="10" max="1200" value="1200" class="input-field" name="max-price"> <br> <br>
            <label><b>Category</b></label> <br>
            <input type="checkbox" name="category" value="0" class="checkbox-input"> <label class="label-checkbox">Adventure</label> <br>
            <input type="checkbox" name="category" value="1" class="checkbox-input"> <label class="label-checkbox">Puzzle</label> <br>
            <input type="checkbox" name="category" value="3" class="checkbox-input"> <label class="label-checkbox">Sci-Fi</label> <br>
            <input type="checkbox" name="category" value="4" class="checkbox-input"> <label class="label-checkbox">RPG</label> <br>
            <input type="checkbox" name="category" value="5" class="checkbox-input"> <label class="label-checkbox">FPS</label> <br> <br>
            <label><b>Brand new or used</b></label> <br>
            <input type="radio" name="used-or-not" value="true" class="checkbox-input"> <label class="label-checkbox">Used</label> <br>
            <input type="radio" name="used-or-not" value="false" class="checkbox-input"> <label class="label-checkbox">Brand new</label> <br> <br> <br>
            <input type="submit" onclick="return false" value="Apply filters" id="apply-filters-button">
        </form>
        <h3><b>Recently viewed <br> products</b></h3>
        <div style="position: absolute; bottom: 0; width: 100%;">
            <p style="font-size: 10px;">Copyright © 2022 Tygo van Zon</p>
        </div>
    </div>
    <main>
        <div class="cards">
            <img src="assets/img/card_image.jpg" width="200px;" height="auto">
            <h2><b>Gravity gun</b></h2>
            <p>The gravity gun from <br> the half-life series by valve</p>
            <a href="main.html">View product</a> <br>
            <button>In basket</button>
            <button>Wishlist</button>
        </div>
        <div class="cards">
            <img src="assets/img/card_image.jpg" width="200px;" height="auto">
            <h2><b>Gravity gun</b></h2>
            <p>The gravity gun from <br> the half-life series by valve</p>
            <a href="main.html">View product</a> <br>
            <button>In basket</button>
            <button>Wishlist</button>
        </div>
        <div class="cards">
            <img src="assets/img/card_image.jpg" width="200px;" height="auto">
            <h2><b>Gravity gun</b></h2>
            <p>The gravity gun from <br> the half-life series by valve</p>
            <a href="main.html">View product</a> <br>
            <button>In basket</button>
            <button>Wishlist</button>
        </div>
        <div class="cards">
            <img src="assets/img/card_image.jpg" width="200px;" height="auto">
            <h2><b>Gravity gun</b></h2>
            <p>The gravity gun from <br> the half-life series by valve</p>
            <a href="main.html">View product</a> <br>
            <button>In basket</button>
            <button>Wishlist</button>
        </div>
        <div class="cards">
            <img src="assets/img/card_image.jpg" width="200px;" height="auto">
            <h2><b>Gravity gun</b></h2>
            <p>The gravity gun from <br> the half-life series by valve</p>
            <a href="main.html">View product</a> <br>
            <button>In basket</button>
            <button>Wishlist</button>
        </div>
    </main>
    <script src="assets/js/main.js"></script>
</body>
</html>