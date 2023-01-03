<?php
include("config.php");
?>
<?php
	session_start();
	$cus_name=$_REQUEST['name'];
	$cus_email=$_REQUEST['email'];
	$cus_password=$_REQUEST['password'];
	$cus_phnno=$_REQUEST['phnno'];
	$path="nil";
	$dup_email=$_REQUEST['email'];

	$qry="SELECT ID FROM `customers` WHERE Email_ID='$dup_email'";
	$q1=mysqli_query($dbcon,$qry);
	$num=mysqli_num_rows($q1);
	if($num===0){
	
	$sql="INSERT INTO `customers`(Name,Email_ID, Password,Phone_no,Image,Status) VALUES ('$cus_name','$cus_email','$cus_password','$cus_phnno','$path','active')";
	echo $sql;
	if(mysqli_query($dbcon,$sql)){
	 echo "record Inserted";
	 $msg="welcome to your home page";
    	header("location:login.php?msg={$msg}");
	}else{
	echo "not inserted";
	}
}else{
	echo "Email id already exists. please try a different email id.";
}
?>
