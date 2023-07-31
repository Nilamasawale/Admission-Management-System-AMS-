<?php
include("AMS_DB_Connection.php");
$sql = 'SELECT s_username FROM AMS_student_record ';
$result = $con->query($sql);
$cnt=0;
if($_POST["password"]!=$_POST["confirm_password"])
{
	echo "<script> alert('please enter correct confirm password');\n";
	echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_registration_page.php"';
	echo '</script>';
	die();
}
else
{
	while($row = mysqli_fetch_array($result))
	{
		if($row["s_username"]==$_POST["username"])
		{	
			$cnt++;
		}
	}
	if($cnt==0)
	{
		$a=$_POST['username'];
		$b=$_POST['password'];
		$c=$_POST['confirm_password'];
		$d=$_POST['first_name'];
		$e=$_POST['middle_name'];
		$f=$_POST['last_name'];
		$g=$_POST['mobile_no'];
		$h=$_POST['address'];
		$i=$_POST['gender'];
		$j=$_POST['dob'];
		$sql="INSERT INTO AMS_student_record(s_username,s_password,s_confirm_password,s_first_name,s_middle_name,s_last_name,s_mobile_no,s_address,s_gender,s_dob)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
		if($con->query($sql)===TRUE)
		{
			echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_login_page.php"';
			echo '</script>';
			die();
		}
		else
		{
			echo "error to insert value",$con->error;	
		}
	}
	else
	{
	echo "<script> alert('you are already register with this email id');\n";
	echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_registration_page.php"';
	echo '</script>';
	die();
	}
}
?>