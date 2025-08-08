<?php
// Path: admin/config.php
session_start();
$_SESSION['admin_id']==1;
if(!isset($_SESSION['admin_id']) || $_SESSION['admin_id'] != 1) {
    header("location:login.php");
    exit(); // 
}
?>