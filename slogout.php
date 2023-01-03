<?php
	
	session_start();
	if (!isset($_SESSION['ID'])) {
		header('location:login.php');
	}
?>
<?php 
	
	session_start();

	session_destroy();

	header('location:slogin.php');

 ?>