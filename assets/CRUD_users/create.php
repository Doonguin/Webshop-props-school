<?php

error_reporting(0);

include 'db.php';

$Uname = $_POST["user_name"];
$Email = $_POST["email"];
$Role = $_POST["role"];
$date = date('Y-m-d');

$sql = "insert into `users` (user_name, email, registered_on, role) values ('$Uname', '$Email', '$date', '$Role')";

$conn->query($sql);
$conn->close();

header("location: index.php");

?>