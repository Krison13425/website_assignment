<!DOCTYPE HTML>
<html>
	<head>
		<title>Mr. Smash</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="booking_list.css">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
	<header><button class="btn btn1" onclick="window.location.href='View Customer Payment Status List.php_M.php'">Back</button></header>
	<center><h1>Customer Boking Status Check list</h1></center>
	<br>
	<center>
	<style>
	input[type=text]
	{
	font-family: 'montserrat';
	font-size: 20px;
	border-radius:25px;
	}
	</style>
	<form action="Payment Status_search_M.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	</form>
	</center>
	<br>
	<br>
		<table>
		<th>Booking ID</th>
		<th>Name</th>
		<th>IC/Passport</th>
		<th>Activity</th>
		<th>Date</th>
		<th>Time</th>
		<th>Payment Method</th>
		<th>Payment Status</th>
		<?php
			
			include("conn.php");
			
			if(isset($_POST['search'])){
			$search = mysqli_real_escape_string($con,$_POST['search']);
			$sql = "SELECT * FROM booking WHERE C_BookingID LIKE '%$search%' OR C_Name LIKE '%$search%' ";
			$result = mysqli_query($con,$sql);
			$queryResults = mysqli_num_rows($result);
			
			if($queryResults > 0){
				while ($row = mysqli_fetch_assoc($result))
				{
					echo"<tr><td>".$row["C_BookingID"]."</td>";
					echo"<td>".$row["C_Name"]."</td>";
					echo"<td>".$row["C_IC"]."</td>";
					echo"<td>".$row["C_Activity"]."</td>";
					echo"<td>".$row["C_Date"]."</td>";
					echo"<td>".$row["C_Time"]."</td>";
					echo"<td>".$row["C_PayMethod"]."</td>";
					
					if($row["C_PayStatus"]=='paid')
					{
					echo"<td>".$row["C_PayStatus"]."</td>";
					}
					else
					{
						echo'<td><button class="btn btn2" onclick="window.location.href=\'Payment Status List Paid Update_M.php?id='.$row['C_BookingID'].'\'">Paid</button></td>';
						echo'<td><button class="btn btn2" onclick="window.location.href=\'Payment Status List Unpaid Update_M.php?id='.$row['C_BookingID'].'\'">Unpaid</button></td>';
					}
			}
			echo"</table>";
			}else{
				echo"0 result";
			}
			}
			mysqli_close($con);
			
			?>
	</body>
</html>
