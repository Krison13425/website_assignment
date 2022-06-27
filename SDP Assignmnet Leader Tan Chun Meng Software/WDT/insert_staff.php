<?php 
require_once('password-policy.php');
if(isset($_POST["submit"])){

    include("conn.php");
	
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$pass=$_POST['password'];
	$repass=$_POST['re-password'];
	$type=$_POST['type'];
	
	$policy = new PasswordPolicy();
	$policy->min_length = 8;
	$policy->max_length = 64;

	
	if($policy->validate($pass)){
		echo "<script> alert('Password OK');
		</script>";
		}
		else{
			echo "<script> alert('Invalid! Minimum 8 Character!');
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
		
    $query = "INSERT INTO staff (Staff_Name,Staff_Gender,Staff_Password,Staff_type) VALUES
    ('$name','$gender','$repass','$type')";

    if(!mysqli_query($con,$query)){
        die("Error" . mysqli_error($con));
    }
    
    echo "<script>
    alert('1 New Record Added');
    window.location.href = 'staff_create.php';
    </script>";
	}
	}	
?>