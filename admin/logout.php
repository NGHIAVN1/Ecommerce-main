<?php

SESSION_START();

if(isset($_SESSION['admin']))
{
	session_destroy();
	header("location:login.php");
}
else
{
	header("location:login.php");
}


?>