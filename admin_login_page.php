<html>
<head>
<title>
Admin login form
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
input[type=text],input[type=password]{
border-style: none;
border-bottom: 2px solid green;
}

</style>
</head>
<body>
<?php include "header.php";?>
<br><br>
<form action="admin_login.php" method="post">
<div class="row">
<div class="column">
<img src="clg.png" width="90%" height="70%">
</div>
<div class="column" align="center">
<table  cellspacing="25px" >
<tr>
<td colspan="2" align="center"><font size="6" color="green"><b>ADMIN LOGIN</b></font></td>
</tr>
<tr>
<td><font size="5">username </font></td>
<td><input type="text" name="username" value="" title="Please enter correct username" required ></td>
</tr>
<tr>
<td><font size="5">password </font></td>
<td><input type="password" name="password" value="" title="Please enter correct password" required > </td>
</tr>
<tr align="center">
<td><input type="submit" name="login" value="login" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
<td><input type="reset" name="cancel" value="cancel"  style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
</table>
</form>
</body>
</html>

