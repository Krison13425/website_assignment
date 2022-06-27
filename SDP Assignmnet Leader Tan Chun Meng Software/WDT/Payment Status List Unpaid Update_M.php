<?php 
include("conn.php");
$id = intval($_GET['id']);

$sql = "SELECT * FROM booking WHERE C_BookingID=$id";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
	$b_id = $row['C_BookingID'];
	$sql1 = "DELETE from invoice WHERE C_BookingID=$b_id";
	
	if( mysqli_query ($con,$sql1)){		
		echo "<script>
		alert('Delete Booking Sucessfully');
		window.location.href = 'View Customer Payment Status List_M.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Delete Booking Unsucessfully');
		window.location.href = 'View Customer Payment Status List_M.php';
		</script>";
	}
}

$sql2 = "DELETE from booking WHERE C_BookingID=$id";

if(mysqli_query ($con,$sql2)){		
		echo "<script>
		alert('Delete Booking Sucessfully');
		window.location.href = 'View Customer Payment Status List_M.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Delete Booking Unsucessfully');
		window.location.href = 'View Customer Payment Status List_M.php';
		</script>";
	}

mysqli_close($con);

?>
