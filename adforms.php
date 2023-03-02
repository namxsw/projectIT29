<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>

<body>
  <?php

  include "./config/db.php";
  if (isset($_POST["addwork"])) {
    $gender = $_POST["gen"];
    $card = $_POST["cardid"];
    $firstname = $_POST["fname"];
    $pref = $_POST["prefix"];
    $lastname = $_POST["lname"];
    $email = $_POST["mail"];
    $birthday = $_POST["bd"];
    $address = $_POST["ad"];
    $tell = $_POST["tel"];
    // $jobtype = $_POST["type"];
    $factculty = $_POST["fact"];
    $dept = $_POST["deptt"];
    $classs = $_POST["class"];
    $Job_ID = $_POST["Job_ID"];
    $User_username=$_SESSION['username'];
    // $education = $_FILES ["File"]['name'];

    // ไฟล์ภาพ1
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = (mt_rand());
    $filetmp = $_FILES['File']['tmp_name'];
    $fileoldname = strrchr($_FILES['File']['name'], ".");
    $filename = $date . $numrand . $fileoldname;
    $filetype = $_FILES['File']['type'];
    $education = $filename;
    $filepath = './img/' . $filename;
    
    $filetmp2 = $_FILES['File1']['tmp_name'];
    $fileoldname2 = strrchr($_FILES['File1']['name'], ".");
    $filename2 = $date . $numrand . $fileoldname2;
    $filetype2 = $_FILES['File1']['type'];
    $education2 = $filename2;
    $filepath2 = './img/' . $filename2;


    if ($gender != "" && $card != "" && $firstname != "" && $pref != "" && $lastname != "" && $email != "" && $birthday != "" && $address != "" && $tell != ""  && $factculty != "" && $dept != "" && $classs != "" && $education != "" && $education2 !="") {

      $sql = "INSERT INTO `applicant`( `Applicant_Gender`, `Applicant_Cardid`, `Applicant_Fname`, `Applicant_Prefix`, `Applicant_Lname`, `Applicant_Email`, `Applicant_Birthday`, `Applicant_Address`, `Applicant_Tel`, `Applicant_Fact`, `Applicant_Dept`, `Applicant_Class`, `Applicant_Education`,`Applicant_Education2`,`Applicant_Grade`,`Applicant_Yearend`,`Applicant_Type`,`User_username`,`Job_ID`)
      VALUES ('$gender','$card','$firstname','$pref','$lastname','$email','$birthday','$address','$tell','$factculty','$dept','$classs','$education','$education2','-','-','1','$User_username','$Job_ID')";
      echo $sql;
      $result = mysqli_query($conn, $sql);
      if ($result) {
        move_uploaded_file($filetmp, $filepath);
        move_uploaded_file($filetmp2, $filepath2);
        // echo '<meta http-equiv="refresh" content="1";  />';
        echo "<script>alert('สมัครสำเร็จ') </script>";
        echo "<script>window.location='userpage.php'</script>";
      
      } else {
        echo "<script>alert('สมัครไม่สำเร็จ')</script>";
      }
    } else {
      echo "<script>alert('กรอกข้อมูลไม่ครบ1')</script>";
      echo "<script>window.location='user_application.php'</script>";
    }
  }

  if (isset($_POST["addnormal"])) {
    $gender = $_POST["gen"];
    $card = $_POST["cardid"];
    $firstname = $_POST["fname"];
    $pref = $_POST["prefix"];
    $lastname = $_POST["lname"];
    $email = $_POST["mail"];
    $birthday = $_POST["bd"];
    $address = $_POST["ad"];
    $tell = $_POST["tel"];
    $jobtype = $_POST["jobtype"];
    $grad = $_POST["grade"];
    $year = $_POST["yearend"];
    // ไฟล์ภาพ
    date_default_timezone_set('Asia/Bangkok');
    $date = date("Ymd");
    $numrand = (mt_rand());

    $filetmp = $_FILES['File']['tmp_name'];
    $fileoldname = strrchr($_FILES['File']['name'], ".");
    $filename = $date . $numrand . $fileoldname;
    $filetype = $_FILES['File']['type'];
    $education = $filename;
    $filepath = './img/' . $filename;

    // echo "gender".$gender."card".$card."firstname".$firstname."pref".$pref."lastname".$lastname."email".$email."birthday".$birthday."address".$address."tell".$tell."jobtype".$jobtype."grad".$grad."year".$year."";


    if ($gender != "" && $card != "" && $firstname != "" && $pref != "" && $lastname != "" && $email != "" && $birthday != "" && $address != "" && $tell != "" && $jobtype != ""  && $education != ""  && $grad != "" && $year != "") {

      $sql = "INSERT INTO `applicant`( `Applicant_Gender`, `Applicant_Cardid`, `Applicant_Fname`, `Applicant_Prefix`, `Applicant_Lname`, `Applicant_Email`, `Applicant_Birthday`, `Applicant_Address`, `Applicant_Tel`, `Applicant_Jobtype`, `Applicant_Fact`, `Applicant_Dept`, `Applicant_Class`, `Applicant_Education`,`Applicant_Grade`,`Applicant_Yearend`,`Applicant_Type`) 
      VALUES ('$gender','$card','$firstname','$pref','$lastname','$email','$birthday','$address','$tell','$jobtype','-','-','-','$education' ,'$grad','year','2')";
      echo $sql;
      $result = mysqli_query($conn, $sql);
      if ($result) {
        move_uploaded_file($filetmp, $filepath);
        echo "<script>alert('สมัครสำเร็จ') </script>";
        echo "<script>window.location='userpage.php'</script>";
      } else {
        echo "<script>alert('สมัครไม่สำเร็จ')</script>";
      }
    } else {
      echo "<script>alert('กรอกข้อมูลไม่ครบ2')</script>";
      echo "<script>window.location='user_appli_guest.php'</script>";
    }
  }

  ?>


</body>


</html>