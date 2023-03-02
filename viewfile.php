<html>
<head>
<title></title>
</head>
<body>
<?php
 
 include('./config/db.php');
 $query = mysqli_query($conn, "select * from applicant");
 
?>
<table width="200" border="1">
<tr>
<th width="50"> <div align="center">Files ID </div></th>
<th width="150"> <div align="center">Files Name </div></th>
</tr>
<?php
	while($objResult = mysql_fetch_array($query))
	{
?>
<tr>
<td><div align="center"><?php echo $objResult["FilesID"];?></div></td>
<td><center><a href="myfile/<?php echo $objResult["FilesName"];?>"><?php echo $objResult["FilesName"];?></a></center></td>
</tr>
<?php
	}
?>
</table>
<?php
mysql_close($objConnect);
?>
</body>
</html>