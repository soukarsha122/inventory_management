<html>
    <head>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-image: url("f4.png");
                background-size: cover;
                opacity: 1.0;
        }    
        .box{
            width: 500px;
            height: 600px;
            padding: 40px;
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
        .box h1{
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
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 250px;
            height:55px;
            font-size:25px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .box input[type="email"]:focus, .box input[type="password"]:focus{
            width: 280px;
            border-color: #2ecc71;
        }
        .box input[type="submit"]{
             border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
         .box input[type="submit"]:hover{
            background: #2ecc71;
         }
         .login-register-text a {
         text-decoration: none;
          color: #6c5ce7;
        }
        a.btn:hover{
    background-color: #fff;
    color: #000;
}

        </style>
        <title>Customer Login</title>
    </head>
    <body>
        <form class="box" action="loginacc.php" method='POST'>
        <h1>LOGIN</h1>

        <input type="email" name="email" id="email" placeholder="Email ID" required><br>
    
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <h4><input type="submit" value="Login"></h4><br>
        <p><a href="chngpass1.php">Forgot Password?</a></p><br>
        <p class="login-register-text">Create new account?<a href="register.php">Register Here</a></p>
        <a href="index2.html" class="btn" style="font-size: 24px;
            text-decoration: none;
            padding: 10px 20px;
            border: 5px solid #fff;
            transition: 0.6s ease;
            position: absolute;
            top:85%;
            left: 70%;
            float: right;
">BACK</a>
        </form>

    </body>
</html>