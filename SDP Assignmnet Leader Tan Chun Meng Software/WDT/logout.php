<?php
session_start();

if(isset($_SESSION['staffname'])){
	
	session_destroy();
	
	echo"<script>location.href='staff_login_page.php'</script>";
}
else{
	echo"<script>location.href='staff_login_page.php'</script>";
}
?>