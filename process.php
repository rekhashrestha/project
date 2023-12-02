<?php
    // include_once "../config/dbconnect.php";
session_start();
    $mysqli = mysqli_connect('127.0.0.1:3307','root','','user_db');
    
if (isset($_GET['delete'])){
     $id=$_GET['delete'];
     $mysqli->query("DELETE FROM venue where venue_id=$id") or die($mysqli->error());

 $_SESSION['message']="record has been deleted!";
$_SESSION['msg_type']="danger";

header("location: page-venue.php");
}


    
if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM photography where photography_id=$id") or die($mysqli->error());

$_SESSION['message']="record has been deleted!";
$_SESSION['msg_type']="danger";

header("location: page-venue.php");
}

?>