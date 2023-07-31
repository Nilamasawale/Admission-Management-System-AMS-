<?php
session_start();
include("AMS_DB_Connection.php");
$sql = 'SELECT student_id,s_username FROM AMS_student_record ';
$result = $con->query($sql);
if($_POST["password"]!=$_POST["confirm_password"])
{
	echo "<script> alert('please enter correct confirm password');\n";
	echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_update.php"';
	echo '</script>';
	die();
}
else
{
	while($row = mysqli_fetch_array($result))
	{
		if($row["s_username"]==$_SESSION['student_username'])
		{	
			$id=$row["student_id"];
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
			$sql="UPDATE AMS_student_record SET s_username='$a' , s_password='$b' , s_confirm_password='$c' , s_first_name='$d' , s_middle_name='$e' , s_last_name='$f' , s_mobile_no='$g' , s_address='$h' , s_gender='$i' , s_dob='$j' WHERE student_id='$id'";
			if($con->query($sql)===TRUE)
			{
				echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_login_page.php"';
				echo '</script>';
				die();
			}
			else
			{
				echo "error to update value",$con->error;	
			}
		}
	}	
}

?>