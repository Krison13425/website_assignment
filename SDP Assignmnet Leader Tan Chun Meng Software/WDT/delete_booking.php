<?php 
include("conn.php");
$id = intval($_GET['id']);

$sql = "SELECT * FROM booking WHERE C_IC=$id";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
	$b_id = $row['C_BookingID'];
	$sql1 = "DELETE from invoice WHERE C_BookingID=$b_id";
	
	if( mysqli_query ($con,$sql1)){		
		echo "<script>
		alert('Delete Booking Sucessfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Delete Booking Unsucessfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}
}

$sql2 = "DELETE from booking WHERE C_IC=$id";

if(mysqli_query ($con,$sql2)){		
		echo "<script>
		alert('Delete Booking Sucessfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Delete Booking Unsucessfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}

mysqli_close($con);

?>
