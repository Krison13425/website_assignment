<?php 

if(isset($_POST["submit"])){

    include("conn.php");
	
	
	$target_dir = "pic/"; 
	$upload_status = 0;
	$target_file = $target_dir . basename($_FILES["Item_Pic"]["name"]);
	
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gid"){
		echo '<script>alert("Sorry, only JPG, JPEG, PNG or GIF files are allowed.");
		window.history.back();</script>';
		$upload_status = 0;
	}
	else{
		$upload_status = 1;		
	}
	if ($upload_status == 1)
	{
	if (move_uploaded_file($_FILES["Item_Pic"]["tmp_name"], $target_file))
	{
			$file_name = basename($_FILES["Item_Pic"]["name"]);
			
			$Pr_Name =$_POST["name"];
			$Pr_Price=$_POST["price"];
			
			$sql = "INSERT INTO product (P_Name,P_Price,P_Pic) 
	
		VALUES
	
		('$Pr_Name', '$Pr_Price','$file_name')";

		if(!mysqli_query($con,$sql))
		{
			die("Error" . mysqli_error($con));
		}
		else
		{
		echo "<script>alert('1 New Item Added'); window.location.href = 'staff_page.php';</script>";
		}
	}
	else
	{
		echo"Sorry, there was an error uploading your file.";
	}
	}
   
	mysqli_close($con);
}

?>