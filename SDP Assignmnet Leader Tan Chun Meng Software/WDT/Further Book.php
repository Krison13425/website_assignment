<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Mr.Smash</title>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
	<header><button class="btn btn1" onclick="window.location.href='Book Now.php'">Back</button></header>
	<body>
	<div id=header></div>
	<div class="box">
		<h2 style="font-family: 'Permanent Marker', cursive; font-size: 30px; color:gold;">Which Activity</h2>
	<?php
		include("conn.php");
			
			$i = 1;
			$sql = "SELECT * FROM ac";
			$result = mysqli_query($con,$sql);
			$queryResults = mysqli_num_rows($result);
			
			
			if($queryResults > 0){
				while ($row = mysqli_fetch_array($result))
				{
	

	echo '<center><button class="btn btn1" onclick="window.location.href=\'Further Booking.php?id='.$row['AC_ID'].'\'" >'.$row['AC_Name'].'</button><br>';
	
				
	}
	}
			
	?>
	</body>