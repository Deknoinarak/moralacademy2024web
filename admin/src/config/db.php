<?php

$dbhost = "65.19.141.67";
$dbname = "deknoinarak_moralacademy";
$dbuser = "deknoinarak_moraladmin";
$dbpassword = "Moral1234@";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "SET NAMES UTF8");
