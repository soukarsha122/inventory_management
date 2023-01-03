<?php 

    include("config.php"); 

    if(isset($_POST['btn'])) 

    {  
        $pro_name=$_POST['name'];
        $pro_desc=$_POST['description'];
        $pro_price=$_POST['price'];
        $pro_Qty=$_POST['Qty'];
        $order=$_POST['Order_Placed'];
        $pro_create=$_POST['createdAt'];
        $pro_update=$_POST['UpdatedAt'];
        $pro_sts=$_POST['status'];
		$pro_id = $_GET['id']; 
        //$oldQty=0;
        //$oldQty= $res['Qty'];

        $q = "SELECT * FROM products WHERE ID='".$_GET['id']."'"; 

        $query=mysqli_query($dbcon,$q); 

        $res= mysqli_fetch_array($query);
        $pro_Qty=$res['Qty'];


        $old_Qty=$_POST['old_Qty'];

        $r=$pro_Qty+$old_Qty;
        $q= "update products set Price= '$pro_price', Qty= '$r',Order_Placed='$old_Qty', UpdatedAt='$pro_update', Status='$pro_sts' where ID=$pro_id"; 
        
        $query=mysqli_query($dbcon,$q); 

        header('location:pro_viewfile.php'); 

    }  

    else if(isset($_GET['id']))  

    { 

        $q = "SELECT * FROM products WHERE ID='".$_GET['id']."'"; 

        $query=mysqli_query($dbcon,$q); 

        $res= mysqli_fetch_array($query); 

    } 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
		<style>
        body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-image: url("bg4.jpeg");
                background-size: cover;
				transform: translate(0%,42%);
                //background-position: center;
                opacity: 1.0;
				font-size: 18px;
        }
		.container{
            width: 370px;
            padding: 40px;
            border-radius: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-70%,10%);
            background-color: rgba(0,0,0,0.7);
            text-align:left;
            box-shadow: 0px -1px 20px 0px darkgrey;
            color: white;
			
        }
		.container input[type="submit"]{
            border:0;
            width: 130px;
            background color: white;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 10px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
			font-size: 15px;
        }
		button{
			font-size: 15px;
            background-color: black;
            color: white;
			align: center;
			transform: translate(50%,50%);
			border-radius: 50%;
			padding: 14px 40px;
		}
		.container input[type="submit"] {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.container input[type="submit"]:hover {
  background-color: #555555;
  color: white;
}
	</style>
</head>
<body>
	<div class="f"><a href="pro_viewfile.php"><button type="button" class="btn btn-primary ml-4 pl-2">BACK</button></a>
	</div>
	<div class="container">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<h2 class="my-4">Order existing product</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $res['Name'];?>" disabled/>
            </div> 
            <div class="form-group">
                <br><label>Description</label>
				<input type="text" class="form-control" name="description" value="<?php echo $res['Description'];?>" disabled/>
            </div> 
            <div class="form-group">
                <br><label>New Price</label>
				<input type="text" class="form-control" name="price" value="<?php echo $res['Price'];?>" disabled/>
                <!--<input type="radio" class="form-control" name="price" value="per kg">
                <label for="per kg">per kg</label>
                <input type="radio" class="form-control" name="price" value="per piece">
                <label for="per piece">per piece</label><br>-->

            </div> 
            <div class="form-group">
                <br><label>Quantity</label>
				<input type="text" class="form-control" name="old_Qty" required/>
            </div>

            <!--<div class="form-group">
                <br><label>Image</label>
				<input type="file" class="file_input" name="image" value="<?php echo $res['Image'];?>" disabled/>
            </div>
            <div class="form-group"> 
				<br><label>Creation Date</label> 
				<input type="date" class="form-control" placeholder=" Creation Date" name="createdAt" value="<?php echo $res['CreatedAt'];?>" disabled/> 
            </div> -->
            <div class="form-group"> 
				<br><label>Order Date</label> 
				<input type="date" class="form-control" placeholder="Updation Date" name="UpdatedAt" value="<?php echo $res['UpdatedAt'];?>" required/> 
			</div>
            <!--<div class="form-group"> 
				<br><label>Item status</label> 
				<input type="radio" class="form-control" name="status" value="available">
				<label for="available">AVAILABLE</label>
				<input type="radio" class="form-control" name="status" value="unavailable">
                <label for="unavailable">UNAVAILABLE</label><br>
            </div> -->  
            <div class="form-group">
				<br><input type="submit" class="btn btn-danger" value="Order" name="btn">
			</div>
            
		</form>
	</div>
</body>
</html>