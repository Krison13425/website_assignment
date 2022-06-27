<?php
require_once('password-policy.php');
if(isset($_POST["submit"])){

    include("conn.php");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$repass = $_POST['re-password'];
	
	$policy = new PasswordPolicy();
	$policy->min_length = 8;
	$policy->max_length = 64;
	$policy->min_uppercase_chars = 1;
	
	$sql1 = "SELECT Staff_ID FROM staff WHERE Staff_Name='$name' ANd Staff_ID='$id'";
	
	if ($result = mysqli_query($con,$sql1))
	{
		$rowcount = mysqli_num_rows($result);
	}
	if ($rowcount == 1)
	{	
		if($policy->validate($pass)){
		echo "<script> alert('Password OK');
		</script>";
		}
		else{
			echo "<script> alert('Invalid! Minimum 8 Character! At Least One Upper Character !');
				window.history.back();
				</script>
				";
				exit();
		}
		
		if($pass !== $repass){
			
		echo "<script> alert('Password not match');
			 window.history.back();
			 </script>";
		}
		else{
			$sql = "UPDATE staff SET Staff_Password='$repass'
			WHERE Staff_Name ='$name'";

			if(!mysqli_query($con,$sql))
			{
			die("Error" . mysqli_error($con));
			}
    
			echo "<script>
			alert('Password Changed Sucessfully');
			window.location.href = 'staff_login_page.php';
			</script>";
			}
	}
	else
	{
		echo"<script>alert('User not found !');
		window.history.back();</script>";
	}
	}
?>
