<?php
include("AMS_DB_Connection.php");
$year=$_POST["year"];
$fyfee=$_POST["fyf"];
$syfee=$_POST["syf"];
$tyfee=$_POST["tyf"];
$sql="INSERT INTO AMS_year_fee_record(year,first_year_fee,second_year_fee,third_year_fee)VALUES('$year','$fyfee','$syfee','$tyfee')";
if($con->query($sql)===TRUE)
{
	echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
	echo '</script>';
	die();
}
else
{
	echo "error to insert value",$con->error;	
}
?>