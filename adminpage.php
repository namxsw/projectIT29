<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="./css/ad_Home.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
include "./ad_Slidebar.php";
?>

<body onload="typesalary(event)">

    <div id="content">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img1.jpg" class="d-block w-100" alt="baya">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="tt">
            <h2><b>ประกาศข่าวสาร </h2></b>
        </div>
        <div id="line"></div>
    </div>

    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-square-plus"></i> สร้างประกาศ</button>

    <div class="pp">
        <?php
        include('./config/db.php');
        $query = mysqli_query($conn, "select * from job");
        while ($row = mysqli_fetch_array($query)) {
        ?>
    </div>

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <tr>
                    <div class="post">

                        <div class="dropdown-center">
                            <div class="project-box-header float-end " type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                <li>
                                    <a class="edit text-decoration-none p-3"><i class='fa-solid fa-file-pen me-2'></i> แก้ไขโพสต์</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="del text-decoration-none p-3" href="./delete_post.php?Job_ID=<?php echo $row['Job_ID']; ?>" onclick="return confirm('คุณต้องการลบใช่หรือไม่')"> <i class='fa-solid fa-trash-can me-2'></i>ลบโพสต์</a>

                                </li>
                            </ul>
                        </div>

                        <p class="section-ap"><b>
                                <td><?php echo $row['Job_Type']; ?></td>
                        </p></b>

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
            </div>
        </div>
    </div>
<?php
        }

