<?php
session_start();
$admin=$_POST["username"];
$password=$_POST["password"];
if(($admin==="admin")&&($password==="admin"))
{	
	$_SESSION["admin"]=$admin;
	include "admin_dashboard.php";
	die();
}
else
{
	echo "<script> alert('please enter valid username and password . ');\n";
	echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_login_page.php"';
	echo '</script>';
	die();
}
?>