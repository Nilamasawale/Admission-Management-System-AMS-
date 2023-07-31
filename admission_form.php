<?php
session_start();
include("AMS_DB_Connection.php");


$email=$_SESSION["student_username"];
$student_name=$_POST["student_name"];
$mother_name=$_POST["mother_name"];
$address=$_POST["address"];
$pincode=$_POST["pincode"];
$mobile_no=$_POST["smobile_no"];
$father_moblie_no=$_POST["fmobile_no"];
$per_10=$_POST["per10"];
$per_12=$_POST["per12"];
$per_diploma=$_POST["perDiploma"];
$department=$_POST["department"];
$class=$_POST["class"];
$last_college=$_POST["last_clg"];
$category=$_POST["category"];
$Date_of_birth=$_POST["dob"];
$gender=$_POST["gender"];
$eligibility=$_POST["eligibility"];
$creamy_layer=$_POST["creamy"];
$aadhar_no=$_POST["adhar_no"];
$date=date("Y/m/d");

$paidfee=0;


$sql = "SELECT	MAX(year_fee_id) as id FROM ams_year_fee_record  year_fee_id";
$result = mysqli_query($con,$sql);
$data=$result->fetch_assoc();
$id=$data['id'];
$sql1 = "SELECT * FROM ams_year_fee_record WHERE year_fee_id='$id'";
$result1 = mysqli_query($con,$sql1);
$row=$result1->fetch_assoc();
$year=$row["year"];
$fyfee=$row["first_year_fee"];
$syfee=$row["second_year_fee"];
$tyfee=$row["third_year_fee"];

switch($department)
{
	case "BCS":
		$sql = 'SELECT email_id,class FROM AMS_BCS_student ';
		$result = $con->query($sql);
		$cnt=0;
		while($row = mysqli_fetch_array($result))
		{
			if($row["email_id"]==$email && $row["class"]==$class)
			{	
				$cnt++;
			}
		}
		if($cnt==0)
		{
			switch($class)
			{
				case "FY":
					$sql="INSERT INTO AMS_BCS_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$fyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "SY":
					$sql="INSERT INTO AMS_BCS_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$syfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "TY":
					$sql="INSERT INTO AMS_BCS_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$tyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
			}
		}
		else
		{
			echo "<script> alert('you are already fill form');\n";
			echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admission_form_page.php"';
			echo '</script>';
			die();
		}
		break;
	case "BBA":
		$sql = 'SELECT email_id,class FROM AMS_BBA_student ';
		$result = $con->query($sql);
		$cnt=0;
		while($row = mysqli_fetch_array($result))
		{
			if($row["email_id"]==$email && $row["class"]==$class)
			{	
				$cnt++;
			}
		}
		if($cnt==0)
		{
			switch($class)
			{
				case "FY":
					$sql="INSERT INTO AMS_BBA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$fyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "SY":
					$sql="INSERT INTO AMS_BBA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$syfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "TY":
					$sql="INSERT INTO AMS_BBA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$tyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
			}
		}
		else
		{
			echo "<script> alert('you are already fill form');\n";
			echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admission_form_page.php"';
			echo '</script>';
			die();
		}
		break;
	case "BCA":
		$sql = 'SELECT email_id,class FROM AMS_BCA_student ';
		$result = $con->query($sql);
		$cnt=0;
		while($row = mysqli_fetch_array($result))
		{
			if($row["email_id"]==$email && $row["class"]==$class)
			{	
				$cnt++;
			}
		}
		if($cnt==0)
		{
			switch($class)
			{
				case "FY":
					$sql="INSERT INTO AMS_BCA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$fyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "SY":
					$sql="INSERT INTO AMS_BCA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$syfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
				case "TY":
					$sql="INSERT INTO AMS_BCA_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$tyfee','$paidfee','$date')";
					if($con->query($sql)===TRUE)
					{
						echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
						echo '</script>';
						die();
					}
					else
					{
						echo "error to insert value",$con->error;	
					}
					break;
			}
		}
		else
		{
			echo "<script> alert('you are already fill form');\n";
			echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admission_form_page.php"';
			echo '</script>';
			die();
		}
		break;
		case "Diploma":
			$sql = 'SELECT email_id,class FROM AMS_Diploma_student ';
			$result = $con->query($sql);
			$cnt=0;
			while($row = mysqli_fetch_array($result))
			{
				if($row["email_id"]==$email && $row["class"]==$class)
				{	
					$cnt++;
				}
			}
			if($cnt==0)
			{
				switch($class)
				{
					case "FY":
						$sql="INSERT INTO AMS_Diploma_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$fyfee','$paidfee','$date')";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to insert value",$con->error;	
						}
						break;
					case "SY":
						$sql="INSERT INTO AMS_Diploma_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$syfee','$paidfee','$date')";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to insert value",$con->error;	
						}
						break;
					case "TY":
						$sql="INSERT INTO AMS_Diploma_student(student_name,mother_name,address,pincode,mobile_no,father_mobile_no,email_id,per_10,per_12,per_diploma,department,class,last_college,category,dob,gender,eligibility,creamy_layer,aadhar_no,year,total_fee,paid_fee,date)VALUES('$student_name','$mother_name','$address','$pincode','$mobile_no','$father_moblie_no','$email','$per_10','$per_12','$per_diploma','$department','$class','$last_college','$category','$Date_of_birth','$gender','$eligibility','$creamy_layer','$aadhar_no','$year','$tyfee','$paidfee','$date')";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/student_account_detail.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to insert value",$con->error;	
						}
						break;
				}
			}
			else
			{
				echo "<script> alert('you are already fill form');\n";
				echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admission_form_page.php"';
				echo '</script>';
				die();
			}
			break;
}
?>
