<!DOCTYPE html>
<html lang="en">

<head>
    <title>ตรวจสอบสถานะ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link rel="stylesheet" href="css/user_status.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
 
    <?php
    include "./user_navbar.php";
    include "./script/alert.php";
    ?>

</head>



<body>


    <div class="container">
        <div style="height:50px;"></div>
        <div class="well">
            <span style="font-size:35px; color:#000">
                <center><strong>ตรวจสอบสถานะ</strong></center>
            </span>
            <div class="appeal-container">
                <div class="appeal-content">
                    <div class="appeal-content-info">
                        <table id="myTable" class="display table table-striped dt-responsive " style="width:100%;">
                            <thead style="text-align: center;">
                                <th scope="col">งานที่สมัคร</th>
                                <th scope="col">สถานะ <br> การส่งเอกสาร</th>
                                <th scope="col">วันสัมภาษณ์</th>
                                <th scope="col">ผลการสัมภาษณ์</th>
                                <th scope="col">สถานะ</th>
                            </thead>
                            <tbody>
                                <?php
                                include('./config/db.php');
                                $User_username = $_SESSION['username'];
                                $query = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID) where User_username = '$User_username'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <td><?php echo $row['Job_Type']; ?></td>
                                    <td><?php echo $row['Status']; ?></td>
                                    <td>
                                        <?php
                                        if ($row['interview_date'] && $row['interview_time'] != "null") {
                                            echo 'วันที่ ' . date("d/m/Y", strtotime($row['interview_date'])) . ' เวลา ' . date("h:i a", strtotime($row['interview_time']));
                                        } else {
                                            echo '-';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $row['interview_status']; ?></td>
                                    <td style="text-align: center;"><?php
                                                                    if ($row['interview_status'] == 'ผ่านการสัมภาษณ์') {
                                                                        if ($row['approve_user'] == 'ยืนยัน' || $row['approve_user'] == 'ยกเลิก') {
                                                                            echo $row['approve_user'];
                                                                        } else {

                                                                    ?>

                                                <a href="user_status.php ?denined_Applicant_ID= <?php echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-warning"><i class="fa-regular fa-circle-xmark"></i> ยกเลิก</button></a>
                                                <a href="user_status.php ?Approved_Applicant_ID= <?php echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-success modal_data"><i class="fa-regular fa-circle-check"></i> ยืนยัน</button></a>
                                        <?php
                                                                        }
                                                                    } elseif ($row['interview_status'] == 'ไม่ผ่านการสัมภาษณ์') {
                                                                        echo "ไม่ผ่านการสัมภาษณ์";
                                                                    } else {

                                                                        echo "รอสัมภาษณ์";
                                                                    } ?>
                                    </td>

                            </tbody>
                        <?php
                                }
                        ?>
                        </table>
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
<?php
if (isset($_GET['Approved_Applicant_ID'])) {
    $Approved_Applicant_ID = $_GET['Approved_Applicant_ID'];
    $query_approved = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID) WHERE `Applicant_ID`= $Approved_Applicant_ID");
    $rowd = mysqli_fetch_array($query_approved);
    extract($rowd);
    $query_emp = mysqli_query($conn, "SELECT * FROM `employee`");
    $numRows = mysqli_num_rows($query_emp);
    $emprow_for_id =  $numRows + 1;

    $emp_Fname = $rowd['Applicant_Fname'];
    $emp_Lname = $rowd['Applicant_Lname'];
    $emp_Job = $rowd['Job_ID'];
    $emp_tel = $rowd['Applicant_Tel'];
    $emp_email = $rowd['Applicant_Email'];
    $emp_id = 'BY0' . $emp_Job . '0' . $emprow_for_id;


    $approved_update = mysqli_query($conn, "UPDATE `applicant` SET `approve_user`='ยืนยัน' WHERE `Applicant_ID`= $Approved_Applicant_ID");
    if ($approve_user == 'ยืนยัน') {
        if ($approved_update) {
            $add_employee = mysqli_query($conn, "INSERT INTO `employee`(`emp_id`, `emp_Fname`, `emp_Lname`, `emp_Job`, `emp_tel`, `emp_email`) VALUES ('$emp_id','$emp_Fname','$emp_Lname', '$emp_Job','$emp_tel','$emp_email')");

            if ($add_employee) {

                echo "<script>alert('อัพเดทสถานะการสัมภาษณ์เสร็จสิ้น')</script>";
            } else {
                echo "<script>alert('ผิดพลาด กรุณาลองอีกครั้ง2 $emp_id,$emp_Fname,$emp_Lname, $emp_Job, $emp_tel, $emp_email')</script>";
            }
        } else {
            echo "<script>alert('ผิดพลาด กรุณาลองอีกครั้ง1')</script>";
        }
    } else {
    }
}

if (isset($_GET['denined_Applicant_ID'])) {
    $denined_Applicant_ID = $_GET['denined_Applicant_ID'];
    $denined_update = mysqli_query($conn, "UPDATE `applicant` SET `approve_user`='ยกเลิก' WHERE `Applicant_ID`= $denined_Applicant_ID");
}

?>

</html>