<?php
if (isset($_POST["submit"])){
include("conn.php");
	
	$ID = $_POST["id"];
	$Name = $_POST["name"];
	$Activity = $_POST["activity"];
	$Date = $_POST["date"];
	$Time = $_POST["time"];
	$Fee = $_POST["fee"];
	$court = $_POST["court"];
	$c_time= $_POST["current_time"];
	$c_date= $_POST["current_date"];
	$pay= $_POST["pay"];
	
	$sql = "INSERT INTO invoice (C_BookingID, I_name, I_activity, I_date, I_time, I_fee, I_Court, I_CurrentDate, I_CurrentTime, I_PayMethod)
	
	VALUES
	
	('$ID', '$Name', '$Activity', '$Date', '$Time', '$Fee', '$court','$c_date','$c_time','$pay')";
	
	session_start();
	$_SESSION['C_BookingID'] = $ID;
	
	if(!mysqli_query($con,$sql))
		{
			die("Error" . mysqli_error($con));
		}
		else
		{
		echo "<script>alert('Booking Information Confirm !'); window.location.href = 'Current Booking PrintPDF_M.php';</script>";
		}
	mysqli_close($con);
	}
?>	

		