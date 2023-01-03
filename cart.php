<html>
<head>
    <title>CART</title>
    <style>
    body {
  background-image: url('Upload/p1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 60%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;

}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color: #C5C5C5;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;

}
 h3 {
    text-align: center;
    color: #FE4C40;
    font-size: 73px;
    text-shadow: 4px 4px 8px orange;
}
h1 {
    text-align: center;
}
.button {

  display: inline-block;
  border-radius: 6px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<br>
<h3  ><i class="cart"> CART </i></h3>
<?php include("config.php"); ?>
<?php

$prid=3;
session_start();
$id= $_REQUEST['id'];
$uid= $_SESSION['ID'];

//$uid= session_id();
$qcart="INSERT INTO carts (userId, productId, quantity) VALUES ('".$uid."', '".$id."', '".$prid."')";
if(mysqli_query($dbcon,$qcart))
?>
<?php
?>
<table id="customers" width="50%" border="0" cellspacing="2" cellpadding="10" align="center">
<tr>
    <!--<td align="center"><strong>ID</strong></td>-->
    <th align="center"><strong>Name</strong></th>
    <th align="center"><strong>Description</strong></th>
    <th align="center"><strong>Price</strong></th>
    <th align="center"><strong>Qty</strong></th>
    <th align="center"><strong>Image</strong></th>
    <th align="center"><strong>Status</strong></th>
    <th align="center"><strong>Delete from Cart</strong></th>
    
    
</tr>
<?php
        $qr = "SELECT * FROM products WHERE Id IN(SELECT productId FROM carts WHERE userId=".$uid.")";
        $q1 = mysqli_query($dbcon,$qr);
            while($r= mysqli_fetch_array($q1)) {
?>
                <tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $r['Name']; ?></td>
						<td><?php echo $r['Description']; ?></td> 
						<td><?php echo $r['Price']; ?></td>
                        <td><?php echo $prid; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $r['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $r['Status']; ?></td> 
    					<td><a href="del_cart.php?id=<?php echo $r['ID']; ?>">Delete</a></td> 
 					</tr>
<?php
            }
?>

</table>
<br><br>
<h1><a href="bnow.php?upid=<?php echo $uid ;?>"><button class="button" style="vertical-align:middle"><span>BUY NOW</span></button></a></h1>
<h1><a href="productview.php" ><button class="button" style="vertical-align:middle"><span>BUY MORE</span></button></a></h1>

</body>
</html>