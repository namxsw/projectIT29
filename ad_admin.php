<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/ad_admin.css">
	<title>แอดมิน</title>
	<link rel="icon" type="image/png" href="./img/BayasitaD.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>


<body>

	<?php
	include "./ad_Slidebar.php";
	include "./script/alert.php"
	?>


	<tbody>
		<div class="container">
			<div style="height:90px;"></div>
			<div class="well" style="margin:auto; padding:auto; width:100%;">
				<span style="font-size:35px; color:#000">
					<center><strong>แอดมิน </strong></center>
				</span>
				<!-- <span class="add"><a href="./ad_admininfo.php" data-toggle="modal" class="btn btn-outline-primary ml-5"><i class="fa-solid fa-plus"></i>เพิ่มแอดมิน</a></span> -->
				<div class="appeal-container">
					<div class="appeal-content">
						<div class="appeal-content-info">
							<table id="myTable" class="display table table-striped dt-responsive " style="width:100%;">
								<span class="add"><a href="./ad_admininfo.php" data-toggle="modal" class="btn btn-primary ml-5"><i class="fa-solid fa-plus"></i>เพิ่มแอดมิน</a></span>

								<thead style="text-align: center;">
									<th scope="col">ชื่อผู้ใช้</th>
									<th scope="col">ชื่อ</th>
									<th scope="col">นามสกุล</th>
									<th scope="col">อีเมล</th>
									<th scope="col">สถานะ</th>
									<th>จัดการ</th>

								</thead>
								<tbody>
									<?php
									include "./config/db.php";

									$query = mysqli_query($conn, "select * from user ,usertype where user.Usertype_Id=1 and usertype.UserType_Id=1");
									while ($row = mysqli_fetch_array($query)) {
									?>
										<tr>
											<td><?php echo $row['User_username']; ?></td>
											<td><?php echo $row['User_Fname']; ?></td>
											<td><?php echo $row['User_Lname']; ?></td>
											<td><?php echo $row['User_Email']; ?></td>
											<td><?php echo $row['UserType_Name']; ?></td>
											<td style="text-align: center;">
												<!-- แก้ไข -->
												<a type="button" style="width: 120px;" class="btn btn-outline-warning" href="./editadminform.php?User_id=<?php echo $row['User_id']; ?>" onclick="return confirm('คุณต้องการแก้ไขใช่หรือไม่')">แก้ไข</a>
												<!-- ลบ -->
												<a type="button" style="width: 120px;" class="btn btn-outline-danger" href="./delete_admin.php?User_id=<?php echo $row['User_id']; ?>" onclick="return confirm('คุณต้องการลบใช่หรือไม่')">ลบ</a>
											</td>

										</tr>
									<?php
									}

									?>
								</tbody>
							</table>
						</div>
						<?php
						//check session 
						if (isset($_SESSION['username'])) {
						} else {
							echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ กลับไปยังหน้าเข้าสู่ระบบก่อน')</script>";
							echo "<script>window.open('signin.php','_self')</script>";
						}

						?>
					</div>

</body>

</html>