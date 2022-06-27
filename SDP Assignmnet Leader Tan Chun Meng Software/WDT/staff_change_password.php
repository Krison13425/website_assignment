<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mr. Smash</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script>
            $(function() {
                $("#header").load("header.html");
            });
        </script>
	</head>
	<body>
		<div id=header></div>
		<div class="box">
			<h2 style="font-family: 'Permanent Marker', cursive; font-size: 20px; color:gold;">Staff Change Password</h2>
			<form action="staff_password.php" method="post">
				<div class="inputBox">
					<input type ="text" name ="id" required ="required">
					<label>Staff ID</label>
				</div>
			
				<div class="inputBox">
					<input type ="text" name ="name" required ="required">
					<label>Staff Name</label>
				</div>
				
				<div class="inputBox">
					<input type ="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Please insert Minimum 8 Character! At Least One UpperCase Character, LowerCase Character and Number">
					<label>Password</label>
				</div>
				
				<div class="inputBox">
					<input type ="password" name="re-password" required ="required">
					<label>Confirm Password</label>
				</div>
				
			<center>	
				<a><input type="submit" value="CONFIRM" name="submit"></a> &nbsp;
				<a href='staff_login_page.php'><input type="button" value="CANCLE" name="submit"></a>
			</center>
			</form>	
		</div>
	</body>
</html>