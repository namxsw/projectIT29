<!DOCTYPE html>
<html lang="en">

<head>
    <title>หน้าหลัก</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/user_Home.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
    <?php
    include "./user_navbar.php";
    ?>


    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/img1.jpg " class="d-block w-100" alt="baya">
        </div>
    </div>

    <!-- ค้นหา -->
    <div class="ser ">
        <div class="search align-items-center">
            <h4><b>ระบุงานที่คุณต้องการ</h4></b>
        </div>

        <form class="row row-cols-lg-auto g-3 align-items-center search-brn" method="post">
            <div class="col-12 ">
                <select class="form-select form-control" aria-label="Default select example" name="edu">
                    <option selected value="all">วุฒิการศึกษา</option>
                    <option value="ม.6">ม.6</option>
                    <option value="ปวช.">ปวช.</option>
                    <option value="ปวส.">ปวส.</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                </select>
            </div>

            <div class="col-12">
                <select class="form-select form-control" aria-label="Default select example" name="job">
                    <option selected value="all">เลือกประเภทงาน</option>
                    <option value="พนักงานเดลิเวอรี่">พนักงานเดลิเวอรี่</option>
                    <option value="พนักงานต้อนรับ">พนักงานต้อนรับ</option>
                    <option value="พนักงานเสิร์ฟอาหาร">พนักงานเสิร์ฟอาหาร</option>
                </select>
            </div>

            <!-- <div class="col-12">
                <input class="form-control" type="search" placeholder="Search">
            </div> -->

            <div class="col-12">
                <button type="submit" name="btm" class="btn btn-primary submit">ค้นหา</button>
            </div>
        </form>
    </div>


    <div class="title">
        <h3><b>ประกาศข่าวสาร</h3></b>
    </div>
    <div id="line"></div>
    <?php
    include('./config/db.php');
    if(isset($_POST['btm']) && $_POST['edu'] != 'all' &&  $_POST['job'] == 'all'){
        $sql = "SELECT * FROM `job`WHERE `Job_Education` = '".$_POST['edu']."'";
    }
    elseif(isset($_POST['job']) && $_POST['job'] != 'all' &&  $_POST['edu'] == 'all'){
        $sql = "SELECT * FROM `job`WHERE `Job_Type` = '".$_POST['job']."'";
    }
    elseif(isset($_POST['btm']) && $_POST['job'] != 'all' && $_POST['edu'] != 'all'){
        $sql = "SELECT * FROM `job`WHERE `Job_Education` = '".$_POST['edu']."' AND `Job_Type` = '".$_POST['job']."'";
    }
    else{
        $sql = "SELECT * FROM `job`"; 
    }    
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">

                    <tr>
                        <div class="post">
                            <p class="section-ap">
                            <h4>
                                <b>
                                    <td><?php echo $row['Job_Type']; ?>
                                </b>
                            </h4>
                            </td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-person"></i> จำนวน : <td><?php echo $row['Job_Amount']; ?>คน</td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-newspaper"></i> รายละเอียดงาน : <td><?php echo $row['Job_Result']; ?></td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-graduation-cap"></i> วุฒิการศึกษา : <td><?php echo $row['Job_Education']; ?></td>
                            </p>
                            <p class="section-ap"><i class="fa-solid fa-money-bills"></i> เงินเดือน : <td><?php echo $row['Job_Salary']; ?>บาท</td>
                            </p>

                        </div>
                    </tr>

                    <a class="btn-detail" type="button" href="user_apply.php?Job_ID=<?php echo $row['Job_ID'] ?>">รายละเอียด</a>
                    <!-- <button class="btn-detail" type="button">รายละเอียดงาน</button> -->
                </div>

            </div>
        </div>
    <?php
    }

    ?>

    <footer>
        <div class="ft">
            <img src="./img/bayasitaW.png" alt="">
            Copyright © 2021 Bayasita@KKU. All rights reserved.
        </div>
    </footer>
</body>
<script src="./script/script.js"></script>
</html>