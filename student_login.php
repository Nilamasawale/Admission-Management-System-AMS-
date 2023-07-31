<?php
session_start();
include("AMS_DB_Connection.php");
$username=$_POST["username"];
$password=$_POST["password"];
$sql = "SELECT  s_username,s_password FROM AMS_student_record  WHERE s_username='$username' AND s_password='$password'";
$result = $con->query($sql);
if ($result->num_rows > 0)
{
$_SESSION["student_username"]=$username;
include "student_account_detail.php";
die();
}
else
{
	echo "<script> alert('please enter valid username and password . if you dont have then please sign up');\n";
	echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_login_page.php"';
	echo '</script>';
	die();
}
		
?>