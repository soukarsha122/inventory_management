<?php
include("config.php");
?>
<?php
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$comment=$_REQUEST['comment'];

	
	$sql="INSERT INTO `feedback`(Name,Email_ID,Comment) VALUES ('$name','$email', '$comment')";
	echo $sql;
	if(mysqli_query($dbcon,$sql)){
	 echo "Thank You for writing to us";
	  $msg= "Thank You for writing to us";
    	header("location:feedback.html?msg={$msg}");
	}else{
	echo "not inserted";
	}
?>
