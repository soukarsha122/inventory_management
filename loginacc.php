<?php
include("config.php");
?>
<?php
	
	$username=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$sql="SELECT `ID` FROM `customers` WHERE `Email_ID`='$username' AND `Password`='$password' ";
	$q1=mysqli_query($dbcon,$sql);
	$num=mysqli_num_rows($q1);
	if($num===1){
		session_start();
		$user=mysqli_fetch_array($q1);
		$_SESSION['ID']=$user['ID'];
		header('location:profile.php');
		//header('location:profile.php');
	}
	else{
		header('location:login.php? message=Email or Password Incorrect ');
	}
?>