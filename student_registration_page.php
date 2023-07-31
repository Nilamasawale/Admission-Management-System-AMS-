<html>
<head>
<title>
<?php 
if(isset($_SESSION)){echo"student update form";}else{echo"student registration form";} ?>
</title>
<style>
.column{
float:left;
width:50%;
}
.row:after{
content:"";
display:table;
clear:both;
}
font{
font-weight:bold;
}
input[type=text],input[type=password],input[type=email],input[type=date],input[type=tel]{
border-style: none;
border-bottom: 2px solid green;
}
</style>
</head>
<body>
<?php include "header.php";
?>
<br><br>
<form action=<?php if(isset($_SESSION)){echo"student_update_detail.php";}else{echo"student_registration.php";} ?> method="post">
<div class="row">
<div class="column">
<img src="clg.png" width="90%" height="70%">
</div>
<div class="column" align="center">
<table  cellspacing="25px" >
<tr>
<td colspan="2" align="center"><font size="5" color="green"><b><?php if(isset($_SESSION)){echo"STUDENT UPDATE FORM";}else{echo"STUDENT REGISTRATION FORM";} ?></b></font></td>
</tr>
<?php
if(isset($_SESSION))
{
include("AMS_DB_Connection.php");
$sql = "SELECT * FROM ams_student_record";
$result = mysqli_query($con,$sql);
if ($result->num_rows > 0)
{
while($row=$result->fetch_assoc())
{
	if($row['s_username']===$_SESSION["student_username"])
	{?>
<tr>
<td><font size="5">Username</font><font size="3">(Please enter email id) </font></td>
<td><input type="email" id="username" name="username" value=<?php if(isset($_SESSION)){echo $row['s_username'];}else{echo "";}?> title="you can't update username" required readonly></td>
</tr>
<tr>
<td><font size="5">Password </font></td>
<td><input type="text" id="password" name="password" value=<?php if(isset($_SESSION)){echo $row['s_password'];}else{echo "";}?> pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required > </td>
</tr>
<tr>
<td><font size="5">Confirm Password </font></td>
<td><input type="text" id="confirm_password" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value=<?php if(isset($_SESSION)){echo $row['s_confirm_password'];}else{echo "";}?> required title="Please enter password same as above" > </td>
</tr>
<tr>
<td><font size="5">First Name </font></td>
<td><input type="text" id="first_name" name="first_name" value=<?php if(isset($_SESSION)){echo $row['s_first_name'];}else{echo "";}?> pattern="[A-z]+" title="Please enter First name" required></td>
</tr>
<tr>
<td><font size="5">Middle Name </font></td>
<td><input type="text" id="middle_name" name="middle_name" value=<?php if(isset($_SESSION)){echo $row['s_middle_name'];}else{echo "";}?> pattern="[A-z]+" title="Please enter Middle name" required></td>
</tr>
<tr>
<td><font size="5">Last Name </font></td>
<td><input type="text" id="last_name" name="last_name" value=<?php if(isset($_SESSION)){echo $row['s_last_name'];}else{echo "";}?> pattern="[A-z]+" title="Please Enter Last name" required></td>
</tr>
<tr>
<td><font size="5">Mobile Number </font></td>
<td><input type="tel" id="mobile_no" name="mobile_no" pattern="[0-9]{10}" value=<?php if(isset($_SESSION)){echo $row['s_mobile_no'];}else{echo "";}?> title="Please enter correct Mobile no (length should be 10)" required ></td>
</tr>
<tr>
<td><font size="5">Address </font></td>
<td><input type="text" id="address" name="address" value=<?php if(isset($_SESSION)){echo $row['s_address'];}else{echo "";}?> title="Please enter address" required ></td>
</tr>
<tr>
<td><font size="5">Gender </font></td>
<td><input type="radio" id="male" name="gender" value="male"  <?php if(isset($_SESSION)){if($row['s_gender']==="male"){echo "checked";}else{echo "";}}?> required>
<label for="male"><font size="3">Male</font></label>&nbsp
<input type="radio" id="female" name="gender" value="female" <?php if(isset($_SESSION)){if($row['s_gender']==="female"){echo "checked";}else{echo "";}}?> required>
<label for="female"><font size="3">Female</font></label>&nbsp
<input type="radio" id="other" name="gender" value="other" <?php if(isset($_SESSION)){if($row['s_gender']==="other"){echo "checked";}else{echo "";}}?> required>
<label for="other"><font size="3">Other</font></label></td>
</tr>
<tr>
<td><font size="5">Date of Birth </font></td>
<td><input type="date" id="dob" name="dob" value=<?php if(isset($_SESSION)){echo $row['s_dob'];}else{echo "";}?>  required></td>
</tr>
<tr align="center">

<?php }

}}}
else
{?>
<tr>
<td><font size="5">Username</font><font size="3">(Please enter email id) </font></td>
<td><input type="email" id="username" name="username" value="" required title="Please enter correct username(write Email Id)"></td>
</tr>
<tr>
<td><font size="5">Password </font></td>
<td><input type="password" id="password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required > </td>
</tr>
<tr>
<td><font size="5">Confirm Password </font></td>
<td><input type="password" id="confirm_password" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" required title="Please enter password same as above" > </td>
</tr>
<tr>
<td><font size="5">First Name </font></td>
<td><input type="text" id="first_name" name="first_name" value="" pattern="[A-z]+" title="Please enter First name" required></td>
</tr>
<tr>
<td><font size="5">Middle Name </font></td>
<td><input type="text" id="middle_name" name="middle_name" value="" pattern="[A-z]+" title="Please enter Middle name" required></td>
</tr>
<tr>
<td><font size="5">Last Name </font></td>
<td><input type="text" id="last_name" name="last_name" value="" pattern="[A-z]+" title="Please Enter Last name" required></td>
</tr>
<tr>
<td><font size="5">Mobile Number </font></td>
<td><input type="tel" id="mobile_no" name="mobile_no" pattern="[0-9]{10}" value="" title="Please enter correct Mobile no (length should be 10)" required ></td>
</tr>
<tr>
<td><font size="5">Address </font></td>
<td><input type="text" id="address" name="address" value="" title="Please enter address" required ></td>
</tr>
<tr>
<td><font size="5">Gender </font></td>
<td><input type="radio" id="male" name="gender" value="male"   required>
<label for="male"><font size="3">Male</font></label>&nbsp
<input type="radio" id="female" name="gender" value="female"  required>
<label for="female"><font size="3">Female</font></label>&nbsp
<input type="radio" id="other" name="gender" value="other"  required>
<label for="other"><font size="3">Other</font></label></td>
</tr>
<tr>
<td><font size="5">Date of Birth </font></td>
<td><input type="date" id="dob" name="dob" value=""  required></td>
</tr>
<tr align="center">
<?php
}

?>
<td><input type="submit" name="submit" value=<?php if(isset($_SESSION)){echo "Update";}else{echo "Submit";}?> style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
<td><?php if(!isset($_SESSION)){echo"<input type='reset' name='cancel' value='cancel'  style='background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;'>";}else{echo"<a href='student_account_detail.php'>BACK</a>";}?></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>

