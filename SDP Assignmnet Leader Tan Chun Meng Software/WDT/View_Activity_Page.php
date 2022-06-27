<!DOCTYPE html>
<html>
	<head>
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="home.css">
	</head>
	<body>
	<header>
	<button class="btn btn1" onclick="window.location.href='Homepage.html'">Back</button>
	</header>
		<?php
			
			include("conn.php");
			
			$i = 1;
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
				echo '<img src="upload/'.$row['AC_Pic'].'"><br>';
			}
			echo '<h3>'.$row['AC_Name'].'</h3>';
			echo '<button class="btn btn1" id="myBtn'.$i.'">View More</button> ';
			echo '</div>';
	
	
		?>
		
			<!-- The Modal -->
			<div id="myModal<?php echo $i ?>" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
			<span class="close" id="close<?php echo $i ?>">&times;</span>
			<h3><?php
			if ($row['AC_Pic'] == "")
			{
				echo '<img src="default.png">';
			}
			else{
				echo '<img src="upload/'.$row['AC_Pic'].'">';
			} ?></h3>
			<div class="item">
			<p>Activity:&nbsp;&nbsp;&nbsp;<?php echo $row["AC_Name"] ?></p>
			<p>Price:&nbsp;&nbsp;&nbsp;RM&nbsp;<?php echo $row["AC_Price"] ?>&nbsp;per Hour</p>
			<p>Operating Time:&nbsp;&nbsp;&nbsp;<?php echo $row["AC_TimeAvailable"] ?></p>
			<p>Description:&nbsp;&nbsp;&nbsp;<?php echo $row["AC_Description"] ?></p>
			<?php echo '<button class="btn btn2" onclick="window.location.href=\'Booking.php?id='.$row['AC_ID'].'\'">Book</button>';?>
			
			</div>
			</div>

			</div>

			<script>
			// Get the modal
			var modal<?php echo $i ?> = document.getElementById("myModal<?php echo $i ?>");

			// Get the button that opens the modal
			var btn<?php echo $i ?> = document.getElementById("myBtn<?php echo $i ?>");

			// Get the <span> element that closes the modal
			//var span = document.getElementsByClassName("close")[0];
			var span<?php echo $i ?> = document.getElementById("close<?php echo $i ?>");

			// When the user clicks the button, open the modal 
			btn<?php echo $i ?>.onclick = function() {
			  modal<?php echo $i ?>.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span<?php echo $i ?>.onclick = function() {
			  modal<?php echo $i ?>.style.display = "none";
			}

			window.onclick = function(event) {
			  if (event.target == modal<?php echo $i ?>) {
				modal.style<?php echo $i ?>.display = "none";
			  }
			}
			</script>

			<?php
			$i++;
			}
			}
			?>
		
	</body>
</html>