<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/ad_addtest.css">
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">
</head>

<body>
  <?php
  include "./ad_Slidebar.php";
  ?>

  <a href="javascript:history.back()">
    <i class="fa-solid fa-angles-left"></i>ย้อนกลับ</a>


  <h1><b>เพิ่มแบบทดสอบ</h1>
  <div class="appeal-container">
    <div class="appeal-content">
      <div class="appeal-content-info">
        <h3><b>หัวเรื่อง</h3>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">ประเภทงาน</span>
          <select class="form-select" aria-label="Default select example">
            <option selected></option>
            <option value="1">พนักงานเดลิเวอรี่</option>
            <option value="2">พนักงานต้อนรับ</option>
            <option value="3">พนักงานเสิร์ฟอาหาร</option>
          </select>
          <span class="input-group-text" id="inputGroup-sizing-default">ชื่อเรื่อง</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">คำอธิบาย</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="appeal-container1">
    <div class="appeal-content">
      <div class="appeal-content-info">
        <h3><b>ฟอร์มเพิ่มแบบสอบถาม</h3>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">คำถาม</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">ช้อยที่ 1</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <span class="input-group-text" id="inputGroup-sizing-default">ช้อยที่ 2</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="inputGroup-sizing-default">ช้อยที่ 3</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          <span class="input-group-text" id="inputGroup-sizing-default">ช้อยที่ 4</span>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <button type="button" class="btn btn-primary sent">ส่ง</button>
      </div>
    </div>
  </div>

  <div class="appeal-container2">
    <div class="appeal-content">
      <div class="appeal-content-info">
        <table class="table">
          <thead>
            <tr>
              <th scope="col" width="10%">ข้อที่</th>
              <th scope="col1" width="31%">คำถาม</th>
              <th scope="col2" width="16%">ช้อยที่ 1</th>
              <th scope="col3" width="16%">ช้อยที่ 2</th>
              <th scope="col4" width="16%">ช้อยที่ 3</th>
              <th scope="col5" width="16%">ช้อยที่ 4</th>
            </tr>
          </thead>

        </table>
      </div>
    </div>
  </div>
  <div>
    <button type="button" class="btn btn-primary sent1">ส่ง</button>
     <button type="button" class="btn btn-danger cancel">ยกเลิก </button> 

  </div>

</body>

</html>