<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mr. Smash</title>
		<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
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
			<h2 style="font-family: 'Permanent Marker', cursive; font-size: 40px; color:gold;">Staff Login</h2>
			<form action="staff_login.php"  method="post">
				<div class="inputBox">
					<input type="text" name="name" required="required">
					<label>Staff Name</label>
				</div>
				
				<div class="inputBox">
					<input type="Password" name="password" required="required">
					<label>Password</label>
				</div>
				
				<div class="inputBox">
					<input type="text" name="type" required="required">
					<label>User Type</label>
				</div>
			<center>	
				<input type="submit" name="login" value="LOGIN">
				<br><br>
				<a href='staff_change_password.php' style="color:white">CHANGE PASSWORD</a><br><br>
			</center>
			</form>	
		</div>
	</body>
</html>
