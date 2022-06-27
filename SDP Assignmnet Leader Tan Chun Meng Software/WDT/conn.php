<?php
	$con= mysqli_connect("localhost","root", "","wdt","3308");

	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>