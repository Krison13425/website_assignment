<?php

if (isset($_POST["login"])){
	
	include("conn.php");
	
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$type = $_POST['type'];
	
	$sql = "SELECT * FROM staff WHERE Staff_Name='$name' AND Staff_Password='$pass' AND Staff_type='$type'";
	
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
		
		if($row['Staff_Name']==$name && $row['Staff_Password'] && $row['Staff_type']=='Staff')
		{
		session_start();
		$_SESSION['staffname'] = $name;
		echo"<script>alert('Welcome $name');
		window.location.href = 'staff_page.php'</script>";
		}
		elseif($row['Staff_Name']==$name && $row['Staff_Password'] && $row['Staff_type']=='Manager')
		{
			session_start();
			$_SESSION['staffname'] = $name;
			echo"<script>alert('Welcome $name');
			window.location.href = 'Manager_page.php'</script>";
		}
		else
		{
		echo"<script>alert('Username or Password is incorrect!');
		window.history.back();</script>";
		}
}
?>