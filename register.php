<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สมัครสมาชิก</title>
  <link rel="stylesheet" href="./CSS/register.css">
  <link rel="icon" type="image/png" href="./img/BayasitaD.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



  <!-- js datatable -->
  <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



  <!-- bootstrap selectpicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>


  <!-- input mask -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>





</head>

<body>
  <?php
  include "./config/db.php";
  ?>

  <?php
  session_start();
  include "./config/db.php";
  if (isset($_POST["signup"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $sex = $_POST["sex"];
    $email = $_POST["email"];
    $addr = $_POST["addr"];
    $heig = $_POST["heig"];
    $weigh = $_POST["weigh"];
    $age = $_POST["age"];
    $birthday = $_POST["bd"];
    $tell = $_POST["tel"];
    $fact = $_POST["fact"];
    $dept = $_POST["dept"];
    $grad = $_POST["grad"];
    $conpass = $_POST["compass"];

    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = (mt_rand());
    $filetmp3 = $_FILES['picc']['tmp_name'];
    $fileoldname3 = strrchr($_FILES['picc']['name'], ".");
    $filename3 = $date . $numrand . $fileoldname3;
    $filetype3 = $_FILES['picc']['type'];
    $PIC = $filename3;
    $filepath3 = './img/' . $filename3;



    if ($password != $conpass) {
      echo "<script>alert('รหัสผ่านไม่ตรงกัน')</script>";
    }
    if ($password != "" && $password != "" && $firstname != "" && $lastname != "" && $sex != "" && $email != "" && $addr != "" && $heig != "" && $age != "" && $weigh != "" && $birthday != "" && $tell != "" && $fact != "" && $dept != "" && $grad != "" && $conpass != "" && $PIC) {
      $password = md5($password);
      $sql = "INSERT INTO `user`(`User_username`, `User_Password`, `User_Fname`, `User_Lname`, `User_Tel`, `User_Email`, `User_Birthday`, `user_addr`, `user_sex`, `user_heig`, `user_weigh`, `user_age`, `user_fact`, `user_dept`, `user_grad`, `Usertype_Id`, `PIC`) 
          VALUES ('$username','$password','$firstname','$lastname','$tell','$email','$birthday','$addr','$sex','$heig','$weigh','$age','$fact','$dept','$grad','2','$PIC')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        move_uploaded_file($filetmp3, $filepath3);
        echo "<script>alert('สมัครสำเร็จ')</script>";
        echo "<script>window.location='index.php';</script>";
      } else {
        echo "<script>alert('สมัครไม่สำเร็จ')</script>";
      }
    } else {
      echo "<script>alert('กรอกข้อมูลไม่ครบ')</script>";
    }
  }

  ?>



  <div class="back">
    <a href="./index.php"><i class="fa-solid fa-angles-left"></i></a>
  </div>

  <form method="post" enctype="multipart/form-data">
    <div class="appeal-container">
      <div class="appeal-content">
        <div class="appeal-content-info">
          <img src="./img/BayasitaD.png" alt="">
          <!-- <h3><b>สมัครสมาชิกและสร้างโปรไฟล์</h3> -->
          <form id="applyform" method="POST" action="./adforms.php" enctype="multipart/form-data">
            <div class="form-outer" style="overflow: visible;">
              <!-- form--1 -->
              <h3><b>สมัครสมาชิก</h3>

              <div id="stepOne" class="row">
                <!-- แถบโปรเกสฟอร์ม -->
                <div class="progress p-0 my-3">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">1/3 </div>
                </div>
                <label for="exampleFormControlInput1" class="form-label  mt-3">รูปโปรไฟล์ :</label>
                <div class="input-group mb-3">

                  <!-- <span class="input-group-text" id="inputGroup-sizing-default">รูปโปรไฟล์</span> -->
                  <input class="sqr-input col-12 form-control " style="margin-left: -1px;" type="file" placeholder="รูปภาพ" name="picc">
                </div>
                <div class="mb-3 ">
                  <label for="exampleFormControlInput1" class="form-label">ชื่อผู้ใช้ :</label>
                  <input type="text" class="form-control" name="username" aria-describedby="username" id="username">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">รหัสผ่าน :</label>
                  <input type="password" class="form-control" name="pass" aria-describedby="pass">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ยืนยันรหัสผ่าน :</label>
                  <input type="password" class="form-control" name="conpass" aria-describedby="conpass">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">คำนำหน้า :</label>
                  <select class="form-select" style="left: 40%; " id="inputGroupSelect" name="sex">
                    <option selected="">กรุณาเลือกคำนำหน้า</option>
                    <option value="นาง">นาง</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">เพศ :</label>
                  <select class="form-select" style="left: 40%; " id="inputGroupSelect" name="sex">
                    <option selected="">กรุณาเลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ชื่อ :</label>
                  <input type="text" class="form-control" name="firstname" aria-describedby="fitstname">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">นามสกุล :</label>
                  <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">อีเมล :</label>
                  <input type="text" class="form-control" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">วันเกิด :</label>
                  <input type="date" class="form-control" name="bd" aria-describedby="bd">
                </div>

                <input type="button" name="next" class=" btn btn-outline-primary" value="ถัดไป" onclick="nextbtn()" id="next">
              </div>


              <?php
              include "./config/db.php";
              // $userid = $_SESSION['User_id'];
              // $sqlqry = "SELECT * FROM user WHERE (user_id = '$userid') ";
              // $qry = mysqli_query($conn, $sqlqry);
              // $row = mysqli_fetch_array($qry);

              $query_usType = "SELECT * FROM usertype ORDER BY UserType_Id ";
              $result_usType = mysqli_query($conn, $query_usType);
              $query_province = "SELECT * FROM provinces";
              $result_province = mysqli_query($conn, $query_province);

              // require "../backend/add-applicant.php"
              ?>
              <!-- form--2 -->
              <div id="stepTwo" class="row">
                <div class="progress p-0 my-3">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">2/3 </div>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label ">เบอร์โทร :</label>
                  <input class=" form-control" id="tel" type="tel" name="tel" placeholder="เบอร์โทรศัพท์" pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทรศัพท์ หมายเลข (0-9) จำนวน 10 ตัว" required>
                </div>
                <!-- <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">เบอร์โทร :</label>
                  <input type="tel" class="input form-control " name="tel" id="tel" pattern="[0-9]{10}" aria-describedby="tel">
                </div> -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Line ID :</label>
                  <input class="form-control" type="text" name="lineid" required>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">น้ำหนัก :</label>
                  <input type="text" class="form-control" name="weigh" aria-describedby="weigh">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ส่วนสูง :</label>
                  <input type="text" class="form-control" name="heig" aria-describedby="heig">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่ :</label>
                  <input type="text" class="form-control" name="HouseNo" aria-describedby="HouseNo">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">หมู่ :</label>
                  <input type="text" class="form-control" name="Moo" aria-describedby="Moo">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ซอย :</label>
                  <input type="text" class="form-control" name="soi" aria-describedby="soi">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ถนน :</label>
                  <input type="text" class="form-control" name="Road" aria-describedby="Road">
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">จังหวัด :</label>
                  <select name="province_id" id="province" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกจังหวัด">
                    <?php while ($result = mysqli_fetch_assoc($result_province)) : ?>
                      <option value="<?php echo $result['id'] ?>"><?php echo $result['province_name'] ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">อำเภอ/เขต :</label>
                  <select name="amphure_id" id="amphure" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกอำเภอ/เขต">
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">ตำบล/แขวง :</label>
                  <select name="district_id" id="district" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกตำบล/แขวง">
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">รหัสไปรษณีย์ :</label>
                  <input name="PostalCode" id="zipcode" class="form-control" placeholder="รหัสไปรษณีย์">
                  </input>
                </div>


                <input type="button" name="previous" class="btn btn-outline-warning" value="ย้อนกลับ" onclick="previousbtn()" id="back">
                <input type="button" name="next" class=" btn btn-outline-primary mt-3" value="ถัดไป" onclick="nextbtnn()" id="next">

              </div>

              <!-- <button type="submit" name="signup" class="btn btn-primary mt-3">สมัครสมาชิก</button> -->
            </div>



            <!-- form--3 -->
            <div id="stepThree" class="row">
              <div class="progress p-0 my-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">3/3 </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">คณะที่ศึกษา :</label>
                <input type="text" class="form-control" name="fact" aria-describedby="fact">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">สาขาที่ศึกษา :</label>
                <input type="text" class="form-control" name="dept" aria-describedby="dept">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">เกรดเฉลี่ย :</label>
                <input type="text" class="form-control" name="dept" aria-describedby="dept">
              </div>
              <input type="button" name="previous" class="btn btn-outline-warning" value="ย้อนกลับ" onclick="previousbtnn()" id="back">
              <button type="submit" name="signup" class="btn btn-primary mt-3">สมัครสมาชิก</button>
            </div>
        </div>
  </form>

  </div>
  </div>
  <hr>
  <p>หากเป็นสมาชิกแล้วคลิกที่นี่เพื่อ<a href="signin.php"> เข้าสู่ระบบ</a>
</body>
<script>
  // nextbtn
  function nextbtn() {
    document.getElementById("stepOne").style.display = "none";
    document.getElementById("stepTwo").style.display = "block";
    // document.getElementById("stepThree").style.display = "block";

  }

  // nextbtnn
  function nextbtnn() {
    document.getElementById("stepTwo").style.display = "none";
    document.getElementById("stepThree").style.display = "block";
    // document.getElementById("stepThree").style.display = "block";

  }
  // previousbtn
  function previousbtn() {
    document.getElementById("stepOne").style.display = "block";
    document.getElementById("stepTwo").style.display = "none";
    // document.getElementById("Twostep").classList.add("current-item");
  }

  // previousbtnn
  function previousbtnn() {
    document.getElementById("stepTwo").style.display = "block";
    document.getElementById("stepThree").style.display = "none";
    document.getElementById("Twostep").classList.add("current-item");
  }
  // // nextbtn
  // function nextbtn() {
  //   document.getElementById("stepOne").style.display = "none";
  //   document.getElementById("stepTwo").style.display = "block";
  // }
</script>

<script>
  $(document).ready(function() {
    $("#username").change(function() {
      var flag;
      $.ajax({
        url: "check.php",
        data: "username=" + $("#username").val(),
        type: "POST",
        async: false,
        success: function(data, status) {
          var result = data.split(",");
          flag = result[0];
          var msg = result[1];
          $("#msg1").html(msg);
        },
        error: function(xhr, status, exception) {
          alert(status);
        }
      });
      return flag;
    });
  });

  $('.selectpicker').selectpicker({
    noneResultsText: 'ไม่พบข้อมูล'
  });
  $(function() {
    // element selector
    var provinceObject = $('#province');
    var amphureObject = $('#amphure');
    var districtObject = $('#district');
    var zipObject = $('#zipcode');


    // on change province
    provinceObject.on('change', function() {
      var provinceId = $(this).val();

      amphureObject.empty();
      districtObject.empty();
      zipObject.val('');


      $.get('get_amphure.php?province_id=' + provinceId, function(data) {
        var result = JSON.parse(data);
        $.each(result, function(index, item) {
          amphureObject.append(
            $('<option></option>').val(item.id).html(item.amphure_name)
          );
        });
        $('.selectpicker').selectpicker('refresh');
      });
    });

    // on change amphure
    amphureObject.on('change', function() {
      var amphureId = $(this).val();

      districtObject.empty();
      zipObject.val('');



      $.get('get_district.php?amphure_id=' + amphureId, function(data) {
        var result = JSON.parse(data);
        $.each(result, function(index, item) {
          districtObject.append(
            $('<option></option>').val(item.id).html(item.district_name)
          );
        });
        $('.selectpicker').selectpicker('refresh');
      });
    });

    // on change district

    districtObject.on('change', function() {
      var districtId = $(this).val();

      zipObject.val('');

      $.get('get_zip.php?district_id=' + districtId, function(data) {
        var result = JSON.parse(data);
        $.each(result, function(index, item) {
          zipObject.val(item.zip_code).html(item.zip_code)
        });
      });
    });
  });
</script>

<script>
  $(":input").inputmask();

  $("#tel").inputmask({
    "mask": "9999999999"
  });
</script>


</html>