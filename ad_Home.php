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
<body>
    
<?php
    include "./ad_Slidebar.php";
    ?>

    <div id="content">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/baya.jpg" class="d-block w-100" alt="baya">
                </div>
                <div class="carousel-item">
                    <img src="./img/baba.jpg" class="d-block w-100" alt="image">
                </div>
                <div class="carousel-item">
                    <img src="./img/baya.jpg" class="d-block w-100" alt="1">
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
            <h2>ประกาศข่าวสาร </h2>
        </div>
        <div id="line"></div>
    </div>

    
    <button id="addbn" type="button" class="btn btn-danger rigth" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <i class='bx bxs-edit'>สร้างประกาศ</i>
    </button>
    

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                
                <h5>พนักงานเดลิเวอรี่ Part-Time จำนวน 5 ตำแหน่ง</h5>
                <p class="section-ap">ส่งอาหารบริเวณมหาวิทยาลัยขอนแก่น</p>
                <p class="con-ap">วุฒิการศึกษา : อิอิ</p>
                <p class="con-ap">เงินเดือน :</p>
                <button class="btn-detail" type="button">รายละเอียดงาน</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="staticBackdrop" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-scrollable">
            <form method="POST" enctype="multipart/form-data" class="modal-content" style="width:220%;  height: 75vh;  padding:0 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">สร้างประกาศ</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="inputct">
                    <!-- <h6>หัวข้อ:</h6> -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">หัวข้อ</span>
                        <input type="text" name="ct1_fname" class="form-control " placeholder="ชื่อ" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">ประเภทงาน</span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เลือกประเภทงาน</option>
                            <option value="1">พนักงานเดลิเวอรี่</option>
                            <option value="2">พนักงานต้อนรับ</option>
                            <option value="3">พนักงานเสิร์ฟอาหาร</option>
                        </select>
                    </div>

                    <div class="inputct">
                        <h6>รายละเอียดงาน:</h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">รูปแบบงาน</span>
                            <input type="text" name="ct1_fname" class="form-control" placeholder="Ex.พาร์ทไทม์" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">จำนวนที่รับ</span>
                            <input type="text" name="ct1_lname" class="form-control" placeholder="Ex. 5คน" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ชั่วโมงทำงาน</span>
                        <input type="text" name="ct1_fname" class="form-control" placeholder="Ex. 8ชั่วโมง" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">เงินเดือน</span>
                        <input type="text" name="ct1_lname" class="form-control" placeholder="เงินเดือน(บาท)" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">วันหยุด</span>
                        <input type="text" name="ct1_lname" class="form-control" placeholder="Ex.วันจันทร์" aria-describedby="basic-addon1">
                    </div>

                    <div class="inputct">
                        <h6>คุณสมบัติ:</h6>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">เพศ</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เลือกเพศ</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                                <option value="3">ไม่ระบุ</option>
                            </select>
                            <span class="input-group-text" id="basic-addon1">อายุ</span>
                            <input type="text" name="ct1_lname" class="form-control" placeholder="อายุ(ปี)" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">ระดับการศึกษา</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เลือกการศึกษา</option>
                                <option value="1">ม.6</option>
                                <option value="2">ปวช.</option>
                                <option value="3">ปวส.</option>
                                <option value="4">ปริญญาตรี</option>
                            </select>
                        </div>
                    </div>

                    <div class="inputct">
                        <h6>หน้าที่รับผิดชอบ:</h6>
                        <div class="inputct">
                            <div class="input-group mb-3">
                                <textarea name="ct1_fname" class="form-control" placeholder="เพิ่มข้อความที่นี่" aria-describedby="basic-addon1" cols="50" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="inputct">
                            <h6>รูปภาพ:</h6>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" name="ct_logo">
                            </div>
                        </div>
                        <div class="btn-post">
                            <div class="d-grid gap-2 ">
                                <button class="btn btn-primary " type="submit"><b>โพสต์</b></button>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</body>
</html>