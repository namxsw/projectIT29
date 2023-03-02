<?php
    use PHPMailer\PHPMailer\PHPMailer;

    include("./config/db.php");

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE User_Email = '$email' ";
    $r = mysqli_query($conn, $query);

    if (empty($email)) {

        echo "Field is empty";
    } else {
        if (mysqli_num_rows($r) > 0) {

            $token = uniqid(md5(time()));

            $insert_query = "INSERT INTO forgot_password(email, token) VALUES('$email','$token')  ";
            $res = mysqli_query($conn, $insert_query);

            $to = $email;
            $subject = "Password Reset Link";
            $msg = 'Click <a href="http://localhost/project/reset.php?token=' . $token . ' "onclick="showresetpsw()" class="link" >here</a>  to reset your password';

            $message = "Email: " . $email . "\n\n" . " " . $msg;

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= "From: " . $email;}
    }
       
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "nka.pts150459@gmail.com"; // enter your email address
        $mail->Password = "kllbpimmpvdtbjbl"; // enter your password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        // $mail->Username = "marketrentalproject@gmail.com"; // enter your email address
        // $mail->Password = "dmziddrwoslowmmo"; // enter your password

       
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress($email); // Send to mail
        $mail->Subject = "Forgot password";
        $mail->Body = 'A request for forgot password has been made. If you have not made this request, please ignore this email. 
        If you have made this request, please click on the link below to reset your password. <br> 
        <a href="http://localhost/project/reset.php?token=' . $token . '"  > Reset Password </a>' ;

        if($mail->send()) {
            $status = "success";
            $response = "Email is sent";
        } else {
            $status = "failed";
            $response = "Something is wrong" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
