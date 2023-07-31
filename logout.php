<?php
if(isset($_SESSION))
{
	session_destroy();
}

include("student_login_page.php");
?>