?>
<!-- Modal -->
<div id="staticBackdrop" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable">
        <form method="POST" action="./adjob.php" enctype="multipart/form-data" class="modal-content" style="width:200%;  height: 82vh;  padding:0 20px;">
            <div class="modal-header">
                <h4 class="modal-title">สร้างประกาศ</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="inputct">
                <!-- <h6>หัวข้อ:</h6> -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">หัวข้อ</span>
                    <input type="text" name="topic" class="form-control " placeholder="ชื่อ" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1">ประเภทงาน</span>
                    <select class="form-select" name="jobtype" aria-label="Default select example">
                        <option selected>เลือกประเภทงาน</option>
                        <option value="พนักงานเดลิเวอรี่">พนักงานเดลิเวอรี่</option>
                        <option value="พนักงานต้อนรับ">พนักงานต้อนรับ</option>
                        <option value="พนักงานเสิร์ฟอาหาร">พนักงานเสิร์ฟอาหาร</option>
                    </select>
                </div>

                <div class="inputct">
                    <h6>รายละเอียดงาน:</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">รูปแบบงาน</span>
                        <select class="form-select" id="selecttype" name="jobresult" aria-label="Default select example" onchange="typesalary(event)">
                            <!-- <option selected></option> -->
                            <option value="Part-time">Part-time</option>
                            <option value="Full-time">Full-time</option>
                        </select>
                        <span class="input-group-text" id="basic-addon1">จำนวนที่รับ</span>
                        <select class="form-select" name="amount" aria-label="Default select example">
                            <option selected></option>
                            <option value="1 ">1 คน</option>
                            <option value="2 ">2 คน</option>
                            <option value="3 ">3 คน</option>
                            <option value="4 ">4 คน</option>
                            <option value="5 ">5 คน</option>
                            <option value="6 ">6 คน</option>
                            <option value="7 ">7 คน</option>
                            <option value="8 ">8 คน</option>
                            <option value="9 ">9 คน</option>
                            <option value="10 ">10 คน </option>

                        </select>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">ชั่วโมงทำงาน</span>
                    <select class="form-select" name="jobtime" aria-label="Default select example">
                        <option selected></option>
                        <option value="1 ">1 ชั่วโมง</option>
                        <option value="2 ">2 ชั่วโมง</option>
                        <option value="3 ">3 ชั่วโมง</option>
                        <option value="4 ">4 ชั่วโมง</option>
                        <option value="5 ">5 ชั่วโมง</option>
                        <option value="6 ">6 ชั่วโมง</option>
                        <option value="7 ">7 ชั่วโมง</option>
                        <option value="8 ">8 ชั่วโมง</option>
                        <option value="9 ">9 ชั่วโมง</option>
                        <option value="10 ">10 ชั่วโมง</option>
                    </select>

                    <span class="input-group-text" id="pttext">ค่าจ้าง part-time</span>
                    <input type="number" id="pt" name="" class="form-control" placeholder="ค่าจ้าง(บาท)" min="1" max="1000000" aria-describedby="basic-addon1">
                    <span class=" input-group-text" id="pttext2">บาท(ต่อชั่วโมง)</span>

                    <span class="input-group-text" id="fttext">เงินเดือน</span>
                    <input type="number" id="ft" name="" class="form-control" placeholder="เงินเดือน(บาท)" min="1" max="1000000" aria-describedby="basic-addon1">
                    <span class=" input-group-text" id="fttext2">บาท</span>

                    <span class="input-group-text" id="basic-addon1">วันหยุด</span>
                    <input type="text" name="dayoff" class="form-control" placeholder="Ex.วันจันทร์" aria-describedby="basic-addon1">
                </div>

                <div class="input-group">
                <input type="number" class="form-control" name="sRent" placeholder="กรุณากรอกจำนวนที่ต้องการเป็นตัวเลข" required value="<?php echo $s['sRent'] ?>">
                <select class="input-group-text" name="sPayRange" required>
                    <!-- <option</option> -->
                    <option value="บาท/วัน">บาท/วัน</option>
                    <option value="บาท/เดือน">บาท/เดือน</option>
                </select>
            </div>

                <div class="inputct">
                    <h6>คุณสมบัติ:</h6>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">เพศ</span>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option selected>เลือกเพศ</option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                            <option value="ไม่ระบุ">ไม่ระบุ</option>
                        </select>
                        <span class="input-group-text" id="basic-addon1">อายุ</span>
                        <input type="text" name="age" class="form-control" placeholder="อายุ(ปี)" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">ระดับการศึกษา</span>
                        <select class="form-select" name="edu" aria-label="Default select example">
                            <option selected>เลือกการศึกษา</option>
                            <option value="ม.6">ม.6</option>
                            <option value="ปวช">ปวช.</option>
                            <option value="ปวส">ปวส.</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ไม่จำกัดวุฒิ">ไม่จำกัดวุฒิ</option>
                        </select>
                    </div>
                </div>

                <div class="inputct">
                    <h6>หน้าที่รับผิดชอบ:</h6>
                    <div class="inputct">
                        <div class="input-group mb-3">
                            <textarea name="duty" class="form-control" placeholder="เพิ่มข้อความที่นี่" aria-describedby="basic-addon1" cols="50" rows="6"></textarea>
                        </div>
                    </div>
                    <script>
                        function typesalary() {
                            var x = document.getElementById("selecttype").value
                            if (x == 'Part-time') {
                                document.getElementById("pttext").style.display = "block";
                                document.getElementById("pttext2").style.display = "block";
                                document.getElementById("pt").style.display = "block";
                                document.getElementById("fttext").style.display = "none";
                                document.getElementById("fttext2").style.display = "none";
                                document.getElementById("ft").style.display = "none";
                                document.getElementById('pt').name = 'jobsalary';
                                document.getElementById('ft').name = 'jobsalary2';
                            } else {
                                document.getElementById("pttext").style.display = "none";
                                document.getElementById("pttext2").style.display = "none";
                                document.getElementById("pt").style.display = "none";
                                document.getElementById("fttext").style.display = "block";
                                document.getElementById("fttext2").style.display = "block";
                                document.getElementById("ft").style.display = "block";
                                document.getElementById('pt').name = 'jobsalary2';
                                document.getElementById('ft').name = 'jobsalary';
                            }
                        }
                    </script>

                    <!-- <div class="inputct">
                            <h6>รูปภาพ:</h6>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="ct_logo">
                            </div>
                        </div> -->
                    <div class="btn-post">
                        <div class="d-grid gap-2 ">
                            <button class="btn btn-primary " name="adjob" type="submit"><b>โพสต์</b></button>
                        </div>
                    </div>
        </form>
    </div>
</div>
</body>

</html>