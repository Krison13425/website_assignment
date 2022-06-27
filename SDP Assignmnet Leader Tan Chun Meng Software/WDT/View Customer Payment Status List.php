<!DOCTYPE HTML>
<html>
	<head>
		<title>Mr. Smash</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="booking_list.css">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
		
		
		<link rel="stylesheet" href="sidebar.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>
	<div class="menu-btn">
     <i class="fas fa-bars"></i>
   </div>
	<div class="side-bar">
     <div class="close-btn">
     <i class="fas fa-times"></i>
     </div>
     <div class="menu">
	 
	 <div class="item"><a href="staff_page.php"><i class="fas fa-home"></i>Home</a></div>
	 
       <div class="item">
         <a class="sub-btn"><i class="fab fa-product-hunt"></i>Item<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="Add New Item.html" class="sub-item">Add New Item</a>
           <a href="Item List.php" class="sub-item">Update Item</a>
         </div>
       </div>
	   
	   <div class="item">
         <a class="sub-btn"><i class="fas fa-dumbbell"></i>Activity<i class="fas fa-angle-right dropdown"></i></a>
         <div class="sub-menu">
           <a href="Add New Activity.html" class="sub-item">Add New Activity</a>
           <a href="Activity List.php" class="sub-item">Update Activity</a>
         </div>
       </div>
	   
       <div class="item"><a href="View Customer Booking List.php"><i class="fas fa-tasks"></i>View Booking List</a></div>
	   
	   <div class="item"><a href="View Customer Payment Status List.php"><i class="fas fa-tasks"></i>Payment Status List</a></div>
	   
	    <div class="item"><a href="Book Now.php"><i class="fas fa-calendar-check"></i>Book Now</a></div>
		
		<div class="item"><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></div>
       
	   </div>
	   </div>
	<center><h1>Customer Payment Status Check list</h1></center>
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
	<form action="Payment Status_search.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	</input>
	</form>
	</center>
	<br>
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
			$sql = "SELECT * from booking WHERE C_BookingStatus = 'pending'";
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
						echo'<td><button class="btn btn2" onclick="window.location.href=\'Payment Status List Paid Update.php?id='.$row['C_BookingID'].'\'">Paid</button></td>';
						echo'<td><button class="btn btn2" onclick="window.location.href=\'Payment Status List Unpaid Update.php?id='.$row['C_BookingID'].'\'">Unpaid</button></td>';
					}
			}
			echo"</table>";
			}else{
				echo"0 result";
			}
			mysqli_close($con);
			
			?>
			<script type="text/javascript">
		  $(document).ready(function(){

			 $('.sub-btn').click(function(){
			   $(this).next('.sub-menu').slideToggle();
			   $(this).find('.dropdown').toggleClass('rotate');
			 });


			 $('.menu-btn').click(function(){
			   $('.side-bar').addClass('active');
			   $('.menu-btn').css("visibility", "hidden");
			 });

			 $('.close-btn').click(function(){
			   $('.side-bar').removeClass('active');
			   $('.menu-btn').css("visibility", "visible");
			 });
		   });
		   </script>
			</body>
</html>
