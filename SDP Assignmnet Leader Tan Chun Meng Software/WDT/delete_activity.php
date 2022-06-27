<?php 
include("conn.php");
$id = intval($_GET['id']);
$result = mysqli_query ($con,"DELETE FROM ac WHERE AC_ID=$id");
mysqli_close($con);
	echo "<script>
    alert('Delete Acivity Sucessfully');
    window.location.href = 'Activity List.php';
    </script>";

?>