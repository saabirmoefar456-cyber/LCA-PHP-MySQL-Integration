<?php
$host = "localhost";
$port = 3307;
$user = "root";
$password = "";
$database = "afristaff_db";

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>