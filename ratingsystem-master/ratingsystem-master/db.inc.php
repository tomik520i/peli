<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname = "recenze";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if(!$conn) {
    die("Connection To Database Failed: ".mysql_connect_error());
}