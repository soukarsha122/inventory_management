<?php
/*include('config.php');

//$linemail=$_REQUEST['email'];
//$linpass=$_REQUEST['password'];

$lqy="select ID from suppliers where Email_ID = '".$_REQUEST['email']."' and Password= '".$_REQUEST['password']."'";


    $lq=mysqli_query($dbcon,$lqy);
$nor= mysqli_num_rows($lq);

    if ($nor === 1) {
       session_start();
       $sup=mysqli_fetch_array($lq);
       $_SESSION['ID']=$sup['ID'];
       header('location:sprofile.php');
    }
    else {
        header('location:slogin.php? message=Email or Password Incorrect ');
    }
*/
?>
<?php
include("config.php");
?>
<?php
  $username=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  $sql="SELECT `ID` FROM `suppliers` WHERE `Email_ID`='$username' AND `Password`='$password' ";
  $q1=mysqli_query($dbcon,$sql);
  $num=mysqli_num_rows($q1);
  if($num===1){
    session_start();
    $user=mysqli_fetch_array($q1);
    $_SESSION['ID']=$user['ID'];
    header('location:pro_viewfile.php');
  }
  else{
    header('location:slogin.php? message=Email or Password Incorrect ');
  }
?>