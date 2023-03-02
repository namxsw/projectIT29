<!DOCTYPE html>
<html lang="en">

<head>
    <title>รายละเอียดงาน</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/apply.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "./user_navbar.php";
    ?>


    <div class="apply">
        <button id="addbn" type="button" class="btn btn-danger rigth" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class='bx bxs-edit'> สมัครงาน</i>
        </button>
    </div>
    <?php
    include('./config/db.php');

    if ($_GET) {
        $Job_ID = $_GET['Job_ID'];
        $query = mysqli_query($conn, "select * from job where Job_ID = '$Job_ID'");
    }
    while ($row = mysqli_fetch_assoc($query)) {
    ?>

        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">
                    <div class="Des">
                        <h2><b><?php echo $row['Job_Type']; ?></h2>
                        <hr>
                        <h4><b>รายละเอียดงาน</b></h4>
                        <h5><i class="fa-solid fa-briefcase"></i> รูปแบบงาน : <?php echo $row['Job_Result']; ?> </h5>
                        <h5><i class="fa-solid fa-person"></i> จำนวนที่รับ : <?php echo $row['Job_Amount']; ?> คน</h5>
                        <h5><i class="fa-solid fa-clock"></i> ชั่วโมงทำงาน : <?php echo $row['Job_Time']; ?> ชั่วโมง</h5>
                        <h5><i class="fa-solid fa-money-bills"></i> เงินเดือน : <?php echo $row['Job_Salary']; ?> บาท</h5>
                        <h5><i class="fa-solid fa-calendar-days"></i> วันหยุด : <?php echo $row['Job_Dayoff']; ?></h5>
                        <hr>
                        <h4><b>คุณสมบัติ </b></h4>
                        <h5><i class="fa-solid fa-venus-mars"></i> เพศ : <?php echo $row['Job_Gender']; ?></h5>
                        <h5><i class="fa-solid fa-person-circle-question"></i> อายุ(ปี) : <?php echo $row['Job_Age']; ?> ปีขึ้นไป</h5>
                        <h5><i class="fa-solid fa-graduation-cap"></i> ระดับการศึกษา : <?php echo $row['Job_Education']; ?></h5>
                        <hr>
                        <h4><b>หน้าที่รับผิดชอบ </b></h4>
                        <h5><i class="fa-solid fa-file-circle-exclamation"></i> คำอธิบาย : <?php echo $row['Job_Duty']; ?></h5>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="staticBackdrop" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable">
                <form method="POST" enctype="multipart/form-data" class="modal-content" style="width:120%;  height: 30vh;  padding:0 20px;">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="tit">
                        <h3 class="modal-title"> <b> ประเภทของผู้สมัครงาน</b></h3>
                    </div>

                    <div class="btn-post">
                        <a class="std" type="button" href="user_application.php?Job_ID=<?php echo $row['Job_ID'] ?>"><i class="fa-solid fa-graduation-cap"></i> <b>นักศึกษา</b></a>
                        <a class="general" type="button" href="user_appli_guest.php?Job_ID=<?php echo $row['Job_ID'] ?>"><i class="fa-solid fa-person"></i> <b>บุคลทั่วไป</b></a>
                    </div>
                </form>
            </div>
        </div>

    <?php
    }

    ?>
    <div class="card" style="width: 23rem;">
        <div class="card-body">
            <?php
            include('./config/db.php');

            if ($_GET) {
                $Job_ID = $_GET['Job_ID'];
                $query = mysqli_query($conn, "select * from job where Job_ID = '$Job_ID'");
            }
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <h4><b>ข้อมูลที่น่าสนใจ</h4>
                <h6>วันที่อัพเดต : <?php echo $row['Job_Date']; ?></h6>
                <h6>รับสมัคร : <?php echo $row['Job_Amount']; ?> อัตรา</h6>
        </div>
    <?php
            }
    ?>
    </div>


</body>

</html>