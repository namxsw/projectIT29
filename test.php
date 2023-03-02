<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์</title>
    <link rel="stylesheet" href="./css/test.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
include "./user_navbar.php";
?>

<body>


    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <?php
                include('./config/db.php');
                $user = $_SESSION['username'];
                $query = mysqli_query($conn, "select * from user  WHERE `User_username`='$user'");
                while ($row = mysqli_fetch_array($query)) {
                }
                ?>
                <div class="profileUser">
                    <img src="./img/<?php echo $row['PIC']; ?>" width="120px" height="160px">
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
                        <input type='file' name="upload">
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
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">ชื่อ :</label>
                            <input type="text" class="form-control" name="firstname" aria-describedby="fitstname">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlInput1" class="form-label">นามสกุล :</label>
                            <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                        </div>
                    </div>




</body>

</html>