<?php 
include('config.php');

$dup_email=$_REQUEST['email'];


//$spassword=$_REQUEST['password'];
//$phash = password_hash($spassword,PASSWORD_DEFAULT);
$qry="SELECT ID FROM `suppliers` WHERE Email_ID='$dup_email'";
  $q1=mysqli_query($dbcon,$qry);
  $num=mysqli_num_rows($q1);
  if($num===0){

  $squery="INSERT INTO `suppliers` (Name, Email_ID, Password, Phone_no, Image, Status) VALUES ('".$_REQUEST['name']."','".$_REQUEST['email'] ."','".$_REQUEST['password']."', '".$_REQUEST['phno']."', '0', '1')";
  echo $squery;
  if(mysqli_query($dbcon,$squery)) {
    echo "registered succesfully";
    $msg="welcome to your home page";
    header("location:pro_addfile.php?msg={$msg}");
  }
  else {
    echo "can't register";
  }
}else{
  echo "Email id already exists. please try a different email id.";
}

?>
