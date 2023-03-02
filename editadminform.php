<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">
  <link rel="stylesheet" href="./css/ad_admininfo.css">
</head>
</head>
<body>
    <?php 
    include "./ad_Slidebar.php";
    include('./config/db.php');
    if (isset($_GET["User_id"])){
        $User_id=$_GET["User_id"];
        
        $result=mysqli_query($conn,"SELECT * FROM user where User_id = '$User_id'");
        $fetchUser = mysqli_fetch_array($result);
        
        
    ?>  
 

  <div class="forms">
    <form method="POST" action="./edit_admin.php?User_id=<?php echo $User_id; ?>" enctype="multipart/form-data">
      <a href="javascript:history.back()">
        <i class="fa-solid fa-angles-left"></i>ย้อนกลับ</a>

     
      <div class="appeal-container1">
        <div class="appeal-content">
          <div class="appeal-content-info">
            <h3><b>ข้อมูลแอดมิน</h3>
            
            <div class="input-group mb-3">
            
              <span class="input-group-text" id="inputGroup-sizing-default">ชื่อ</span>
              <input type="text" class="form-control" name="firstname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $fetchUser['User_Fname']; ?>">
              <span class="input-group-text" id="inputGroup-sizing-default">นามสกุล</span>
              <input type="text" class="form-control" name="lastname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $fetchUser['User_Lname']; ?>">
            </div>
           
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">เบอร์โทรศัพท์</span>
              <input type="text" class="form-control" name="tel" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $fetchUser['User_Tel']; ?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
              <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $fetchUser['User_Email']; ?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">วันเกิด</span>
              <input type="date" class="form-control" name="bd" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $fetchUser['User_Birthday']; ?>">
            </div>
            
            <div>
              <button  type="submit"   class="btn btn-outline-primary sent1" onclick="return confirm('ยืนยันการแก้ไขใช่หรือไม่')" >ส่ง</button>
              <button  type="button" onclick="window.location='./ad_admin.php'" class="btn btn-outline-danger cancel">ยกเลิก </button>
              
            </div>

          </div>
        </div>
      </div>
      

    </form>

</body>
    <?php  

    }else{
        echo "<script>alert('กรอกข้อมูลไม่ครบ')</script>";
        echo "<script>window.location='ad_admin.php'</script>";
    }
    ?>
  
</body>
</html>

