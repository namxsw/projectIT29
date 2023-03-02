<?php
	include('./config/db.php');
	$Job_ID=$_GET['Job_ID'];
	mysqli_query($conn,"delete from job where Job_ID='$Job_ID'");
	header('location:adminpage.php');
?>