<?php
session_start();
include("conn.php");
if(isset($_SESSION['C_IC'])){
			
$result = mysqli_query($con, "SELECT * FROM booking WHERE C_IC='".$_SESSION['C_IC']."'");
while ($row = mysqli_fetch_array($result))
{
?>
<!DOCTYPE HTML>
<HTML>
	<head>
	<meta charset="utf-8">
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<form action="Current Booking invoice_insert_M.php" method="POST" enctype="multipart/form-data">
		 <div class="box"> 
		 <input type="hidden" name="current_time" value="<?php echo "$row[C_CurrentTime]";?>">
		 <input type="hidden" name="current_date" value="<?php echo "$row[C_CurrentDate]";?>">
		 
		 <center><h2 readonly style="font-family: 'Permanent Marker', cursive; font-size: 50px; color:gold;">Booking Statement</h2></center><br>
			<div class="inputBox">
			<label>Booking ID</label><br>
				<input type="text" name="id" value="<?php echo "$row[C_BookingID]";?>">
			</div>
			<div class="inputBox">
			<label>Customer Name</label><br>
				<input readonly type="text" name="name" value="<?php echo "$row[C_Name]";?>" class="form-control customer name" > 
			</div>
			<div class="inputBox">
			<label>Activity</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_Activity]";?>" class="form-control avtivity" name="activity" >
			</div>
			<div class="inputBox">
			<label>Date</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_Date]";?>" class="form-control date" name="date">
			</div>
			<div class="inputBox">
			<label>Time</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_Time]";?>" class="form-control time" name="time" >
			</div>
			<div class="inputBox">
			<label>Fee</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_Fee]";?>" class="form-control fee" name="fee" >
			</div> 
			
			<div class="inputBox">
			<label>Court</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_Court]";?>" class="form-control court" name="court" >
			</div> 
			
			<div class="inputBox">
			<label>Payment Method</label><br>
				<input readonly type="text" value=" <?php echo "$row[C_PayMethod]";?>" class="form-control pay" name="pay" >
			</div> 
 
			<br>
			<center><input type="submit" value="Confirm" name="submit"></center>
		</div> 
		
	</form>  
	</body>  
<?php
}
}

?>
</html>