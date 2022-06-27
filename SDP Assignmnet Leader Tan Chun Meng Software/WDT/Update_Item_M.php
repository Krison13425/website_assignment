<!DOCTYPE HTML>
<html>
	<head>
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="home.css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<header><button class="btn btn1" onclick="window.location.href='Item List_M.php'">Back</button></header>
	`	<?php
			include("conn.php");
			$id = intval($_GET["id"]);
			$result = mysqli_query($con, "SELECT * FROM product WHERE P_ID=$id");
			while ($row = mysqli_fetch_array($result))
			{
		?>
		<form action="Update Item Detials_M.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row["P_ID"];?>">
		<div class="box">
		<h1 style="font-family: 'Permanent Marker', cursive; color: gold; font-size:20px;">Upadate Item</h1><br>
			<center>
			<?php if ($row['P_Pic'] == "")
			{
				echo '<img src="default.png">';
			}
			else{
				echo '<img style="width:50px"src="pic/'.$row['P_Pic'].'">';
			}?>
			<div class="inputBox">
			<input type ="text" name ="name" value="<?php echo $row["P_Name"];?>" >
			<label>Name</label>
			</div>
			
			<div class="inputBox">
			<input type="text" name="price"  pattern="^[0-9.]{0,5}$"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "5" required="required" value="<?php echo $row["P_Price"];?>">
			<label>Price</label>
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