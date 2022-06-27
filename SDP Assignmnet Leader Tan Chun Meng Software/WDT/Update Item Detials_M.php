<?php
if(isset($_POST["update"])){
    include("conn.php");
	
    $query = "UPDATE product SET P_Price = '" . $_POST["price"] . "' WHERE P_ID = '" . $_POST["id"] ."'";
    
    if(!mysqli_query($con,$query)){
        die("Error" . mysqli_error($con));
    }
    
    echo "<script>
    alert('Item Edited');
    window.location.href = 'Item List_M.php';
    </script>";
}
?>