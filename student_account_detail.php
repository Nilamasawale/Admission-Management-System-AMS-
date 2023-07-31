<?php
if(!isset($_SESSION))
{
session_start();
}
?>
<html>
<head>
<style>
table,th,td{
border : 1px solid black;
border-collapse : collapse;
}
th,td{
padding : 4px;
}
</style>
<script>
fuction update()
{
window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_registration_page.php";
}

</script>
</head>
<body>
<?php 
include "header.php";
include("AMS_DB_Connection.php");
$sql = "SELECT * FROM ams_student_record";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row['s_username']===$_SESSION["student_username"])
	{?>
		<br><b> USERNAME : <?php echo $row['s_first_name'];?>&nbsp<?php echo $row['s_middle_name'];?>&nbsp<?php echo $row['s_last_name'];?></b><br><br>
		<b> MOBILE NUMBER : <?php echo $row['s_mobile_no'];?></b><br><br>
		<b> ADDRESS : <?php echo $row['s_address'];?></b><br><br>
		<b> EMAIL ID : <?php echo $row['s_username'];?></b><br><br>
		<b> GENDER : <?php echo $row['s_gender'];?></b><br><br>
		<b> DATE OF BIRTH : <?php echo $row['s_dob'];?></b><br><br>
<?php }

}}

?>
<form action="student_update.php" method="post">
<input type="submit" name="update" value="update" style="background-color:green;color:white;height:35px;width:120px;text-align:center;border-radius:25px;">
</form>
<a href="admission_form_page.php">ADDMISSION FORM</a>
<br><br>
<a href="admission_form_page.php">SOLARSHIPS FORM</a>
<br><br>
<?php
$count=0;
$sql = 'SELECT email_id FROM AMS_BCS_student UNION SELECT email_id FROM AMS_BBA_student UNION SELECT email_id FROM AMS_BCA_student';
$result = $con->query($sql);
while($row = $result->fetch_assoc())
{	
	if($row['email_id']===$_SESSION["student_username"])
	{
		$count++;
	}
}
if($count!=0)
{
$sql = 'SELECT * FROM AMS_BCS_student UNION SELECT * FROM AMS_BBA_student UNION SELECT * FROM AMS_BCA_student  UNION SELECT * FROM AMS_Diploma_student';
$result = $con->query($sql);
?>
<b>ADMISSION DETAIL</b><br><br>
<table border=3>
<tr><th>Sr. No.</th><th>Student Name</th><th>Mother Name</th><th>Adress</th><th>Pincode</th><th>Mobile No</th><th>Father Mobile No</th><th>Email Id</th><th>10 Percentage</th><th>12 Percentage</th><th>Diploma Percentage</th><th>Department</th><th>Class</th><th>Last college</th><th>Category</th><th>Date of Birth</th><th>Gender</th><th>Eligibility</th><th>Creamy Layer</th><th>Aadhar No</th><th>Year</th><th>Total Fee</th><th>Paid Fee</th><th>Remaining Fee</th><th>Admission Date</th></tr>
<?php
$i=0;
while($row = $result->fetch_assoc())
{	
	if($row['email_id']===$_SESSION["student_username"])
	{?>
	<tr><td><?php echo ++$i;?></td>
	<td><?php echo $row["student_name"];?></td>
	<td><?php echo $row["mother_name"];?></td>
	<td><?php echo $row["address"];?></td>
	<td><?php echo $row["pincode"];?></td>
	<td><?php echo $row["mobile_no"];?></td>
	<td><?php echo $row["father_mobile_no"];?></td>
	<td><?php echo $row["email_id"];?></td>
	<td><?php echo $row["per_10"];?></td>
	<td><?php echo $row["per_12"];?></td>
	<td><?php echo $row["per_diploma"];?></td>
	<td><?php echo $row["department"];?></td>
	<td><?php echo $row["class"];?></td>
	<td><?php echo $row["last_college"];?></td>
	<td><?php echo $row["category"];?></td>
	<td><?php echo $row["dob"];?></td>
	<td><?php echo $row["gender"];?></td>
	<td><?php echo $row["eligibility"];?></td>
	<td><?php echo $row["creamy_layer"];?></td>
	<td><?php echo $row["aadhar_no"];?></td>
	<td><?php echo $row["year"];?></td>
	<td><?php echo $row["total_fee"];?></td>
	<td><?php echo $row["paid_fee"];?></td>
	<td><?php echo $row["total_fee"]-$row["paid_fee"];?></td>
	<td><?php echo $row["date"];?></td>
	</tr><?php
}}}
?>
</table>
</body>
</html>