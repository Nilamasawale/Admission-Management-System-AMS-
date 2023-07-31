<?php
if(!isset($_SESSION))
{
session_start();
}
include "header.php";
include("AMS_DB_Connection.php");
?>
<html>
<head>
<title>Admin Dashboard</title>
<style>
input[type=text],input[type=email],input[type=number]{
border-style: none;
border-bottom: 2px solid green;
}
font{
font-weight:bold;
}
td{
padding : 2px;
}
</style>
</head>
<body>
<br><br><br>
<div class="row" >
<div class="column" style="height:20%;width:19%;background-color:red;border-style:solid;border-radius:10px;">
<b>Year & Fee<br>
<?php
$sql = "SELECT	MAX(year_fee_id) as id FROM ams_year_fee_record  year_fee_id";
$result = mysqli_query($con,$sql);

$data=$result->fetch_assoc();
if(isset($data))
{
$id=$data['id'];
$sql1 = "SELECT * FROM ams_year_fee_record WHERE year_fee_id='$id'";
$result1 = mysqli_query($con,$sql1);

while($row=$result1->fetch_assoc())
{
	?><b>year =<?php echo $row['year']; ?><br>
	First year fee =<?php echo $row['first_year_fee'];?><br>
	Second year fee =<?php echo $row['second_year_fee'];?><br>
	Third year fee =<?php echo $row['third_year_fee'];?><br>
	<?php echo"</b>";
}}

?>
<br><a href="year_fee_page.php">CHANGE</a> 
</div>&nbsp&nbsp&nbsp
<div align="center" class="column" style="height:20%;width:19%;background-color:yellow;border-style:solid;border-radius:10px;">
<b>Count of registered student<br><br><br>
<?php
$sql = "SELECT count(*) as total FROM ams_student_record";
$result = mysqli_query($con,$sql);
$data=$result->fetch_assoc();
echo $data['total'];
?>
</b>
</div>&nbsp
<div align="center" class="column" style="height:20%;width:19%;background-color:whitw;border-style:solid;border-radius:10px;">
<b>Count of BSC CS student<br>
First year =<?php
$sql1 = "SELECT year FROM ams_year_fee_record WHERE year_fee_id='$id'";
$result1 = mysqli_query($con,$sql1);
$row=$result1->fetch_assoc();
$yr=$row['year'];
$total=0;
$sql = "SELECT * FROM ams_bcs_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="FY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?><br>
Second year =<?php
$total=0;
$sql = "SELECT * FROM ams_bcs_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="SY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{	
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Third year =<?php
$total=0;
$sql = "SELECT * FROM ams_bcs_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="TY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br></b>
</div>&nbsp
<div align="center" class="column" style="height:20%;width:19%;background-color:blue;border-style:solid;border-radius:10px;">
<b>Count of BBA CA student<br>
First year =<?php
$total=0;
$sql = "SELECT * FROM ams_bca_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="FY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Second year =<?php
$total=0;
$sql = "SELECT * FROM ams_bca_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="SY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Third year =<?php
$total=0;
$sql = "SELECT * FROM ams_bca_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="TY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br></b>
</div>&nbsp
<div align="center" class="column" style="height:20%;width:19%;background-color:pink;border-style:solid;border-radius:10px;">
<b>Count of BBA student<br>
First year =<?php
$total=0;
$sql = "SELECT * FROM ams_bba_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="FY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Second year =<?php
$total=0;
$sql = "SELECT * FROM ams_bba_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="SY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Third year =<?php
$total=0;
$sql = "SELECT * FROM ams_bba_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="TY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br></b>
</div>&nbsp
<div align="center" class="column" style="height:20%;width:19%;background-color:pink;border-style:solid;border-radius:10px;">
<b>Count of diploma student<br>
First year =<?php
$total=0;
$sql = "SELECT * FROM ams_diploma_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="FY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Second year =<?php
$total=0;
$sql = "SELECT * FROM ams_diploma_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="SY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br>
Third year =<?php
$total=0;
$sql = "SELECT * FROM ams_diploma_student";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row["class"]=="TY" && $row["year"]==$yr)
	{
		$total++;
	}
	
}
if($total!=0)
{
	echo $total;
}
else
{
	echo "no record";
}
}
else
{
echo "no entry";
}
?>
<br></b>
</div>
</div>
<br><br>
<font size="4"><b>UPDATE  Fee :</b></font><br><br>
<form action="update_fee.php" method="post">
<table>
<tr>
<td><font size="3">Email Id =</font></td>
<td><input type="email" id="email" name="email" value="" title="Please enter correct Email id" required ></td>
<td><font size="3">Department =</font></td>
<td><select name="department">
<option value=" " selected>none</option>
<option value="BCS">BSC Computer Science</option>
<option value="BBA">BBA</option>
<option value="BCA">BBA Computer Application</option>
</select></td>
<td><font size="3">Class =</font></td>
<td><select name="class">
<option value=" " selected>none</option>
<option value="FY">First Year</option>
<option value="SY">Second Year</option>
<option value="TY">Third Year</option>
</select></td>
<td><font size="3">Year =</font></td>
<td><input type="number" name="year" value="" title="Please enter correct year" required ></td>
<td><font size="3">Paid Fee =</font></td>
<td><input type="number" name="fee" value="" title="Please enter correct paid fee" required ></td>
<td><input type="submit" name="submit" value="Submit" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
</table>
</form>
<font size="4"><b>SEE STUDENT DETAILS :</b></font> <br><br>
<form action="student_details.php" method="post">
<table>
<tr>
<td><font size="3">Year =</font></td>
<td><input type="number" name="year" value="" title="Please enter correct year" required ></td>
<td><font size="3">Department =</font></td>
<td><select name="department">
<option value=" " selected>none</option>
<option value="BCS">BSC Computer Science</option>
<option value="BBA">BBA</option>
<option value="BCA">BBA Computer Application</option>
</select></td>
<td><font size="3">Class =</font></td>
<td><select name="class">
<option value=" " selected>none</option>
<option value="FY">First Year</option>
<option value="SY">Second Year</option>
<option value="TY">Third Year</option>
</select></td>
<td><input type="submit" name="submit" value="Submit" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
</form>
</body>
</html>
