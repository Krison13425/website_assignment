<?php 
include("conn.php");
$id = intval($_GET['id']);

$sql = "SELECT * FROM booking WHERE C_BookingID=$id";

$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
	$b_id = $row['C_BookingID'];
	$sql1 = "UPDATE booking set C_BookingStatus='Cancel' WHERE C_BookingID=$b_id";
	
	if( mysqli_query ($con,$sql1)){		
		echo "<script>
		alert('Update Status Successfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('Update Status Unsuccessfully');
		window.location.href = 'View Customer Booking List.php';
		</script>";
	}
}


mysqli_close($con);

?>
