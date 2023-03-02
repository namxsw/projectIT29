<?php
	include('./config/db.php');
	
	$User_id=$_GET['User_id'];
	$User_Fname=$_POST['firstname'];
	$User_Lname=$_POST['lastname'];
	$User_Tel=$_POST['tel'];
	$User_Email=$_POST['email'];
	$User_Birthday=$_POST['bd'];

	mysqli_query($conn,"update user set  User_Fname='$User_Fname', User_Lname='$User_Lname',User_Tel='$User_Tel',User_Email='$User_Email',User_Birthday='$User_Birthday' where User_id='$User_id' ");
	header('location:ad_admin.php');
	

?>

        
        


