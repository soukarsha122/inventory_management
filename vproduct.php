<!DOCTYPE html>
<html>
<head>
  <title>VIEWING PRODUCT</title>
  <style>
   body {
    width: 100%;
    min-height: 100vh;
    background-image: url("bg6.jpg");
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
        }    
        .box{
          font-size:23px;
            width: 300px;
            padding: 40px;
            border-radius: 30px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(3, 27, 178, 0.6);
            text-align:center;
            box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
            color: #fff;
          }
        .box input[type="button"]:hover{
            background: #2ecc71;
         }
         .box .box1{
          border-radius: 30px;
         }
         .box button:hover{
          background: #2ecc71;    
          }
          .box input[type="button"]:hover{
            background: #2ecc71;
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
<?php include("config.php"); ?>
<p class="box">
<?php
    #ID is need to be fetched from previos page(home page).For tseting purpose ID is set to static.
    //session_start();
    $qry = "SELECT * FROM products WHERE ID='".$_REQUEST['pid']."' ";
    
//$uid= $_SESSION['ID'];
#echo $uid;
    $qryr= mysqli_query($dbcon,$qry);

        while ($r = mysqli_fetch_array($qryr)) {
        $pto=$r['Image'];
        echo"Product Name: "; echo $r['Name']."<br><br><br>"."<img class='img-set' src= '$pto' width='190' height='190' >"."<br><br><br>";
          echo"Product Description: ";echo $r['Description']."<br>"; 
          echo"Product Price: ";echo $r['Price']."<br>"; 
            echo"Currently "; echo $r['Status']."<br>";
           $pid= $r['ID']; 
            

            


        }

?>

<br><br>

<a  href="cart.php?id=<?php echo $pid ;?>"><button class="button" style="vertical-align:middle"><span>ADD TO CART</span></button></a>
<a href="productview.php" class="btn" style="font-size: 24px;
            background-color: #fff;
            font-weight: bold; 
            text-decoration: none;
            color: #000;           
            padding: 8px 15px;
            border: 5px solid #000;
            border-radius: 30px;
            transition: 0.6s ease;
            position: absolute;
            top:105%;
            left: 35%;
            float: right;
">BACK</a>
</p>

</body>
</html>