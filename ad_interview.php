<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>หน้าหลัก</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link rel="stylesheet" href="./css/checkapplicant.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- js datatable -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!-- css tadatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />

</head>

<body>
    <?php
    include "./ad_Slidebar.php";
    include "./script/alert.php"
    ?>

    <div class="container">
        <div style="height:10px;"></div>
        <div class="well" style="margin:auto; padding:auto; width:100%;">
            <span style="font-size:35px; color:#000">
                <center><strong>ข้อมูลการสัมภาษณ์ </strong></center>
            </span>
            <div class="appeal-container">
                <div class="appeal-content">
                    <div class="appeal-content-info">
                        <table id="myTable" class="display table table-striped dt-responsive " style="width:100%;">
                            <thead style="text-align: center;">
                                <th>วันสัมภาษณ์</th>
                                <th>เวลาสัมภาษณ์</th>

                                <th style="width: 180px;">ชื่อผู้สมัคร</th>
                                <th style="width: 180px;">นามสกุล</th>

                                <th>งานที่สมัคร</th>
                                <th>ผลการสัมภาษณ์</th>
                                <!-- <th>สถานะ</th> -->
                                <th>จัดการ</th>

                            </thead>
                            <tbody>
                                <?php
                                include('./config/db.php');

                                $query = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID) WHERE `interview_status`='รอสัมภาษณ์'");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo date("d/m/Y", strtotime($row['interview_date'])) ?></td>
                                        <td><?php echo date("h:i a", strtotime($row['interview_time'])) ?></td>
                                        <td><?php echo $row['Applicant_Fname']; ?></td>
                                        <td><?php echo $row['Applicant_Lname']; ?></td>

                                        <td><?php echo $row['Job_Type']; ?></td>
                                        <td>
                                            <?php echo  $row['interview_status']; ?>
                                        </td>
                                        <!-- <td><?php echo date("วันที่ d/m/Y เวลา h:i a", strtotime($row['Applicant_Date'])) ?></td> -->
                                        <!-- <td><?php echo $row['Status']; ?></td> -->
                                        <td>
                                            <a href="ad_interview.php ?denined_Applicant_ID= <?php echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-warning"><i class="fa-regular fa-circle-xmark"></i> ไม่ผ่าน</button></a>
                                            <a href="ad_interview.php ?Approved_Applicant_ID= <?php echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-success modal_data"><i class="fa-regular fa-circle-check"></i> ผ่าน</button></a>

                                        </td>

                                    </tr>
                                <?php
                                }

                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Modal -->
    <div id="staticBackdrop" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable">
            <!-- <form method="POST" action="./adjob.php" enctype="multipart/form-data" class="modal-content" style="width:220%;  height: 75vh;  padding:0 20px;"> -->
            <div class="modal-header">
                <h4 class="modal-title">ตรวจสอบข้อมูลผู้สมัคร</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


        </div>
    </div>
    <?php
    require "modal_interview.php";
    ?>
</body>
<script>
    // apply detail popup
    $(document).ready(function() {
        $('.modal_data').click(function() {
            var Applicant_ID = $(this).attr("id");
            $.ajax({
                url: "./interview.php",
                method: "POST",
                data: {
                    Applicant_ID: Applicant_ID
                },
                success: function(data) {
                    $('#bannerdetail').html(data);
                    $('#bannerdataModal').modal('show');
                }
            });

        })
    });
</script>
<?php
// denined interview
if (isset($_GET['denined_Applicant_ID'])) {
    $denined_Applicant_ID = $_GET['denined_Applicant_ID'];
    $denined_update = mysqli_query($conn, "UPDATE `applicant` SET `interview_status`='ไม่ผ่านการสัมภาษณ์' WHERE `Applicant_ID`= $denined_Applicant_ID") ;
    

    if ($denined_update) {
        echo "<script>alert('อัพเดทสถานะการสัมภาษณ์เสร็จสิ้น')</script>";
    
    } else {
        echo "<script>alert('ผิดพลาด กรุณาลองอีกครั้ง')</script>";
    }
}

// approved interview
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
    $emp_id = 'BY0' . $emp_Job. '0' . $emprow_for_id;

    $approved_update = mysqli_query($conn, "UPDATE `applicant` SET `interview_status`='ผ่านการสัมภาษณ์' WHERE `Applicant_ID`= $Approved_Applicant_ID");
    if ($approve_user =='ยืนยัน'){
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
    }else{
        
    }
}
?>

</html>