<?php

session_start();
  $conn = mysqli_connect('127.0.0.1:3307','root','','user_db');

if(isset($_POST['submit']))
    {
        
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
         $duration= $_POST['duration'];
         $charge=$_POST['charge'];

          $image = $_FILES['image'];

        $imagefilename = $image['name'];
        $imagefiletemp = $image['tmp_name'];


    $filename_separate = explode('.',$imagefilename);
    $file_extension = strtolower(end($filename_separate));

    $extension = array('jpeg','jpg','png');

    if(in_array($file_extension,$extension))
{
    $upload_image = 'image/'.$imagefilename;
     // $upload_image = '/IMS/user/cart/image/'.$imagefilename;
     
    $move=move_uploaded_file($imagefiletemp,$upload_image);


         $insert = mysqli_query($conn,"INSERT INTO photography
         (name,contact,address,duration,charge,photography_image) 
         VALUES ('$name','$contact','$address','$duration','$charge','$upload_image')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             // alert('Product Added successfully.');
            
            $_SESSION['message']="record has been saved!";
               $_SESSION['msg_type']="success";
               header("location:page-photography.php");

          }

         }
     
    }
        
?>