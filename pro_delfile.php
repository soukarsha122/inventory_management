<?php include("config.php"); ?>
<?php

    $id = $_GET['id']; 

    $sql = "DELETE FROM `products` WHERE ID = $id "; 

    
    if(mysqli_query($dbcon,$sql)){
    	echo "record Deleted";
	header("location:pro_viewfile.php");
	}
	else{
	echo "Failed to delete";
	} 

?>

