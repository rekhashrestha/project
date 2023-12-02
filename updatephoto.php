





<?php
session_start();

$photography_id =$_GET['edit'];

  $mysqli =new mysqli('127.0.0.1:3307','root','','user_db') or die(mysqli_error($mysqli));
  $sql = "SELECT * from photography where photography_id='$photography_id'";
  $result= mysqli_query($mysqli,$sql);

  while($row= $result->fetch_assoc()){

?>


<div class="container">
      <div class="text">
         Edit photography
      </div>
      <form action="" method="post" enctype="multipart/form-data">
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="name" value="<?php echo $row['name'];?>" required>
               <div class="underline"></div>
               <label for=""> Name</label>
            </div>
            <div class="input-data">
               <input type="text" name="address" value="<?php echo $row['address'];?>" required>
               <div class="underline"></div>
               <label for="">Address</label>
            </div>
            <div class="input-data">
               <input type="text" name="contact" value="<?php echo $row['contact'];?>"required>
               <div class="underline"></div>
               <label for="">contact</label>
            </div>
            <div class="input-data">
               <input type="text" name="duration" value="<?php echo $row['duration'];?>"required>
               <div class="underline"></div>
               <label for="">duration</label>
            </div>
            <div class="input-data">
               <input type="text" name="charge" value="<?php echo $row['charge'];?>"required>
               <div class="underline"></div>
               <label for="">charge</label>
            </div>
</div>

       

        <input type="submit" name="submit" >
      </form>
      </div>
      <style>

      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 10px;
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
}
.container{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.container .text{
  text-align: center;
  font-size: 41px;
  font-weight: 600;
  font-family: 'Poppins', sans-serif;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}
</style>

</div>
</div>
</form>
</div>
<?php
  }
  ?>
<?php

if(isset($_POST['submit']))
{
    
    $name = $_POST['name'];
   
    $contact = $_POST['contact'];
    $address = $_POST['address'];
     $duration= $_POST['duration'];
     $charge=$_POST['charge'];

//       $image = $_FILES['image'];

//     $imagefilename = $image['name'];
//     $imagefiletemp = $image['tmp_name'];


// $filename_separate = explode('.',$imagefilename);
// $file_extension = strtolower(end($filename_separate));

// $extension = array('jpeg','jpg','png');

// if(in_array($file_extension,$extension))
// {
// $upload_image = 'image/'.$imagefilename;
//  // $upload_image = '/IMS/user/cart/image/'.$imagefilename;
 
// $move=move_uploaded_file($imagefiletemp,$upload_image);


     $query = "UPDATE photography set name='$name',contact='$contact',address='$address',duration='$duration' ,charge='$charge'
     where  photography_id='$photography_id'";

     if(mysqli_query($mysqli,$query))

     {
        
        //  header("location:venuedetails.php");
        //  echo "product updated";
        }
        else 
        {
           echo "error";
        }
          
     
 
    }

    
?>

