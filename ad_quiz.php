<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/ad_quiz.css">
  <title>แบบทดสอบ</title>
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>

<body>

  <?php
  include "./ad_Slidebar.php";
  ?>
  <h1><b>แบบทดสอบ</h1>


  <div class="appeal-container">
    <div class="appeal-content">
      <div class="appeal-content-info">
        <table class="table">
          <div class="add">
            <a href="./ad_addtest.php">
              <button type="button" class="btn btn-outline-danger">
                <i class="fa-solid fa-plus"></i>เพิ่มแบบทดสอบ</button></a>
          </div>
          <thead>
            <tr>
              <th scope="col" width="15%">#</th>
              <th scope="col" width="35%">ประเภทงาน</th>
              <th scope="col" width="39%">แบบทดสอบ</th>
              <th scope="col" width="8%">แก้ไข</th>
              <th scope="col" width="8%">ลบ</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td><i class="fa-solid fa-pen-to-square"></i></td>
              <td><i class="fa-solid fa-trash-can"></i></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td><i class="fa-solid fa-pen-to-square"></i></td>
              <td><i class="fa-solid fa-trash-can"></i></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>


</body>

</html>