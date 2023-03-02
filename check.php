<?php
include "./config/db.php";
$User_username = $_POST['username'];
//เช็คจากตาราง User
$sql = "SELECT * FROM user WHERE User_username='$User_username'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "true,<span style='color:green'>ชื่อผู้ใช้นั้นใช้ได้</span>";
}
else{ 
	echo "false,<span style='color:red'>ชื่อผู้ใช้นั้นมีผู้อื่นใช้แล้ว</span>";
}
?>


