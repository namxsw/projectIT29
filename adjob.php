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
  session_start();
  include "./config/db.php";
  if (isset($_POST["adjob"])) {
    $jobtopic = $_POST["topic"];
    $typejob = $_POST["jobtype"];
    $result = $_POST["jobresult"];
    $jobamount = $_POST["amount"];
    $time = $_POST["jobtime"];
    $salary = $_POST["jobsalary"];
    $jobdayoff = $_POST["dayoff"];
    $jobgender = $_POST["gender"];
    $jobage = $_POST["age"];
    $jobedu = $_POST["edu"];
    $jobduty = $_POST["duty"];
    // $jobpic = $_POST["pic"];
    // echo $jobtopic;
    // echo $typejob;
    // echo $result;
    // echo $jobamount;
    // echo $time;
    // echo $salary;
    // echo $jobdayoff;
    // echo $jobgender;
    // echo $jobage;
    // echo $jobedu;
    // echo $jobduty;



    if ($jobtopic != "" && $typejob != "" && $result != "" && $jobamount != "" && $time != ""  &&$salary != "" && $jobdayoff != "" && $jobgender != "" && $jobage != "" && $jobedu != "" && $jobduty != "") {

      $sql = "INSERT INTO `job`(`Job_Topic`, `Job_Type`, `Job_Result`, `Job_Amount`, `Job_Time`, `Job_Salary`, `Job_Dayoff`, `Job_Gender`, `Job_Age`, `Job_Education`, `Job_Duty`) VALUES ('$jobtopic','$typejob','$result','$jobamount','$time','$salary','$jobdayoff','$jobgender',' $jobage','$jobedu','$jobduty')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('กรอกสำเร็จ') </script>";
        echo "<script>window.location='adminpage.php'</script>";
      } else {
        echo "<script>alert('กรอกไม่สำเร็จ')</script>";
        
      }
    } else {
      echo "<script>alert('กรอกข้อมูลไม่ครบ')</script>";
      // echo $jobtopic.$typejob.$result.$jobamount.$time.$salary.$jobdayoff.$jobgender. $jobage.$jobedu.$jobduty;
      echo "<script>window.location='adminpage.php'</script>";
    }
  }

  ?>

  
</body>

</html>