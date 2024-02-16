<?php
session_start();
require "db.inc.php";

//var_dump($_POST);

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$POSTI = filter_var_array($_POST, FILTER_SANITIZE_NUMBER_INT);

//var_dump($POSTI);
//var_dump($POST);

if(isset($POST['starRate'])) {

    
  
    $starRate = htmlspecialchars(mysqli_real_escape_string($conn, $POSTI['starRate'] ?? ""));
    $rateMsg = htmlspecialchars(mysqli_real_escape_string($conn, $POST['rateMsg'] ?? ""));
    $date = htmlspecialchars(mysqli_real_escape_string($conn, $POST['date'] ?? ""));
    $useName = htmlspecialchars(mysqli_real_escape_string($conn, $POST['name'] ?? ""));

    //var_dump($rateMsg);

    $sql = $conn->prepare("SELECT * from rate WHERE userName=?");
    $sql->bind_param("s", $useName);
    $sql->execute();
    $res = $sql->get_result();
    $rst = $res->fetch_assoc();
    $pCode = $rst['userName'];

//    if(!$pCode) {
        $stmt = $conn->prepare("INSERT INTO rate (userName, userReview, userMessage, dateReviewed) VALUES ( ?, ?, ?, ?)");
        $stmt->bind_param("ssss", $useName, $starRate, $rateMsg, $date);
        $stmt->execute();
           
//    }
//    else {
//        $stmt = $conn->prepare("UPDATE rate SET userName=?, userReview=?, userMessage=?, dateReviewed=? WHERE userName=?");
//        $stmt->bind_param("sssss", $useName, $starRate, $rateMsg, $date, $useName);
//        $stmt->execute();
//    }
}