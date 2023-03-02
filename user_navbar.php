<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/user_navbar.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>



    <div class="header">
        <ul class="nav justify-content-center">
            <div class="item">
                <img src="./img/BayasitaD.png" alt="">
                <h3><b>สมัครพาร์ทไทม์</b></h3>
            </div>
        </ul>
    </div>

    <div id="navbar">
        <!-- <a class="active" href="javascript:void(0)">Home</a>
        <a href="javascript:void(0)">News</a>
        <a href="javascript:void(0)">Contact</a> -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./userpage.php">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ค้นหางาน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Contact</a>
                    </li>
                </ul>

                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link notifications"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
                    <div class="nav-item dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><?php echo $_SESSION['name']; ?><b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <a href="user_profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> โปรไฟล์</a></a>
                            <!-- <a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></a> -->
                            <a href="user_status.php" class="dropdown-item"><i class="fa fa-sliders"></i> ตรวจสอบสถานะ</a></a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item"><i class="fa-solid fa-arrow-right-from-bracket"></i> ออกจากระบบ</a></a>
                        </div>
                    </div>
                </div>

        </nav>

    </div>
    <?php
    //check session 
    if (isset($_SESSION['username'])) {
    } else {
        echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ กลับไปยังหน้าเข้าสู่ระบบก่อน')</script>";
        echo "<script>window.open('signin.php','_self')</script>";
    }

    ?>




    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>