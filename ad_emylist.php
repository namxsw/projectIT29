<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>รายชื่อพนักงาน</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link rel="stylesheet" href="./css/checkapplicant.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body>
    <?php
    include "./ad_Slidebar.php";
    include "./script/alert.php"
    ?>

    <tbody>
        <div class="container">
            <div style="height:10px;"></div>
            <div class="well" style="margin:auto; padding:auto; width:100%;">
                <span style="font-size:35px; color:#000">
                    <center><strong>รายชื่อพนักงาน </strong></center>
                </span>
                <div class="appeal-container">
                    <div class="appeal-content">
                        <div class="appeal-content-info">
                            <table id="myTable" class="display table table-striped dt-responsive " style="width:100%;">

                                <thead style="text-align: center;">
                                    <th style="width: 90px;">รหัสพนักงาน</th>
                                    <th style="width: 120px;">ชื่อ</th>
                                    <th style="width: 120px;">สกุล</th>
                                    <th style="width: 100px;">หน้าที่</th>
                                    <th>เบอร์โทร</th>
                                    <th style="width: 150px;">อีเมล</th>
                                    <th>เรทติ้ง</th>
                                    <th>แก้ไข / ลบ</th>

                                </thead>
                                <tbody>
                                    <?php
                                    include('./config/db.php');

                                    $query = mysqli_query($conn, "SELECT `employee`.*,job.Job_Type from employee join job on (employee.emp_Job= job.Job_ID)");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['emp_id']; ?></td>
                                            <td><?php echo $row['emp_Fname']; ?></td>
                                            <td><?php echo $row['emp_Lname']; ?></td>
                                            <td><?php echo $row['Job_Type']; ?></td>
                                            <td><?php echo $row['emp_tel']; ?></td>
                                            <td><?php echo $row['emp_email']; ?></td>
                                            <td><?php echo $row['emp_rating']; ?></td>
                                            <td style="text-align: center;">
                                                <a href="ad_stdInfo.php ?Applicant_ID= <?php echo $row['emp_id'] ?>"><button type="button" class="btn btn-outline-info"><i class="fa-regular fa-pen-to-square"></i> แก้ไข</button></a>
                                                <a href="ad_emylist.php ?del_Applicant_ID= <?php echo $row['emp_id'] ?>"><button type="button" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i> ลบ</button></a>
                                            </td>

                                        </tr>
                                    <?php
                                    }

                                    ?>
                                </tbody>
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

</body>

</html>