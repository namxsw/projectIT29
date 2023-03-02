<?php
  session_start();
  include "./config/db.php";
	if(isset($_POST["add"])){
        $username = $_POST["username"];
        $password = $_POST["pass"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $birthday = $_POST["bd"];
        $tell = $_POST["tel"];
        
        
        if ($password !="" && $password != "" && $firstname != "" && $lastname != "" && $email != "" && $birthday != "" && $tell != "" ) {
            $password = md5($password);
            $sql = "INSERT INTO `user`(`User_username`, `User_Password`, `User_Fname`, `User_Lname`, `User_Tel`, `User_Email`, `User_Birthday`, `Usertype_Id`) 
            VALUES ('$username','$password','$firstname','$lastname','$tell','$email','$birthday','1')";
            $result = mysqli_query($conn,$sql);
            if($result){
              // echo "<script>alert('เพิ่มผู้ดูแลสำเร็จ')</script>";
              // echo "<script>window.location='ad_admin.php';</script>";
              include "./script/alert.php";
              echo "<script>adminsuccess(); </script> ";
              
            }
            else{
              // echo "<script>alert('เพิ่มไม่สำเร็จ')</script>";
              include "./script/alert.php";
              echo "<script>adminerror(); </script> ";
  
            }
          }else{
            echo "<script>alert('กรอกข้อมูลไม่ครบ')</script>";
            echo "<script>window.location='ad_admininfo.php'</script>";
          }
          
  
      }
          
      
        
        


?>