<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ตรวจสอบข้อมูลผู้สมัคร</title>
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


</head>


<body>
    <?php
    include "./ad_Slidebar.php";
    include "./script/alert.php";
    ?>

    <div class="container">
        <div style="height:10px;"></div>
        <div class="well" style="margin:auto; padding:auto; width:100%;">
            <span style="font-size:35px; color:#000">
                <center><strong>ตรวจสอบข้อมูลผู้สมัคร </strong></center>
            </span>
            <div class="appeal-container">
                <div class="appeal-content">
                    <div class="appeal-content-info">
                        <table id="myTable" class="display table table-striped dt-responsive " style="width:100%;">
                            <thead style="text-align: center;">
                                <th style="width: 100px ;">ชื่อ</th>
                                <th style="width: 100px;">นามสกุล</th>
                                <th style="width: 100px;">งานที่สมัคร</th>
                                <th style="width: 120px;">เวลาส่งใบสมัคร</th>
                                <th>สถานะ</th>
                                <th>วันสัมภาษณ์</th>
                                <th>จัดการ</th>
                                <th>ผลการสัมภาษณ์</th>
                                <th>ผลการสมัคร</th>

                            </thead>
                            <tbody>
                                <?php
                                include('./config/db.php');

                                $query = mysqli_query($conn, "select applicant.* ,job.Job_Type from applicant join job on (applicant.Job_id= job.Job_ID)");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Applicant_Fname']; ?></td>
                                        <td><?php echo $row['Applicant_Lname']; ?></td>

                                        <td><?php echo $row['Job_Type']; ?></td>
                                        <td><?php echo date("d/m/Y h:i a", strtotime($row['Applicant_Date'])) ?></td>
                                        <td><?php echo $row['Status']; ?></td>
                                        <td>
                                            <?php
                                            if ($row['interview_date'] && $row['interview_time'] != "null") {
                                                echo 'วันที่ ' . date("d/m/Y", strtotime($row['interview_date'])) . '</br> เวลา ' . date("h:i a", strtotime($row['interview_time']));
                                            } else {
                                                echo '-';
                                            }
                                            ?>
                                        </td>

                                        <td>
                                            <a href="ad_stdInfo.php ?Applicant_ID=<?php echo $row['Applicant_ID'] ?>"><button type="button" class="btn btn-outline-warning"><i class="fa-solid fa-user-check"></i> ตรวจสอบ</button></a> 
                                            <button type="button" class="btn btn-outline-success modal_data" id="<?php echo $row['Applicant_ID'] ?>"><i class="fa-solid fa-calendar-plus"></i> นัดสัมภาษณ์</button>
                                        </td>
                                        
                                        <td>
                                            <?php echo  $row['interview_status']; ?>
                                        </td>

                                        <td><?php
                                            if ($row['approve_user'] == 'ยกเลิก') {
                                                echo "สละสิทธิ";
                                            } else {
                                                echo $row['approve_user'];
                                            } ?></td>


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
</body>

</html>