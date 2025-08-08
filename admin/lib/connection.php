<?php 

$host = "localhost";
$user = "root";
$pass = "Nghia3596@";
$db   ="store_electronic_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> connect_error) 
{
	die($conn -> error);
}
else
{
	//echo "database connected";
}

?>