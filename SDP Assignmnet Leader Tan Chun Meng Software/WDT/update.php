<?php
if(isset($_POST["update"])){
    include("conn.php");
	
    $query = "UPDATE ac SET AC_Price = '" . $_POST["price"] . "', AC_TimeAvailable = '" . $_POST["time"] . "' WHERE AC_ID = '" . $_POST["id"] ."'";
    
    if(!mysqli_query($con,$query)){
        die("Error" . mysqli_error($con));
    }
    
    echo "<script>
    alert('Activity Edited');
    window.location.href = 'Activity List.php';
    </script>";
}
?>