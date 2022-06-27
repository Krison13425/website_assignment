<?php
session_start();
include("conn.php");

if(isset($_SESSION['C_BookingID'])){
			
$result = mysqli_query($con, "SELECT * FROM invoice WHERE C_BookingID='".$_SESSION['C_BookingID']."'");
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
		 <div class="box"> 
		 <center><h2 readonly style="font-family: 'Permanent Marker', cursive; font-size: 50px; color:gold;">Invoice</h2></center><br>
			<div class="inputBox">
			<input type="hidden" name="current_time" value="<?php echo "$row[I_CurrentTime]";?>">
			<input type="hidden" name="current_date" value="<?php echo "$row[I_CurrentDate]";?>">
			<label>Invoice ID</label><br>
				<input type="text" name="id" value="<?php echo "$row[I_id]";?>">
			</div>
			<div class="inputBox">
			<label>Customer Name</label><br>
				<input readonly type="text" name="name" value="<?php echo "$row[I_name]";?>" class="form-control customer name" > 
			</div>
			<div class="inputBox">
			<label>Activity</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_activity]";?>" class="form-control avtivity" name="activity" >
			</div>
			<div class="inputBox">
			<label>Date</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_date]";?>" class="form-control date" name="date">
			</div>
			<div class="inputBox">
			<label>Time</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_time]";?>" class="form-control time" name="time" >
			</div>
			<div class="inputBox">
			<label>Fee</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_fee]";?>" class="form-control fee" name="fee" >
			</div> 
			
			<div class="inputBox">
			<label>Court</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_Court]";?>" class="form-control court" name="court" >
			</div> 
			<div class="inputBox">
			<label>Payment Method</label><br>
				<input readonly type="text" value=" <?php echo "$row[I_PayMethod]";?>" class="form-control court" name="court" >
			</div> 
			<br>
			<center><?php echo '<button class="btn btn2" onclick="window.location.href=\'pdf.php?id='.$row['I_id'].'\'">Get Invoice</button>';?>
					<?php echo '<button class="btn btn2" onclick="window.location.href=\'Homepage.html\'">Home</button>';?>
		</div> 

	</form>  
	</body>  
<?php
}
}
session_destroy();
?>
</html>