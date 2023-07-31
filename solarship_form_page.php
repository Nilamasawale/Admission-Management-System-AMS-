<?php
session_start();
?>
<html>
<head>
<title>
Solarship Form
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
select,input[type=text],input[type=password],input[type=email],input[type=date],input[type=tel]{
border-style: none;
border-bottom: 2px solid green;
}
</style>
</head>
<body>
<?php include "header.php";
?>
<br><br>
<form action="admission_form.php"  method="post" align="center" >
<div class="row">
<div class="column">
<img src="clg.png" width="90%" height="70%">
<br><br>
<a href="student_account_detail.php">BACK</a>
</div>
<div class="column" align="center">
<table align="center" cellspacing="25px" >
<tr>
<td colspan="2" align="center"><font size="5" color="green"><b>SOLARSHIP FORM</b></font></td>
</tr>

<tr>
<td><font size="5">Student Name</font><font size="3"></font></td>
<td><input type="text" id="student_name" name="student_name" value="" pattern="[A-z\s]+" title="Please enter correct student name" required ></td>
</tr>
<tr>
<td><font size="5">Mother Name</font><font size="3"></font></td>
<td><input type="text" id="mother_name" name="mother_name" value="" pattern="[A-z\s]+" title="Please enter correct mother name" required ></td>
</tr>
<tr>
<td><font size="5">Address </font></td>
<td><input type="text" id="address" name="address" value="" title="Please enter correct address" required ></td>
</tr>
<tr>
<td><font size="5">Pincode </font></td>
<td><input type="text" id="pincode" name="pincode" pattern="[0-9]{6}" value="" title="Please enter correct pincode(length should be 6)" required ></td>
</tr>
<tr>
<td><font size="5">Mobile Number </font></td>
<td><input type="tel" id="smobile_no" name="smobile_no" pattern="[0-9]{10}" value="" title="Please enter correct student mobile no(length should be 10)" required ></td>
</tr>
<tr>
<td><font size="5">Father Mobile Number </font></td>
<td><input type="tel" id="fmobile_no" name="fmobile_no" pattern="[0-9]{10}" value="" title="Please enter correct father mobile no(length should be 10)" required ></td>
</tr>
<tr>
<td><font size="5">10 Percentage </font></td>
<td><input type="text" id="per10" name="per10" pattern="[0-9]+(\.[0-9]{1,2})?%?" value="" title="Please enter correct 10th percentage" required ></td>
</tr>
<tr>
<td><font size="5">12 percentage </font></td>
<td><input type="text" id="per12" name="per12" pattern="[0-9]+(\.[0-9]{1,2})?%?" value="" title="Please enter correct 12th percentage"></td>
</tr>
<tr>
<td><font size="5">Diploma Percentage </font></td>
<td><input type="text" id="perDiploma" name="perDiploma" pattern="[0-9]+(\.[0-9]{1,2})?%?" value="" title="Please enter correct Diploma percentage" ></td>
</tr>
<tr>
<td><font size="5">Department</font></td>
<td><select name="department">
<option value=" " selected>none</option>
<option value="BCS">BSC Computer Science</option>
<option value="BBA">BBA</option>
<option value="BCA">BBA Computer Application</option>
</select></td>
</tr>
<tr>
<td><font size="5">Class</font></td>
<td><select name="class">
<option value=" " selected>none</option>
<option value="FY">First Year</option>
<option value="SY">Second Year</option>
<option value="TY">Third Year</option>
</select></td>
</tr>
<tr>
<td><font size="5">Name Of Last Attended College </font></td>
<td><input type="text" id="last_clg" name="last_clg" value="" title="Please enter correct last attended college name" required ></td>
</tr>
<tr>
<td><font size="5">Category Please</font></td>
<td><select name="category">
<option value=" " selected>none</option>
<option value="OPEN">OPEN</option>
<option value="SC">SC</option>
<option value="ST">ST</option>
<option value="DT-A">DT-A</option>
<option value="DT-B">DT-B</option>
<option value="DT-C">DT-C</option>
<option value="NT-B">NT-B</option>
<option value="NT-C">NT-C</option>
<option value="NT-D">NT-D</option>
<option value="VJ">VJ</option>
<option value="SBC">SBC</option>
<option value="OBC">OBC</option>
</select></td>
</tr>
<tr>
<td><font size="5">Date of Birth </font></td>
<td><input type="date" id="dob" name="dob" value=""  required></td>
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
<td><font size="5">Eligibility No </font></td>
<td><input type="text" id="eligibility" name="eligibility" pattern="[0-9]{11}" value="" title="Please enter correct Eligibility no(length should be 11)"></td>
</tr>
<tr>
<td><font size="5">Creamy Layer </font></td>
<td><input type="radio" id="yes" name="creamy" value="yes"   required>
<label for="yes"><font size="3">Yes</font></label>&nbsp
<input type="radio" id="no" name="creamy" value="no"  required>
<label for="no"><font size="3">No</font></label>
</tr>
<tr>
<td><font size="5">Aadhar No </font></td>
<td><input type="text" id="adhar_no" name="adhar_no" pattern="[0-9]{12}" value="" title="Please enter correct Aadhar card no(length should be 12)" required></td>
</tr>
<tr align="center">
<td><input type="submit" name="submit" value="Submit" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
<td><input type="reset" name="cancel" value="cancel"  style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>

