<?php
// submit_rating.php

$connect = new PDO("mysql:host=3307;dbname=user_db", "root", "");

//mysql
if(isset($_POST["rating_data"]))
{

	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"],
		':datetime'			=>	time()
	);

    $query = "
	INSERT INTO review_table 
	(user_name, user_rating, user_review, datetime) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)
	";

	$statement = $connect->prepare($query);

	$statement->execute($data);

	echo "Your Review & Rating Successfully Submitted";

}


?>
