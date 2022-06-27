<!DOCTYPE html>
<html>
	<head>
		<title>Mr. Smash</</title>
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<header><button class="btn btn1" onclick="window.location.href='Manager_page.php'">Back</button></header>
	<body>
		<?php
			include("conn.php");
			
			$sql = "SELECT * FROM ac";
			$result = mysqli_query($con,$sql);
			$queryResults = mysqli_num_rows($result);
			
			
			if($queryResults > 0){
				while ($row = mysqli_fetch_assoc($result))
				{
					
			echo '<div class="box">';			
			
			if ($row['AC_Pic'] == "")
			{
				echo '<img src="default.png">';
			}
			else{
				echo '<img widt:500px float: left src="upload/'.$row['AC_Pic'].'">';
			}
			echo '<h3>'.$row['AC_Name'].'</h3>';
			echo ''.$row['AC_Price'].'<br>';
			echo ''.$row['AC_TimeAvailable'].'<br>';
			echo'<button class="btn btn1" onclick="window.location.href=\'Update_Activity_M.php?id='.$row['AC_ID'].'\'">Update</button>';
			echo'<button class="btn btn1" onclick="window.location.href=\'delete_activity_M.php?id='.$row['AC_ID'].'\'">Delete</button>';
			echo '</div>';
				}
			}
			?>
</body>
</html>