<?php 
include('./config/db.php');
if(isset($_GET['Applicant_ID'])){
    $Applicant_ID = $_GET['Applicant_ID'];
    $approve = mysqli_query ($conn," UPDATE `applicant` SET `Status`='ตรวจสอบเรียบร้อย' WHERE Applicant_ID = $Applicant_ID");
    if($approve){
        include "./script/alert.php";
        echo "<script>checksuccess(); </script> ";
        // echo "<script>window.location.href='checkapplicant.php'</script>";
    
    }
    else{
        echo "<script>alert('ตรวจสอบไม่สำเร็จ') </script>";
    }
}
?>