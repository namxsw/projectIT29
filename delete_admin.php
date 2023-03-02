<?php
	include('./config/db.php');
	$User_id=$_GET['User_id'];
	mysqli_query($conn,"delete from user where User_id='$User_id'");
	header('location:ad_admin.php');
?>