<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีเซ็ตรหัสผ่าน</title>
    <link rel="stylesheet" href="css/forget.css">
    <link rel="icon" type="image/png" href="./img/BayasitaD.png">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f79b1eaf.js" crossorigin="anonymous"></script>
</head>

<?php
require "./reset-password.php";
?>

<body>
 <!-- ปุ่มย้อนกลับ -->
    <div class="back">
        <a href="./"><i class="fa-solid fa-angles-left"></i></a>
    </div>


    <?php
    include("./config/db.php");
    if (isset($_GET['token'])) {
        $token = $_GET['token'];
        $query = "SELECT * FROM forgot_password WHERE token = '$token' ";
        $r = mysqli_query($conn, $query);

        if (mysqli_num_rows($r) > 0) {

            $row = mysqli_fetch_array($r);
            $email = $row['email'];
        }
    }

    ?>

    <!-- กรอบ -->
    <div id="reset">
        <div class="appeal-container">
            <div class="appeal-content">
                <div class="appeal-content-info">
                    <div class="resetpsw">
                        <img src="./img/BayasitaD.png">
                        <h3><b>รีเซตรหัสผ่าน</h3>
                        <h6>ใส่รหัสผ่านของคุณ :</h6>
                        <div class="reset-psw ">
                            <form method="POST">
                                <!-- อีเมล -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-regular fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control reset-input" value="<?php echo $email; ?>">
                                </div>
                                <!-- รหัสผ่านใหม่ -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control reset-input" placeholder="รหัสผ่านใหม่">
                                </div>
                                <!-- ยืนยันรหัสผ่านใหม่ -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" name="cfpassword" id="cfpassword" class="form-control reset-input" placeholder="ยืนยันรหัสผ่านใหม่ ">
                                </div>

                                <!-- <div class="d-grid gap-2 mt-3">
                                    <button type="submit" name="submit-resetpsw" id="submit-resetpsw" class="btn btn-outline-success">รีเซ็ตรหัสผ่าน</button>
                                </div> -->
                                <input class="input submit btn btn-outline-success w-100" type="submit" name="submit-resetpsw" value="รีเซตรหัสผ่าน">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            ("#resetpsw").on('submit', function(c) {

                c.preventDefault();
                var email = $("#email").val();
                var password = $("#password").val();
                var cfpassword = $("#cfpassword").val();

                $.ajax({

                    type: "POST",
                    url: "reset_password.php",
                    data: {
                        email: email,
                        password: password,
                        cfpassword: cfpassword
                    },

                    success: function(date) {
                        $(".form-message").css("display", "block");
                        $(".form-message").html(date);
                    }
                });
            });

        });
    </script>


</html>