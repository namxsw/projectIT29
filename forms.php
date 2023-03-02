<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ใบสมัครงาน</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/forms.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
</head>

<body>
    
    
    <h2>ใบสมัครงาน</h2>
    <div class="forms">
        <form method="POST" action="./adforms.php" enctype="multipart/form-data">

            <div class="mb-3" style="float: left;">
                <label for="gender" class="form-label4">เพศ</label>
                <select class="form-select fc1" name="gen" aria-label="Default select example" style="width: 450px;">
                    <option selected>เลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="cardid" class="form-label">เลขบัตรประชาชน</label>
                <input type="text" class="form-control fc2" name="cardid" aria-describedby="cardid" style="width: 450px; margin-left:8px">
            </div>
            <div class="mb-3" style="float: left;">
                <label for="fitstname" class="form-label1">ชื่อ</label>
                <input type="text" class="form-control" name="fname" aria-describedby="fitstname" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lname" aria-describedby="lastname" style="width: 450px;">
            </div>

            <div class="mb-3" style="float: left;">
                <label for="email" class="form-label1">E-mail</label>
                <input type="text" class="form-control" name="mail" aria-describedby="email" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="bd" class="form-label">วันเกิด</label>
                <input type="date" class="form-control" name="bd" aria-describedby="bd" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label3">ที่อยู่</label>
                <input type="text" class="form-control" name="ad" aria-describedby="username" style="width: 950px;">
            </div>


            <div class="mb-3" style="float: left;">
                <label for="tel" class="form-label1">เบอร์โทร</label>
                <input type="text" class="form-control" name="tel" aria-describedby="pass" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="jobtype" class="form-label">ประเภทงาน</label>
                <select class="form-select" name="type" aria-label="Default select example" style="width: 450px;">
                    <option selected>เลือกประเภทงาน</option>
                    <option value="พนักงานเดลิเวอรี่">พนักงานเดลิเวอรี่</option>
                    <option value="พนักงานต้อนรับ">พนักงานต้อนรับ</option>
                    <option value="พนักงานเสิร์ฟอาหาร">พนักงานเสิร์ฟอาหาร</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label4">สถานะ</label>
                <select class="form-select fc1" name="sta" aria-label="Default select example" style="width: 450px;">
                    <option selected>สถานะ</option>
                    <option value="โสด">โสด</option>
                    <option value="สมรส">สมรส</option>
                    <option value="หย่าร้าง">หย่าร้าง</option>
                </select>
            </div>

            <div class="mb-3" style="float: left;">
                <label for="fact" class="form-label1">คณะ</label>
                <input type="text" class="form-control" name="fact" aria-describedby="fact" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="dept" class="form-label">สาขา</label>
                <input type="text" class="form-control" name="deptt" aria-describedby="dept" style="width: 450px;">
            </div>

            <div class="mb-3" style="float: left;">
                <label for="class" class="form-label1">ชั้นปี</label>
                <input type="text" class="form-control" name="class" aria-describedby="class" style="width: 450px;">
            </div>

            <div class="mb-3">
                <label for="edu" class="form-label">หลักฐานการศึกษา</label>
                <input type="file" class="form-control" name="edu" aria-label="file example" required style="width: 450px;">
                <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>

            <div class="btn-send">
                <div class="d-grid gap-2 ">
                    <button class="btn btn-primary " name="adforms" type="submit"><b>ส่งใบสมัคร</b></button>
                </div>

            </div>

    </div>
   
    </form>
</body>

</html>