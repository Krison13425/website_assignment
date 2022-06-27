<?php 

if(isset($_POST["submit"])){

    include("conn.php");
	
	
	$target_dir = "upload/"; 
	$upload_status = 0;
	$target_file = $target_dir . basename($_FILES["Item_Pic"]["name"]);
	
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gid"){
		echo '<script>alert("Sorry, only JPG, JPEG, PNG $ GIF files are allowed.");
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
			
			$AC_Name =$_POST["name"];
			$AC_Price=$_POST["price"];
			$AC_Time=$_POST["time"];
			$AC_Description=$_POST["description"];
			
			$sql = "INSERT INTO ac (AC_Name,AC_TimeAvailable,AC_Price,AC_Description,AC_Pic) 
	
		VALUES
	
		('$AC_Name', '$AC_Time', '$AC_Price', '$AC_Description', '$file_name')";

		if(!mysqli_query($con,$sql))
		{
			die("Error" . mysqli_error($con));
		}
		else
		{
		echo "<script>alert('1 New Activity Added'); window.location.href = 'Manager_page.php';</script>";
		}
	}
	else
	{
		echo"<script> alert('Sry File is not Uploaded!');
				window.history.back();
				</script>";
	}
	}
   
	mysqli_close($con);
}

?>