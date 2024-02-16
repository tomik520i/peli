<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname = "recenze";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);
$conn->set_charset("utf8mb4");

if(!$conn) {
    die("Connection To Database Failed: ".mysql_connect_error());
}