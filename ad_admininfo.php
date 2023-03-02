<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เพิ่มข้อมูล</title>
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">
  <link rel="stylesheet" href="./css/ad_admininfo.css">
</head>

<body>
  <?php
  include "./ad_Slidebar.php";

  ?>



  <div class="forms">
    <form method="POST" action="./add_admin.php" enctype="multipart/form-data">
      <a href="javascript:history.back()">
        <i class="fa-solid fa-angles-left"></i>ย้อนกลับ</a>

      <!-- <h1><b>เพิ่มแอดมิน</h1> -->
      <div class="appeal-container1">
        <div class="appeal-content">
          <div class="appeal-content-info">
            <h3><b>ข้อมูลแอดมิน</h3>
            <hr>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">ชื่อผู้ใช้</span>
              <input type="text" class="form-control" name="username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              <span class="input-group-text" id="inputGroup-sizing-default">รหัสผ่าน</span>
              <input type="text" class="form-control" name="pass" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              
              <span class="input-group-text" id="inputGroup-sizing-default">ชื่อ</span>
              <input type="text" class="form-control" name="firstname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
              <span class="input-group-text" id="inputGroup-sizing-default">นามสกุล</span>
              <input type="text" class="form-control" name="lastname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
           
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">เบอร์โทรศัพท์</span>
              <input type="text" class="form-control" name="tel" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
              <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text" id="inputGroup-sizing-default">วันเกิด</span>
              <input type="date" class="form-control" name="bd"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div>
              <button type="submit"  name="add" class="btn btn-outline-primary sent1">ส่ง</button>
              <button  type="button" onclick="window.location='./ad_admin.php'" class="btn btn-outline-danger cancel">ยกเลิก </button>
              
            </div>

          </div>
        </div>
      </div>
    
    </form>
</body>
</html>