<?php

session_start();

$mysqli=new mysqli('localhost:3307','root','','user_db') or die(mysqli_error($mysqli));



if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];




    $query=("INSERT INTO user_form (name,email,password) VALUES('$name','$email','$password')");

    mysqli_query($mysqli,$query);
    
    echo "registration successful";
    header('location:adminpage.php');
    header('location:userpage.php');
}

    




 // Closing Connection with Server
?>