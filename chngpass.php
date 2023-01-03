<?php
include("config.php");
?>
<html>
<head>
    <style>
        body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-image: url("Upload/p1.jpg");
                background-size: cover;
                background-position: center center;
                opacity: 1.0;
        }    
        .box{
            width: 320px;
            padding: 40px;
            border-radius: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0,0,0,0.8);
            text-align:center;
            box-shadow: 0px -1px 20px 0px darkgrey;
            color: white;
        }
         .box h1{
            text-align: center;
            font-family: sans-serif;
            margin-bottom: 10px;
            padding: 13px 0;
            color: white;
            text-transform: uppercase;
            font-weight: 500;
        }
        .box input[type="email"], .box input[type="password"]{
            border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #0ae2f3;
            padding: 14px 10px;
            width: 250px;
            font-size:25px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .box input[type="submit"]{
            border:0;
            width: 130px;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 10px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .box input[type="email"]:focus, .box input[type="password"]:focus{
            width: 280px;
            border-color: #2ecc71;
        }
        .box input[type="submit"]:hover{
            background: #2ecc71;
         }
    </style>
</head>
    <body>
        <form class="box" action="chngpass.php" method='POST'>
        <h1>Change Password</h1>

        <input type="email" name="email" id="email" placeholder="enter your email" required><br>
    
        <input type="password" name="password" id="password" placeholder="enter new password" required><br>
        <h4><input type="submit" name="submit" value="Change Password"></h4><br>
        </form>

    </body>
</html>
<?php

  if(isset($_POST['submit']))
  {
    $id=$_POST['email'];
    $pwd=$_POST['password'];
    
    $query="UPDATE `suppliers` SET `Password`= '$pwd' WHERE `Email_ID`='$id' ";  
    $data=mysqli_query($dbcon,$query);
    if($data)
    {
        echo "Password Changed Successfully";
        header('location:sprofile.php');
    }
    else{
        echo "Failed to change password";
    }
  }
  ?>