<?php
include('./config/db.php');
if(isset($_POST['Applicant_ID'])){
    $Applicant_ID = $_POST['Applicant_ID'];
    $approve = mysqli_query ($conn," SELECT * FROM `applicant` WHERE Applicant_ID = $Applicant_ID");
    $output = '';
    while ($row = mysqli_fetch_array($approve)) {
        $output .= '
        <input type="text" name="Applicant_ID" class="form-control" value="'. $row['Applicant_ID'] .'" hidden>
        <div class="mt-3 mb-1">วันที่นัดสัมภาษณ์</div>
        <input type="date" id="meeting-time" name="interview_date" class="form-control"  value="'. $row['interview_date'] .'">
        <div class="mt-3 mb-1">เวลานัดสัมภาษณ์</div>
        <input type="time" id="meeting-time" name="interview_time" class="form-control"  value="'. $row['interview_time'] .'">
    ';
}
echo $output;
}


?>