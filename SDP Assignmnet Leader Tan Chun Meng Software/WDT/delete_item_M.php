<?php 
include("conn.php");
$id = intval($_GET['id']);
$result = mysqli_query ($con,"DELETE FROM product WHERE P_ID=$id");
mysqli_close($con);
	echo "<script>
    alert('Delete Item Sucessfully');
    window.location.href = 'Item List_M.php';
    </script>";

?>