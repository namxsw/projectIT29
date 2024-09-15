<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user_listresume.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <title>โปรไฟล์</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body>

    <?php
    include "./user_navbar.php";
    // include "./script/province.php"
    ?>

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">


                <?php
                include('./config/db.php');
                $user = $_SESSION['username'];
                $query = mysqli_query($conn, "select * from user  WHERE `User_username`='$user'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="profileUser">
                        <img src="./img/<?php echo $row['PIC']; ?>" width="120px" height="160px" id="pfupic">
                    </div>

                    <?php
                    include('./config/db.php');
                    if ($_POST) {
                        if (isset($_FILES['upload'])) {
                            $name_file =  $_FILES['upload']['PIC'];
                            $tmp_name =  $_FILES['upload']['tmp_name'];
                            $locate_img = "img/";
                            move_uploaded_file($tmp_name, $locate_img . $name_file);
                        }
                    }
                    ?>
                    <form class="imgform " action=" " method="post" enctype="multipart/form-data">
                        <div class='file-input'>
                            <input type="file" class="form-control" name="ct_logo" id="pfu" accept="image/jpeg,image/gif,image/png">
                            <span class='button'>อัปโหลดรูปภาพ</span>
                            <span class='label' data-js-label>อัปโหลดรูปภาพ</label>

                        </div>
                    </form>


                    <hr>

                    <div class="info">
                        <h4 class="p-0"><span class="text-secondary"> ขั้นที่ 1</span> ข้อมูลทั่วไป</h4>
                    </div>

                    <div class="from-input  ">
                        <form action="./user_profile.php" method="post"></form>

                        <div class="row mt-3">
                            <div class="col-md-4 ">
                                <label for="exampleFormControlInput1" class="form-label">คำนำหน้า :</label>
                                <input type="text" aria-label="firstname" class="form-control from-input-text" value="<?php echo $row['User_Fname']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">ชื่อ :</label>
                                <input type="text" aria-label="firstname" class="form-control from-input-text" value="<?php echo $row['User_Fname']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">นามสกุล :</label>
                                <input type="text" aria-label="lastname" class="form-control from-input-text" value="<?php echo $row['User_Lname']; ?>">
                            </div>
                        </div>

                        <div class="row  mt-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">เพศ :</label>
                                <input type="text" aria-label="sex" class="form-control from-input-text" value="<?php echo $row['user_sex']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">วันเกิด :</label>
                                <input type="date" aria-label="birthday" class="form-control from-input-text" value="<?php echo $row['User_Birthday']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">อายุ :</label>
                                <input type="text" aria-label="age" class="form-control from-input-text" value="<?php echo $row['user_age']; ?> ปี">
                            </div>
                        </div>


                        <div class="row  mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">น้ำหนัก :</label>
                                <input type="text" aria-label="weigh" class="form-control from-input-text" value="<?php echo $row['user_weigh']; ?> กิโลกรัม">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">ส่วนสูง :</label>
                                <input type="text" aria-label="heig" class="form-control from-input-text" value="<?php echo $row['user_heig']; ?> เซนติเมตร">
                            </div>
                        </div>

                        <div class="row  mt-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">เบอร์โทร :</label>
                                <input type="text" aria-label="tel" class="form-control from-input-text" value="<?php echo $row['User_Tel']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">อีเมล :</label>
                                <input type="text" aria-label="email" class="form-control from-input-text" value="<?php echo $row['User_Email']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">Line ID :</label>
                                <input type="text" aria-label="lineID" class="form-control from-input-text" value="">
                            </div>
                        </div>


                        <hr>

                        <div class="education">
                            <h4 class="p-0"><span class="text-secondary"> ขั้นที่ 2</span> ข้อมูลการศึกษา</h4>
                        </div>

                        <div class="row  mt-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">คณะ :</label>
                                <input type="text" aria-label="fact" class="form-control from-input-text" value="<?php echo $row['user_fact']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">สาขา :</label>
                                <input type="text" aria-label="First name" class="form-control from-input-text" value="<?php echo $row['user_dept']; ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlInput1" class="form-label">เกรดเฉลี่ย :</label>
                                <input type="text" aria-label="classyear" class="form-control from-input-text" value="<?php echo $row['user_grad']; ?>">
                            </div>
                        </div>

                        <hr>

                        <?php

                        include "./script/province.php"
                        ?>

                        <div class="address">
                            <h4 class="p-0"><span class="text-secondary"> ขั้นที่ 3</span> ข้อมูลที่อยู่</h4>
                        </div>
                        <!-- <div class="input-group prefix mt-4">
                            <span class="input-group-text">ที่อยู่ </span>
                            <input type="text" aria-label="fact" class="form-control from-input-text" value="<?php echo $row['user_addr']; ?>">
                        </div> -->

                        <div class="row  mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">บ้านเลขที่ :</label>
                                <input type="text" class="form-control" name="HouseNo" aria-describedby="HouseNo">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label">หมู่ :</label>
                                <input type="text" class="form-control" name="Moo" aria-describedby="Moo">
                            </div>
                        </div>

                        <div class="row  mt-3">
                            <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">ซอย :</label>
                            <input type="text" class="form-control" name="soi" aria-describedby="soi">
                            </div>
                            <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">ถนน :</label>
                            <input type="text" class="form-control" name="Road" aria-describedby="Road">
                            </div>
                        </div>

                        <div class="row  mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1" class="form-label ">จังหวัด :</label>
                                <select name="province_id" id="province" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกจังหวัด">
                                    <?php while ($result = mysqli_fetch_assoc($result_province)) : ?>
                                        <option value="<?php echo $result['id'] ?>"><?php echo $result['province_name'] ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">อำเภอ/เขต :</label>
                                <select name="amphure_id" id="amphure" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกอำเภอ/เขต">
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ตำบล/แขวง :</label>
                                <select name="district_id" id="district" class="form-control selectpicker" data-live-search="true" data-width="100%" data-size="5" title="เลือกตำบล/แขวง">
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">รหัสไปรษณีย์ :</label>
                                <input name="PostalCode" id="zipcode" class="form-control" placeholder="รหัสไปรษณีย์">
                                </input>
                            </div>
                        </div>


                        <div class=" Edit col-12">

                            <input type="submit" class="btn btn-primary mt-3" id="add-data" name="bn-submit" value="บันทึกข้อมูล">
                        </div>
                    <?php

                }

                    ?>
                    </div>
            </div>
        </div>


    </div>
    </div>
    </div>
    <footer>
        <div class="ft">
            <img src="./img/bayasitaW.png" alt="">
            Copyright © 2021 Bayasita@KKU. All rights reserved.
        </div>
    </footer>

</body>

<!-- ปุ่มอัปโหลด-->
<script>
    var inputs = document.querySelectorAll('.file-input')

    for (var i = 0, len = inputs.length; i < len; i++) {
        customInput(inputs[i])
    }

    function customInput(el) {
        const fileInput = el.querySelector('[type="file"]')
        const label = el.querySelector('[data-js-label]')

        fileInput.onchange =
            fileInput.onmouseout = function() {
                if (!fileInput.value) return

                var value = fileInput.value.replace(/^.*[\\\/]/, '')
                el.className += ' -chosen'
                label.innerText = value
            }
    }


    pfu.onchange = evt => {
        const [file] = pfu.files
        if (file) {
            pfupic.src = URL.createObjectURL(file)
        }
    }
</script>

</html>