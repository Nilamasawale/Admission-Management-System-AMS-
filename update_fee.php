<?php
include("AMS_DB_Connection.php");
$email=$_POST["email"];
$dept=$_POST["department"];
$class=$_POST["class"];
$paid_fee=$_POST["fee"];
$year=$_POST["year"];


$sql1 = "SELECT * FROM ams_year_fee_record WHERE year='$year'";
$result1 = mysqli_query($con,$sql1);
$row=$result1->fetch_assoc();
$year=$row["year"];
$fyfee=$row["first_year_fee"];
$syfee=$row["second_year_fee"];
$tyfee=$row["third_year_fee"];

$sql = 'SELECT * FROM AMS_BCS_student UNION SELECT * FROM AMS_BBA_student UNION SELECT * FROM AMS_BCA_student';
$result = $con->query($sql);
$count=0;
while($row = $result->fetch_assoc())
{
	if($row['email_id']===$email && $row['department']===$dept && $row['class']===$class)
	{
		$count++;
	}
}
if($count!=0)
{
	$sql = 'SELECT * FROM AMS_BCS_student UNION SELECT * FROM AMS_BBA_student UNION SELECT * FROM AMS_BCA_student';
	$result = $con->query($sql);
	while($row = $result->fetch_assoc())
	{
		if($row['email_id']===$email && $row['department']===$dept && $row['class']===$class)
		{
			$id=$row['student_id'];
			$department=$row['department'];
			$class=$row['class'];
		}
	}
	switch($department)
	{
		case "BCS":
			switch($class)
			{
				case "FY":
					$sql = 'SELECT * FROM AMS_BCS_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$fyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCS_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "SY":
					$sql = 'SELECT * FROM AMS_BCS_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$syfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCS_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "TY":
					$sql = 'SELECT * FROM AMS_BCS_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$tyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCS_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
			}
			
			break;
		case "BBA":
			switch($class)
			{
				case "FY":
					$sql='SELECT * FROM AMS_BBA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$fyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BBA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "SY":
					$sql = 'SELECT * FROM AMS_BBA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$syfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BBA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "TY":
					$sql = 'SELECT * FROM AMS_BBA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$tyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BBA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
			}
			
			break;
		case "BCA":
			switch($class)
			{
				case "FY":
					$sql='SELECT * FROM AMS_BCA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$fyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "SY":
					$sql='SELECT * FROM AMS_BCA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$syfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
				case "TY":
					$sql='SELECT * FROM AMS_BCA_student';
					$result = $con->query($sql);
					while($row = $result->fetch_assoc())
					{	
						if($row['student_id']===$id)
						{
							$fee=$row['paid_fee'];
						}
					} 
					$fee=$fee+$paid_fee;
					if($fee>$tyfee)
					{
						echo "<script> alert('Your Fee Is No Correct');\n";
						echo 'window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
						echo '</script>';
						die();	
					}
					else
					{
						$sql="UPDATE AMS_BCA_student SET paid_fee='$fee' WHERE student_id='$id'";
						if($con->query($sql)===TRUE)
						{
							echo '<script>window.location.href="http://localhost/tybsc project/Admission Management System(AMS)/admin_dashboard.php"';
							echo '</script>';
							die();
						}
						else
						{
							echo "error to update value",$con->error;	
						}
					}
					break;
			}
			
			break;
	}
}

?>