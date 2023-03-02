<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>หน้าหลัก</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/Home.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <ul class="nav justify-content-center">
        <li class="item">
            <img src="./img/BayasitaD.png" alt="">
        </li>
        <li class="item">
            <h2>สมัครพาร์ทไทม์ <br> โรงแรมบายาสิตา@KKU</h2>
        </li>
    </ul>


    
    </nav>

    <ul class="nav justify-content-center" style=" background-color: #97372f; height: 50px;">
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" href="./userpage.php">หน้าหลัก</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" href="#">ค้นหางาน</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" style="color: #fff;" href="#">แบบทดสอบ </a>
        </li>
    </ul>



    <h3></h3>

    <tbody>
        <?php
        include('./config/db.php');

        if ($_GET){
            $Job_ID = $_GET['Job_ID'];
            $query = mysqli_query($conn, "select * from job where Job_ID = '$Job_ID'");
        }
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <tr>
                <div class="post">
                    <h2>รับสมัครงาน: <td><?php echo $row['Job_Type']; ?></td></h2>
                    <h2> รายละเอียดงาน</h2>
                    <h6> รูปแบบงาน:<td><?php echo $row['Job_Result']; ?></td></h6>
                    <h6>จำนวนที่รับ:<td><?php echo $row['Job_Amount']; ?></td>ตำแหน่ง</h6>
                    <h6>ชั่วโมงทำงาน:<td><?php echo $row['Job_Time']; ?></td></h6>
                    <h6>วันหยุด:<td><?php echo $row['Job_Dayoff']; ?></td></h6>
                    <h6> เงินเดือน:<td><?php echo $row['Job_Salary']; ?></td></h6>
                    <h2>คุณสมบัติ</h2>
                    <h6>เพศ:<td><?php echo $row['Job_Gender']; ?></td></h6>
                    <h6>อายุ:<td><?php echo $row['Job_Age']; ?></td>ปี</h6>
                    <h6> ระดับการศึกษา:<td><?php echo $row['Job_Education']; ?></td></h6>
                    <h2>หน้าที่รับผิดชอบ</h<h6>
                    <h6><td><?php echo $row['Job_Duty']; ?></td></h6>



                </div>
            </tr>
        <?php
        }

        ?>
        <a href="./forms.php">คลิกที่นี่เพื่อสมัคร</a>
       
    </tbody>


</body>

</html>