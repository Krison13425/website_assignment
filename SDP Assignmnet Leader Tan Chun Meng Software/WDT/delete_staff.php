<?php 
include("conn.php");
$id = intval($_GET['id']);
$result = mysqli_query ($con,"DELETE FROM staff WHERE Staff_ID=$id");
mysqli_close($con);
	echo "<script>
    alert('Delete Staff Sucessfully');
    window.location.href = 'View Staff List.php';
    </script>";

?>
