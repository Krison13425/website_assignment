<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">

		<?php
		session_start();
		?>
	</head>
	<body>
		<div id=header></div>
		<div class="box">
			<h2 style="font-family: 'Permanent Marker', cursive; font-size: 30px; color:gold;">Welcome <?php echo $_SESSION['staffname'];?></h2>
			<form>
			  <center>
				<div class="inputBox">
					<a href="Add New Activity.html"><input type="button" value="ADD NEW ACTIVITY" name="submit"></a>
				</div>

				<div class="inputBox">
					<a href="Add New Item.html"><input type="button" value="ADD NEW ITEM" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href="Activity List.php"><input type="button" value="UPDATE ACTIVITY" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href="Item List.php"><input type="button" value="UPDATE ITEM" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href="Book Now.php"><input type="button" value="BOOK NOW" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href='View Customer Booking List.php'><input type="button" value="VIEW BOOKING LIST" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href="View Customer Payment Status List.php"><input type="button" value="PAYMENT STATUS" name="submit"></a>
				</div>
				
				<div class="inputBox">
					<a href="logout.php"><input type="button" value="LOGOUT" name="submit"></a>
				</div>
				
				
			  </center>
			</form>	
		</div>
	</body>
</html>
