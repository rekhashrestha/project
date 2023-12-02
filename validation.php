<?php
session_start();
$mysqli=new mysqli('localhost:3307','root','','user_db') or die(mysqli_error($mysqli));

mysqli_select_db($mysqli,'user_db');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($_POST['role']=='Admin')
    {
      $s="select*FROM user_form where email='$email' && password='$password'";
      $result=mysqli_query($mysqli,$s);
 
      $num=mysqli_num_rows($result);
 
      if($num==1){
         header('location:adminhome.php');
      }else{
         $_SESSION['status']="username and password doesnot match";
         header("location:adminpage.php");
      }
   }
    
    else
    {
      $s="select*FROM user_login where email='$email' && password='$password'";
      $result=mysqli_query($mysqli,$s);
 
      $num=mysqli_num_rows($result);
 
      if($num==1){
         header('location:userview.php');
      }else{
         $_SESSION['status']="username and password doesnot match";
         header("location:userview.php");
      }
   }

}

?>