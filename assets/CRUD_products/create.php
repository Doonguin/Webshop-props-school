<?php

error_reporting(0);

include 'db.php';

$Pname = $_POST["Pname"];
$Pprice = $_POST["Pprice"];
$Pdesc = $_POST["Pdesc"];

$sql = "insert into `products` (product_name, product_price, product_desc) values ('$Pname', '$Pprice', '$Pdesc')";

$conn->query($sql);
$conn->close();

header("location: index.php");

?>