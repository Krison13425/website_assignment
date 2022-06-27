<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		<div id=header></div>
				<?php
				include("conn.php");
				$id = intval($_GET["id"]);
				$result = mysqli_query($con, "SELECT * FROM ac WHERE AC_ID=$id");
				while ($row = mysqli_fetch_array($result))
				{
				?>	
				
				<form action="Current Booking Insert_M.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row["AC_ID"];?>">
					<div class="box">
							<div class="box1">
							<h2 style="font-family: 'Permanent Marker', cursive; font-size: 30px; color:gold;">Personal Details</h2><br>
								<div class="inputBox">
									<input type ="text" name ="name" required required  pattern="^[a-zA-Z- ]{0,30}$" title="No Number Allowed!! Please provide a correct name">
									<label>Name</label>
								</div>
								
								<div class="inputBox">
									<input type="email" name="email"  size="64" maxLength="64" required  pattern="^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]{0,30}[@][a-zA-Z]{0,10}[.][c][o][m]$" title="Please provide a correct e-mail address Example:'example@example.com'">
									<label>E-mail</label>
								</div>
							
									<div class="inputBox">
									<input type="text" name="ic" maxlength="12" required="required">
									<label>IC/Passport</label>
								</div>
								
								<div class="inputBox">
									<input  type = "number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11" required="required">
									<label>Phone No</label>
								</div>
								<h2 style="font-family: 'Permanent Marker', cursive; font-size: 30px; color:gold;">Payment Method</h2><br>
								<div class="inputBox">
								<label>Payment Method</label><br><br>
									<select name="pay" class="checkbox" required>
										<option value="">-Select-</option>
										<option value= "Card">Cerdit/Debit Card</option>
										<option value= "Cash">Cash</option>
									</select required="required">
								</div>
								<input type="submit" name="submit" value ="SUBMIT" />
							</div>
							<div class="box2">	
							<h2 style="font-family: 'Permanent Marker', cursive; font-size: 30px; color:gold;">Activity Details</h2><br>							
								<div class="inputBox">
								<label>Activity</label><br><br>
									<input readonly type="text" name="activity" value="<?php echo $row["AC_Name"];?>" required="required">
								</div>
								
								<div class="inputBox">
								<label>Date</label><br><br>
									<input type="text" name="date" value="<?php echo date('Y-m-d');?>" required="required">
								</div>
							
								<div class="inputBox">
								<label>Time</label><br><br>
										<select name="time" class="checkbox" required>
											<option value="">-Select-</option>
											<option value= "9am">9am</option>
											<option value= "10am">10am</option>
											<option value= "11am">11am</option>
											<option value= "12pm">12pm</option>
											<option value= "1pm">1pm</option>
											<option value= "2pm">2pm</option>
											<option value= "3pm">3pm</option>
											<option value= "4pm">4pm</option>
											<option value= "5pm">5pm</option>
											<option value= "6pm">6pm</option>
											<option value= "7pm">7pm</option>
											<option value= "8pm">8pm</option>
											<option value= "9pm">9pm</option>
										</select required="required">
								</div>
								
								<div class="inputBox">
								<label>Court</label><br><br>
										<select name="court" class="checkbox" required>
											<option value="">-Select-</option>
											<option value= "Court 1">Court 1</option>
											<option value= "Court 2">Court 2</option>
											<option value= "Court 3">Court 3</option>
											<option value= "Court 4">Court 4</option>
											<option value= "Court 5">Court 5</option>
											<option value= "Court 6">Court 6</option>
											<option value= "Court 7">Court 7</option>
											<option value= "Court 8">Court 8</option>
											<option value= "Court 9">Court 9</option>
											<option value= "Court 10">Court 10</option>
										</select required="required">
										
								</div>
								<br>
								<div class="inputBox">
								<label>Fee/Per Hour</label><br><br>
									<input readonly type="text" name="fee" value="<?php echo $row["AC_Price"];?>">
								</div>
								
								<a href="Current Book_M.php"><input type="button" name="back" value="BACK" />
							</div>
							
					</div>
				</form>
					<?php
						}
					?>
	</body>
</html>