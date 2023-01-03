<!DOCTYPE html>
<html>
<head>
  <title>CUSTOMER PROFILE</title>
  <style>
  	*{
  		margin-bottom: 0;
  		padding: 0;
  		font-family: century gothic;
  	}
    body {
        background-image:url("ww.jpg"); 
        height:100vh;
        background-size: cover;
        background-position: center;
		}
		.main{
			width: 400px;
            padding: 50px;
            border-radius: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.8);
            text-align:center;
            box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
            color: #fff;
		}
	ul{
		float: right;
		list-style-type: none;
		margin-top: 25px; 
	}
	ul li{
		display: inline-block;
	}
	ul li a{
		text-decoration: none;
		color:#fff;
		padding: 5px 20px;
		border: 1px solid #fff; 
		transition: 0.6s ease;
	}
	ul li a:hover{
		background-color: #fff;
		color: #000;
	}
	h1{
		text-align: center;
		display: block;

	}
</style>		
</head>
<body>
	<header>
		<div class="main">
<?php include("config.php"); ?>
<?php
	
	session_start();
	if (!isset($_SESSION['ID'])) {
		header('location:login.php');
	}
?>
		<h1>Welcome to your profile!</h1>
		
<?php	
	$qr = 	"SELECT 
				*
			FROM 
				`customers`
			WHERE 
				`ID` = ".$_SESSION['ID'];

	$q1 = mysqli_query($dbcon,$qr);
    if(mysqli_num_rows($q1) > 0)
 			{
				while($customer = mysqli_fetch_array($q1)) {
		
					 echo $customer["Name"];
 				}
			}
?>
		<ul>
		<li><a href="categories1.php">Home</a></li>
		<li><a href="chngpass1.php">Password Change</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</header>
</body>
</html>