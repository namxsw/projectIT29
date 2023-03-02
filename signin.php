<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="./css/signin.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    session_start();
    include "./config/db.php";
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = MD5($_POST["password"]);
        $sql = "SELECT * FROM user WHERE User_username = '$username' AND User_Password = '$password'";
        $result = mysqli_query($conn, $sql);
        $fRows = mysqli_fetch_row($result);
        $role = $fRows[16];
        $_SESSION['username'] = $fRows[1];
        $_SESSION['name'] = $fRows[3] . " " . $fRows[4];
        $_SESSION['tel'] = $fRows[5];
        $_SESSION['email'] = $fRows[6];
        $_SESSION['birthday'] = $fRows[7];
        if ($role == 1) {
            echo "<script>window.location='adminpage.php';</script>";
        }
        if ($role == 2) {
            echo "<script>window.location='userpage.php';</script>";
        } else {
            echo "<script>alert('บัญชีผู้ใช้งาน หรือ รหัสผ่านของคุณไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง'),window.location='signin.php';</script>";
        }
    }
    ?>

    <div class="back">
        <a href="./"><i class="fa-solid fa-angles-left"></i></a>
    </div>

    <div class="appeal-container">
        <div class="appeal-content">
            <div class="appeal-content-info">
                <form role="form" method="post">
                    <img src="./img/BayasitaD.png" alt="">
                    <h3><b>เข้าสู่ระบบ</h3>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-user"></i> </span>
                        <input type="text" name="username" class="form-control input_user" value="" placeholder="username">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="typepass" name="password" class="form-control input_pass" value="" placeholder="password">
                    </div>
                    <input type="checkbox" style="float: left;" onclick="Toggle()">
                    <b style="float: left; margin-left: 5px; margin-top: -5px;"> แสดงรหัสผ่าน</b><br><br>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <a href="./register.php" class="regis">สมัครสมาชิก</a>&nbsp;| &nbsp;<a href="forget.php" class="forget">ลืมรหัสผ่าน</a>
                        </div>

                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" name="login" class="btn btn-outline-primary">เข้าสู่ระบบ</button>
                    </div>
              
            </div>
        </div>
    </div>

    </form>
</body>


<!-- แสดงรหัสผ่าน -->
<script>
    function Toggle() {
        var pass = document.getElementById("typepass");
        if (pass.type === "password") {
            pass.type = "text";
        } else {
            pass.type = "password";

        }

    }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>