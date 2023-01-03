<!DOCTYPE html>
<html>
<head>
  <title>DISPLAYING ALL PRODUCTS</title>
  <style>
        body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-image: url("bg5.jpeg");
                background-size: 120%;
				transform: translate(0%,5%);
                background-position: center;
                opacity: 1.0;
				text-decoration: none;
				 background-repeat: no-repeat;
				 font-size: 18px;
        }
		button{
			font-size: 15px;
			text-color:white;
            border:0;
            width: 150px;
            background-color: black ;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid black;
            padding: 10px 10px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
		}
		button {
  transition-duration: 0.4s;
}

button:hover {
  background-color: silver;
  color: white;
}
		</style>
</head>
<body>
<?php include("config.php"); ?>

<table width="80%" border="0" cellspacing="2" cellpadding="5" align="center">
	<tr>
	<tr>
		<td colspan="5" align="center">
		<h1>PRODUCTS LIST</h1>
		</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<h3><a href="sprofile.php"><button type="button" class="btn btn-primary ml-4 pl-2">Go to Profile</button></a></h3>
		<div class="container-fluid my-4">
			<div class="row my-2">
				<a href="pro_addfile.php"><button type="button" class="btn btn-primary ml-4 pl-2">Add New Product</button></a>
			</div>
		</div>
		<br>
		<br>
		</td>
	</tr>
<div align="center">	
<?php	
		session_start();

	$qr = 	"SELECT 
				*
			FROM 
				`products` WHERE Suppliers_ID='".$_SESSION['ID']."'";

	$q1 = mysqli_query($dbcon,$qr);
    //if(mysqli_num_rows($q1) > 0)
 			//{
				?><table>
				<?php ?>
					<tr>
				<?php
				$w=1;
				while($r = mysqli_fetch_array($q1))  { 
					if($w <= 4){			?>
					<td>
					<div align="center" class="card" style="width: 20rem;" >
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<?php echo 'Name:- ', $r['Name']; ?><br>
						<img class="img-responsive" src="<?php echo $r['Image'];?>" alt="Card Image Caption" width="150" height ="150" ><br>
					<div class="card-body"  color="red" style="font-size: 18px;
					font-weight: bold;
											">
						<?php echo 'Description:- ' ,$r['Description']; ?><br>
						<?php echo 'Price:- ', $r['Price']; ?><br>
						<?php echo 'Quantity:- ', $r['Qty']; ?><br>
						<?php echo 'CreatedAt:- ', $r['CreatedAt']; ?> <br>
						<?php echo 'UpdatedAt:- ', $r['UpdatedAt']; ?><br>
						<!--<?php echo 'Status:- ', $r['Status']; ?>-->
 							<a href="pro_updtdfile.php?id=<?php echo $r['ID']; ?>"><button type="button" class="btn btn-primary ml-4 pl-2"><u>Order</button></a>
    					<a href="pro_delfile.php?id=<?php echo $r['ID']; ?>"><button type="button" class="btn btn-primary ml-4 pl-2">Delete</button></a><br>
 					</div></div>
					</td>
					<?php
					}
					else{
						?>
						</tr> <?php
					}
					$w =$w +1;
					?>
					
					 
					
 <?php					}?>



</table>

<!--<table width="80%" align="center">
	<tr>
		<td colspan="5" align="center">
			<br>
			<br>
			<br>
			<br>
		<h3><a href="logout.php">Logout</a></h3>
		</td>
	</tr>
</table>-->
</body>
</html>