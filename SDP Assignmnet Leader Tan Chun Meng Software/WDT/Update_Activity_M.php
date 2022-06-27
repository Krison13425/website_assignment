<!DOCTYPE HTML>
<html>
	<head>
		<title>MR.Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<header><button class="btn btn1" onclick="window.location.href='Activity List_M.php'">Back</button></header>
	`	<?php
			include("conn.php");
			$id = intval($_GET["id"]);
			$result = mysqli_query($con, "SELECT * FROM ac WHERE AC_ID=$id");
			while ($row = mysqli_fetch_array($result))
			{
		?>
		<form action="update_M.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row["AC_ID"];?>">
		<div class="box">
		<h1 style="font-family: 'Permanent Marker', cursive; color: gold; font-size:20px;">Upadate Activity</h1><br>
			<center>
			<?php if ($row['AC_Pic'] == "")
			{
				echo '<img src="default.png">';
			}
			else{
				echo '<img style="width:50px"src="upload/'.$row['AC_Pic'].'">';
			}?>
			<div class="inputBox">
			<input type ="text" name ="name" required required  pattern="^[a-zA-Z- ]{0,30}$" title="No Number Allowed!! Please provide a correct name" value="<?php echo $row["AC_Name"];?>" >
			<label>Name</label>
			</div>
			
			<div class="inputBox">
			<input type="text" name="price"  pattern="^[0-9.]{0,5}$"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "5" required="required" value="<?php echo $row["AC_Price"];?>">
			<label>Price</label>
			</div>
			
			<div class="inputBox">
			<input type="text" name="time" value="<?php echo $row["AC_TimeAvailable"];?>">
			<label>Operation Time</label>
			</div>
			
			<input type="submit" name="update" value="Upadate"/>
			</center>
			</div>
		</div>
		</form>
		<?php
			}
		?>
	</body>
</html>