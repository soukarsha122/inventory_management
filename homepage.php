<html>
<head>
 	<title>MERCERIA</title>
	<style>
        	body {
                	background-color: powderblue;
		}
        	div.header {
                	padding: 10px;
                	text-align: center;
                	color: mediumblue;
                	//background-color: green;
                	font-size: 20px;
                	font-family: Times New Roman;
        	}
		#SearchProductName{
  			width: 80px; height: 25px;
			<!--,width:10em,height:2em,-->
		} 
		input {
			font-family: Arial;
			font-size: 15px;
		}
		input[type=submit] {
            		background-color: mediumblue;
            		color: white;
            		align-content: center;
			width: 20em; height: 2em;
            	}
    		table, th, td {
    			font-family: Arial;
  			border: 1px;
  			color: white;
  			text-align: center;
  			font-size: 15px;
		}	
		div.footer {
   			position: fixed;
   			left: 0;
   			bottom: 0;
   			width: 100%;
   			text-align: left;
		}		
		div.transbox {
  			margin: 30px;
  			background-color: #ffffff;
  			border: 1px solid black;
  			opacity: 0.8;
			text-align: left;
			}

		div.transbox p {
  			margin: 1%;
			font-size: 20px;
  			color: #000000;
			}
	</style>
</head>
<body>
	<div class="header">
  		<h1>HOME</h1>
	</div>
<form action="homepage.php" method="post">
<!--Search button-->
	<br><br>
	<input type="text" size="50" name="valueToSearch" placeholder="Search products here by name">
	<input type="submit" id="SearchProductName" name="search" value="Search">

</form>
		<p style="text-align: right;font-family: Arial;color: mediumblue; margin-right:3%; ">Click here to login as customer || Click here to login as supplier</p>
<?php
	include('config.php');
	if(isset($_POST['search']))
	{
	 $item=strtolower($_POST['valueToSearch']);

	 $sql="SELECT `products`.* FROM `products` WHERE `products`.`Name`='$item'";
$result=mysqli_query($dbcon,$sql);
?>


<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
 		<td align="center" style="color:blue;"><strong><u>Name</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Description</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Price</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Image</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Status</strong></td>
</tr>

<?php
session_start();

if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
?>			<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Description']; ?></td> 
						<td><?php echo $row['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $row['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $row['Status']; ?></td> 
<?php		}
	 } 
	 else
		echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ;
   }
 ?> 
<br><br>
<form name="homepage.php" method="post" action="homepage.php">
<table width=100%>
<tr><th colspan="5" style="background-color: slategray; width: 25em; height: 2em;">Categories</th></tr>
    <tr><td><input type="submit" name="sub_btn" value="Vegetables"></td>
	    <td><input type="submit" name="sub_btn" value="Fruits"></td>
	    <td><input type="submit" name="sub_btn" value="Dairy"></td>
	    <td><input type="submit" name="sub_btn" value="Meat"></td>
	    <td><input type="submit" name="sub_btn" value="Pulses"></td> </tr>
    <tr><td><input type="submit" name="sub_btn" value="Spices"></td>
	    <td><input type="submit" name="sub_btn" value="Vegetable Oils"></td>
	    <td><input type="submit" name="sub_btn" value="Breakfast Essentials"></td>
	    <td><input type="submit" name="sub_btn" value="Health Drinks and Juices"></td>
	    <td><input type="submit" name="sub_btn" value="Soft Drinks"></td> </tr>
    <tr><td><input type="submit" name="sub_btn" value="Tea and Coffee"></td>
	    <td><input type="submit" name="sub_btn" value="Rice and Flour"></td>
	    <td><input type="submit" name="sub_btn" value="Salt and Sugar"></td>
	    <td><input type="submit" name="sub_btn" value="Chocolates and Chips"></td>
	    <td><input type="submit" name="sub_btn" value="Sauces and Pickles"></td> </tr>
    <tr><td><input type="submit" name="sub_btn" value="Baby Food"></td>
	    <td><input type="submit" name="sub_btn" value="Soups"></td>
	    <td><input type="submit" name="sub_btn" value="Eggs"></td>
	    <td><input type="submit" name="sub_btn" value="Bread"></td>
	    <td><input type="submit" name="sub_btn" value="Spreads"></td> </tr>
<!--
<tr>
       <td align="center"><h3><a href="index.php">Home</a></h3></td>
</tr>-->
</table>
</form>
<?php
include("config.php"); 
if(isset($_POST['sub_btn'])){
$p=$_POST['sub_btn'];
$sql="SELECT `products`.* FROM `products`,`categories` WHERE `categories`.`Cat_ID`=`products`.`Cat_ID` AND `categories`.`Name`='$p'";
$result=mysqli_query($dbcon,$sql);
?>


<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
 		<td align="center" style="color:blue;"><strong><u>Name</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Description</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Price</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Image</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Status</strong></td>
</tr>

<?php
if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
?>			<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Description']; ?></td> 
						<td><?php echo $row['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $row['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $row['Status']; ?></td> 
<?php		}
	 } 
	 else
		echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ;
   }
 ?> 
</table>
<br>
<?php
$sql="SELECT `products`.* FROM `products` WHERE `products`.`status`='Available'";
$result=mysqli_query($dbcon,$sql);
?>


<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
 		<td align="center" style="color:blue;"><strong><u>Name</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Description</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Price</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Image</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Status</strong></td>
</tr>

<?php
if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
?>			<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Description']; ?></td> 
						<td><?php echo $row['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $row['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $row['Status']; ?></td> 
						<td><a href="vproduct.php?pid=<?php echo $row['ID']; ?>">view product</a></td>
<?php		}
	 } 
	 else
		echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ;
 ?> 
</table>
</body>
</html>