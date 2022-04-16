<?php

error_reporting(0);

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CRUD Game Prop Shop</title>
</head>
<body>
    <h1>CRUD Game Prop Shop</h1>
    <p>Add products to the webshop</p> <br>

    <table class="table">
        <tbody>
            <th>Product name:</th>
            <th>Product price:</th>
            <th>Product description:</th>
            <th colspan="2">Options:</th>
            <?php include 'read.php'; ?>
        </pbody>
    </table>

    <form class="form-inline m-2" action="create.php" method="POST">
        <label for="Pname">Product name:</label>
        <input type="text" class="form-control m-2" id="Pname" name="Pname">
        <label for="Pprice">Product price:</label>
        <input type="number" class="form-control m-2" id="Pprice" name="Pprice">
        <label for="Pdesc">Product description:</label>
        <input type="text" class="form-control m-2" id="Pdesc" name="Pdesc">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</body>
</html>