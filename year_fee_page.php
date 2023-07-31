<html>
<head>
<title>
Year Fee Entry
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
input[type=text],input[type=number]{
border-style: none;
border-bottom: 2px solid green;
}

</style>
</head>
<body>
<?php include "header.php";?>
<a style="float:right" href='admin_dashboard.php'>BACK</a>
<br><br>
<form action="year_fee.php" method="post">
<div class="row">
<div class="column">
<img src="clg.png" width="90%" height="70%">
</div>
<div class="column" align="center">
<table  cellspacing="25px" >
<tr>
<td colspan="2" align="center"><font size="6" color="green"><b>Enter Year & Fee</b></font></td>
</tr>
<tr>
<td><font size="5">Year</font></td>
<td><input type="number" name="year" value="" title="Enter correct year" required ></td>
</tr>
<tr>
<td><font size="5">First Year Fee</font></td>
<td><input type="number" name="fyf" value="" title="Enter correct fee" required ></td>
</tr>
<tr>
<td><font size="5">Second Year Fee</font></td>
<td><input type="number" name="syf" value="" title="Enter correct fee" required ></td>
</tr>
<tr>
<td><font size="5">Third Year Fee</font></td>
<td><input type="number" name="tyf" value="" title="Enter correct fee" required ></td>
</tr>
<tr align="center">
<td><input type="submit" name="submit" value="submit" style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
<td><input type="reset" name="cancel" value="cancel"  style="background-color:green;color:white;height:40px;width:125px;text-align:center;border-radius:25px;"></td>
</tr>
</table>
</form>
</body>
</html>

