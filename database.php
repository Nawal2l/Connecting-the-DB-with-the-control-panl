<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "motors";
// الاتصال بدات بيز
$connention = mysqli_connect($server, $username, $password, $database);
if (!$connention) {
    die("Connection failed: " . mysqli_connect_error());
}
