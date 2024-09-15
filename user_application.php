<!DOCTYPE html>
<html lang="en">

<head>
    <title>สมัครงาน</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/user_application.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/user_application.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>

    <?php
    include('./config/db.php');
    include "./user_navbar.php";
    require "./adforms.php";
    if (isset($_GET['Job_ID'])) {

        $Job_ID = $_GET['Job_ID'];
    }
    $User_username = $_SESSION['username'];
    $query = mysqli_query($conn, "select * from user where User_username='$User_username' ");
    $row = mysqli_fetch_array($query);
    extract($row);
    $Job_ID = $_GET['Job_ID'];
    ?>
    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <div class="applybox">
                    <h3 id="headline">ใบสมัครงาน(นักศึกษา)</h3>
                    <form id="applyform" method="POST" enctype="multipart/form-data">
                        <div class="form-outer" style="overflow: visible;">

                            <!-- form--1 -->
                            <div id="stepOne" class="row">
                                <!-- แถบโปรเกสฟอร์ม -->
                                <div class="progress p-0 my-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">1/2 </div>
                                </div>
                                <!-- <div>
                                    <input type="radio" id="huey" name="gen" value="ชาย" checked>
                                    <label for="huey">ชาย</label>
                                    <input type="radio" id="dewey" name="gen" value="หญิง">
                                    <label for="dewey">หญิง</label>
                                </div> -->
                                
                                <div class="prefix mt-3 col-12">
                                    <label for="prefix" class="form-label">คำนำหน้า</label>
                                    <select class="form-select" name="prefix" aria-label="Default select example">
                                        <option selected>เลือกคำนำหน้า</option>
                                        <option value="นาย">นาย</option>
                                        <option value="นาง">นาง</option>
                                        <option value="นางสาว">นางสาว</option>
                                    </select>
                                </div>

                                

                                
                                
                                <div class="des_input">ชื่อ</div>
                                <input class="sqr-input  form-control" type="text" value="<?php echo $row['User_Fname']; ?>" placeholder="ชื่อ" name="fname" required />
                                <div class="des_input">นามสกุล</div>
                                <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Lname']; ?>" type="text" placeholder="นามสกุล" name="lname" required />
                                <div class="des_input">วันเกิด</div>
                                <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Birthday']; ?>" type="date" placeholder="วันเกิด" name="bd" required />
                                <div class="des_input">อีเมล</div>
                                <input class="sqr-input col-12 form-control" value="<?php echo $row['User_Email']; ?>" type="email" placeholder="อีเมล" name="mail" required />
                                <div class="des_input">ที่อยู่</div>
                                <input class="sqr-input col-12 form-control" value="<?php echo $row['user_addr']; ?>" type="text" placeholder="ที่อยู่" name="ad" required />
                                <div class="des_input">เบอร์โทรศัพท์</div>
                                <input name="tel" class="sqr-input col-12 form-control" value="<?php echo $row['User_Tel']; ?>" type="text" placeholder="เบอร์โทรศัพท์" name="tel" pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทรศัพท์ หมายเลข (0-9) จำนวน 10 ตัว" required maxlength="10" />

                                <input type="button" name="next" class=" btn btn-primary action-button" value="ถัดไป" onclick="nextbtn()" id="next">
                            </div>


                            <!-- form--2 -->

                            <div id="stepTwo" class="row">
                                <div class="progress p-0 my-2">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">2/2 </div>
                                </div>
                                <div class="des_input">คณะ</div>
                                <input class=" col-12 form-control" value="<?php echo $row['user_fact']; ?>" type="text" placeholder="คณะ" name="fact" required />
                                <div class="des_input">สาขา</div>
                                <input class="form-control col-12" value="<?php echo $row['user_dept']; ?>" type="text" placeholder="สาขา" name="deptt" required />
                                <div class="des_input">ชั้นปี</div>
                                <input class="form-control col-12" type="text" placeholder="ขั้นปี" name="class" required />
                                <div class="des_input">หลักฐานทางการศึกษา</div>
                                <input class="sqr-input col-12 form-control" type="file" placeholder="หลักฐานทางการศึกษา" name="File" required>
                                <input class="form-control col-12" type="text" name="Job_ID" value="<?php echo $Job_ID; ?>" hidden />

                                <div class="des_input">ไฟล์เพิ่มเติม</div>
                                <input class="sqr-input col-12 form-control" type="file" placeholder="ไฟล์เพิ่มเติม" name="File1">
                                <input class="form-control col-12" type="text" name="Job_ID" value="<?php echo $Job_ID; ?>" hidden />
                                <input type="button" name="previous" class="btn btn-primary action-button" value="ย้อนกลับ" onclick="previousbtn()" id="back">

                                <button type="submit" name="addwork" class="btn btn-success submitBtn" id="submit" value="ยืนยันการสมัคร">ยืนยันการสมัคร</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="ft">
            <img src="./img/bayasitaW.png" alt="">
            Copyright © 2019 Bayasita@KKU. All rights reserved.
        </div>
    </footer>
</body>
<script>
 
    // previousbtn
    function previousbtn() {
        document.getElementById("stepOne").style.display = "block";
        document.getElementById("stepTwo").style.display = "none";
        document.getElementById("Twostep").classList.add("current-item");
    }
   // nextbtn
    function nextbtn() {
        document.getElementById("stepOne").style.display = "none";
        document.getElementById("stepTwo").style.display = "block";
    }
</script>


</html>