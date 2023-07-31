<html>
<head>
<title>
student login form
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
input[type=email],input[type=password]{
border-style: none;
border-bottom: 2px solid green;
}

</style>
</head>
<body>
<?php include "header.php";?>
<br><br>
<form action="student_login.php" method="post">
<div class="row">
<div class="column">
<img src="clg.png" width="90%" height="70%">
</div>
<div class="column" align="center">
<table  cellspacing="25px" >
<tr>
<td colspan="2" align="center"><font size="6" color="green"><b>STUDENT LOGIN</b></font></td>
</tr>
<tr>
<td><font size="5">username </font></td>
<td><input type="email" name="username" value="" title="Please enter valid email" required ></td>
</tr>
<tr>
<td><font size="5">password </font></td>
<td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required > </td>
</tr>
<tr align="center">
<td><input type="submit" name="login" value="login" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
<td><input type="button" name="admin" value="admin" onclick="window.location.href='http://localhost/Admission%20Management%20System(AMS)/admin_login_page.php'" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
<tr>
<td colspan="2">if you don't have account <a href="student_registration_page.php">Sign up</a></td>
</tr>
</table>
</div>
</div>
</form>
</body>
</html>

