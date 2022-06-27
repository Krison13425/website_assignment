<?php

	include("conn.php");
	date_default_timezone_set("Asia/Kuala_Lumpur");
	
	if (isset($_POST["submit"])){
		
	$cdate = date('Y-m-d');
	$ctime = date('H:i:s');
	$Name=$_POST["name"];
	$Email=$_POST["email"];
	$IC=$_POST["ic"];
	$Phone=$_POST["phone"];
	$activity=$_POST["activity"];
	$date=$_POST["date"];
	$time=$_POST["time"];
	$fee=$_POST["fee"];
	$id=$_POST['id'];
	$court=$_POST['court'];
	$paym=$_POST['pay'];
	$pays = 'paid';
	$status='pending';

	$sql1="SELECT * FROM booking WHERE C_Date='$date' AND C_time='$time' AND C_Activity='$activity' AND C_Court='$court'";
	
	if ($result = mysqli_query($con,$sql1))
	{
	$rowcount = mysqli_num_rows($result);
	}
	if ($rowcount == 1)
	{
	echo "<script>alert('Time Peroid Booked , Pls Select other time'); window.history.back();</script>";
	exit();
	}
	if ($fee == 0)
	{
		echo "<script>alert('Activity Unavailable'); window.history.back();</script>";
		exit();
	}
	else
	{
	$sql = "INSERT INTO booking (AC_ID,C_Name, C_Email, C_IC, C_Phone, C_Activity, C_Date, C_Time, C_Fee, C_Court,C_CurrentDate,C_CurrentTime,C_PayMethod,C_PayStatus,C_BookingStatus)
	
	VALUES
	
	('$id','$Name', '$Email', '$IC', '$Phone', '$activity', '$date', '$time', '$fee', '$court','$cdate','$ctime','$paym','$pays','$status')";
		
	session_start();
	$_SESSION['C_IC'] = $IC;
		
	if(!mysqli_query($con,$sql))
	{
	die("Error" . mysqli_error($con));
	}
	echo "<script>alert('Booking Successfully'); window.location.href = 'Further Bookinng Invoice_M.php';</script>";
	}
	mysqli_close($con);
	}

?>