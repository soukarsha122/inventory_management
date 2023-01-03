<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Mercearia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>View Products</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="main">
 			<ul>
 				<li><a href="index2.html" style="font-size: 18px;
			text-decoration: none;
			color: #000;
			border-radius: 10%;
			padding: 10px 10px;
			border: 1px solid #91BF81;
			transition: 0.6s ease;
			position: absolute;
			left: 90%;
			top: 12%;
			float: right;"><b>Go to login page</b></a></div></li>
 				<li><a href="categories1.php" style="font-size: 18px;
			text-decoration: none;
			color: #000;
			border-radius: 10%;
			padding: 10px 10px;
			border: 2px solid #91BF81;
			transition: 0.6s ease;
			position: absolute;
			left: 1.5%;
			top: 12%;
			float: right;"><b>Go to Categories</b></a></li>
 			</ul>
 		</div>
		<h3 class="text-center" id="textChange" style="font-size: 80px; font-family: Monospace;">PRODUCTS WINDOW</h3>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h5 class="text-center" id="textChange" style="font-size: 50px; font-family: Fantasy;"><b>ALL PRODUCTS</b></h5>
					<hr>
					<div class="row" id="result">
						<?php
							$sql="SELECT * FROM products WHERE `status`='available'";
							$result=mysqli_query($dbcon,$sql);
							while($row = mysqli_fetch_array($result)) {
						?>
						<div class="col-md-3 mb-2">
							<div class="card-deck" style="width: 100%; 
								display: flex;
								flex-wrap: wrap;
								justify-content: space-around;
								margin: auto;
								flex-basis: 48%;
								text-align: center;
								border-radius: 7px;
								margin-bottom: 20px;
								color: #fff;
								position: relative;">
								<div class="card border-secondary" style="width: 170px;height: 530px; background: transparent; border-radius: 20px;">
									<img src="<?= $row['Image'];?>" style="width: 350px;height: 250px; align-self: center;
									" class="card-img-top">
									<div class="card-img-overlay">
										<h6 style="margin-top: 280px;" class="text-light bg-info text-center rounded p-1"><?= $row['Name'];?></h6>
									</div>
									<div class="card-body">
										<h4 class="card-title text-danger"style="font-size: 18px;
											margin-top: 70px;"><b>Price: <?= number_format($row['Price']);?>/-</b></h4>
										<a href="vproduct.php?pid=<?php echo $row['ID']; ?>" class="btn" style="font-size: 18px;
											background: #000;
											text-decoration: none;
											border: 2px solid #000;
											color: #fff;
											transition: 0.6s ease;
											position: absolute;
											top:74%;
											left: 35%;
											float: right;">Show More</a>
										<a href="cart.php?id=<?php echo $row['ID']; ?>" class="btn" style="font-size: 18px;
											background: #000;
											text-decoration: none;
											border: 2px solid #000;
											color: #fff;
											transition: 0.6s ease;
											position: absolute;
											top:84%;
											left: 35%;
											float: right;">Add to cart</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</header>
</body>
</html>