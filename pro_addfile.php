<!DOCTYPE html>
<html>
<head>    <?php
        session_start();
        if (!isset($_SESSION['ID'])) {
            header('location:slogin.php');
        }?>
	<title>Addition</title>
	<style>
        body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-image: url("bg3.jpeg");
                background-size: cover;
				transform: translate(0%,425%);
                //background-position: center;
                opacity: 1.0;
				font-size: 18px;
        }
		.container{
            width: 400px;
            padding: 40px;
            border-radius: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-60%,-33%);
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
			font-size: 18px;
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
		button{
			font-size: 15px;
            background-color: black;
            color: white;
			align: center;
			transform: translate(20%,-400%);
			border-radius: 50%;
			padding: 14px 40px;
			
		}
		.msg{
			color: white;
            transform: translate(25%,800%);
		}
	</style>	
</head>
<body>	<div class="bt">
        <h3><a href="pro_viewfile.php"><button type="button" class="btn btn-primary ml-4 pl-2">View Products</button></a></h3>
	</div>
	<div class="container">
		<h2 class="my-4">Add New Product</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Name</label>
				<input type="text" class="form-control" name="name" value="" required/>
            </div>
	        <div class="form-group">
                <br><label>Category</label>
                <input type="radio" class="form-control" name="category" value="12">
                <label for="VEGETABLES">VEGETABLES</label>
                <input type="radio" class="form-control" name="category" value="13">
                <label for="FRUITS">FRUITS</label>
                <input type="radio" class="form-control" name="category" value="14">
                <label for="DAIRY PRODUCTS ">DAIRY PRODUCTS</label>
                <input type="radio" class="form-control" name="category" value="15">
                <label for="PULSES">PULSES</label><br>
                <input type="radio" class="form-control" name="category" value="16">
                <label for="COOKING OILS">COOKING OILS</label>
                <input type="radio" class="form-control" name="category" value="17">
                <label for="RICE AND FLOURS">RICE AND FLOURS</label><br>				
            </div>		
            <div class="form-group">
                <br><label>Description</label>
				<input type="text" class="form-control" name="description" value="" required/>
            </div> 
            <div class="form-group">
                <br><label>Price</label>
				<input type="text" class="form-control" name="price" value="" required/>
                <!--<input type="radio" class="form-control" name="price" value="per kg">
                <label for="per kg">per kg</label>
                <input type="radio" class="form-control" name="price" value="per piece">
                <label for="per piece">per piece</label><br>-->

            </div> 
            <div class="form-group">
                <br><label>Quantity</label>
				<input type="text" class="form-control" name="Qty" value="" required/>
            </div>
            <div class="image-box">
                <br><label>Image</label>
				<input type="file" class="file_input" name="image" required/>
            </div> 
            <div class="form-group"> 
                <br><label>Creation Date</label> 
                <input type="date" class="form-control" placeholder=" Creation Date" name="createdAt"> 
            </div> 		
            <div class="form-group"> 
                <br><label>Item status</label> 
                <input type="radio" class="form-control" name="status" value="available">
                <label for="available">AVAILABLE</label>
                <input type="radio" class="form-control" name="status" value="unavailable">
                <label for="unavailable">UNAVAILABLE</label><br>
            </div> 

			<br><input type="submit" class="btn btn-primary" value="Add Product" name="btn" />
		</form>
    <?php include("config.php"); 


        if(isset($_POST["btn"])) { 
			$pro_cat=$_REQUEST['category'];
			$pro_name=$_REQUEST['name'];
            $pro_desc=$_REQUEST['description'];
            $pro_price=$_REQUEST['price'];
            $pro_Qty=$_POST['Qty'];
            $pro_create=$_REQUEST['createdAt'];
            $pro_sts=$_REQUEST['status'];
            $sup_id=$_SESSION['ID'];

            // store n upload image
            $image_name ="Upload/".$_FILES["image"]["name"];
            $temp_name=$_FILES["image"]["tmp_name"];
             
 
            $sql="INSERT INTO `products`(`Cat_ID`,`Name`,`Description`,`Price`,`Qty`,`Image`,`Suppliers_ID`,`CreatedAt`,`Status`) VALUES ('$pro_cat','$pro_name','$pro_desc','$pro_price','$pro_Qty','$image_name','$sup_id','$pro_create','$pro_sts')";
             move_uploaded_file($temp_name,$image_name);
            if(mysqli_query($dbcon,$sql)){?>
            <br><b text align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?phpecho'<script type="text/javascript">
Record inserted successfully.
</script></b>
<?php
            }   

        } 
    ?>  
	

</body>
</html>