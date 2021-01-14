<?php 
session_start();
error_reporting(0);
if($_SESSION['status']!='admin')
{
		echo "<script>window.location.href = '../Admin/login/login.php';</script>";
}
?> 