<?php include("config.php"); ?>
<?php

    $id = $_REQUEST['id']; 

    $sql = "DELETE FROM `carts` WHERE productId = $id "; 

    
    if(mysqli_query($dbcon,$sql)){
    	echo "record Deleted";
	header("location:cart.php");
	}
	else{
	echo "Failed to delete";
	} 

?>