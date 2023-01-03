<html>
<head>
    <title>ORDER</title>
    <style>
    body {
  background-image: url('order3.gif');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

 h3 {
    text-align: center;
    color: #FE4C40;
    font-size: 73px;
    text-shadow: 4px 4px 8px orange;
}
h5 {
    text-align: center;
    color: #329e35;
    font-size: 55px;
    text-shadow: 1px 1px 3px green;
}
h1 {
    text-align: center;
}
.button {
  background-color: #0081ff; 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 15px;
}
</style>
</head>
<body>
<h3 > <br>MY INVENTORY <br></h3>


<h5>Thank You</h5><br>
<br><br><h5>
<?php include("config.php"); ?>

<?php
session_start();
//$uid=$_REQUEST['upid'];
//$uid= session_id();
$uid= $_SESSION['ID'];

#echo $uid;
$qc="SELECT * FROM carts WHERE userId='".$uid."'";
$qcr=mysqli_query($dbcon,$qc);
    while($c = mysqli_fetch_array($qcr)) {
       # echo "in";
        #echo $c['userId'];
        #echo $c['productId'];
        $upt= "INSERT INTO userProduct (userId, productId,purchasedOn,status) VALUES ('".$c['userId']."','".$c['productId']."',CURRENT_DATE,'active')";
        mysqli_query($dbcon,$upt);
        $dc="DELETE FROM carts WHERE userId='".$c['userId']."' and productId='".$c['productId']."'";
        mysqli_query($dbcon,$dc);
    }
    echo " Order Placed Successfully!"."<br>";
    


?>
</h5>
<h1><a href="productview.php?upid=<?php echo $uid ;?>"><button class="button" >BUY AGAIN</button></a></h1>
<h1><a href="profile.php"><button class="button" >GO BACK TO PROFILE</button></a></h1>
</body>
</html>