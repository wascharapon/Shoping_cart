<?php
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "cosmentic";

	$con= mysqli_connect($serverName,$userName,$userPassword,$dbName);

	mysqli_set_charset($con,"utf8");
?>