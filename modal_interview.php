<?php
include('./config/db.php');
if(isset($_POST['save-data'])){
    $Applicant_ID = $_POST['Applicant_ID'];
    $interview_date = $_POST['interview_date'];
    $interview_time = $_POST['interview_time'];
   
    $approve = mysqli_query ($conn," UPDATE `applicant` SET`interview_date`=' $interview_date',`interview_time`='$interview_time', `interview_status`='รอสัมภาษณ์' WHERE Applicant_ID = '$Applicant_ID'");
    // $approve = mysqli_query ($conn," UPDATE `applicant` SET interview_date=' $interview_date',interview_time= $interview_time  WHERE Applicant_ID = '$Applicant_ID'");
    if ($approve){
        echo "<script>alert('นัดวันสัมภาษณ์สำเร็จ')</script>";
    }else{
        echo "<script>alert('ผิดพลาด1')</script>";
    }
}
?>
<div class="modal fade" id="bannerdataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">กรอกวันที่สำหรับนัดวันสัมภาษณ์งาน</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post">
                <div class="modal-body" id="bannerdetail">


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="save-data">บันทึกข้อมูล</button>
                </div>
            </form>
        </div>
    </div>
</div>