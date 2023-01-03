<html>
    <head>        <style>
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
            height: 700px;
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
        div.main{
            width: 400px;
            margin: 100px auto 0px auto;
        }
        h1{
            text-align: center;
            padding: 20px;
            font-family: sans-serif;
        }
        div.register{
            <!--background-color: rgba(0,0,0,0.5);-->
            width: 100%;
            font-size: 18px;
            border-radius: 10px;
           <!-- border: 1px solid rgba(255,255,255,0.3);-->
            box-shadow: 2px 2px 15px rgba(0,0,0,0.3);
            color: #fff;
        }
       input[type=submit] {
            background-color: #2eb935;
            color: white;
            align-content: center;
        
        }
        input[type=text] {
            border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 250px;
            height:55px;
            font-size: 22px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        input[type=email] {
            padding: 5px 5px;
            border:0;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
                       width: 250px;
            height:55px;
            font-size: 22px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        input[type=tel] {
            padding: 5px 5px;
            border:0;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
           width: 250px;
            height:55px;
            font-size: 22px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        input[type=password] {
            padding: 5px 5px;
            border:0;
            background: none;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
           width: 250px;
            height:55px;
            font-size: 22px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        input[type=file]{
            padding: 5px 5px;
            border:0;
            background: none;
            margin: 20px auto;
            text-align: center;
            width: 200px;
            outline: none;
            color: white;
            transition: 0.25s;
        }
        .register input[type="text"]:focus, input[type="email"]:focus,input[type="tel"]:focus, .register input[type="password"]:focus{
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

        <title>Customer registration page</title>
    </head>
    <body>
        <form class="box" action="registeracc.php" method="POST">
            <br><br>
    <!--<div class="main">-->
       <div class="register">
        <h1>Registration</h1>
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="email" name="email" id="email" placeholder="Email ID" required>
        <input type="tel" name="phnno" id="phnno" placeholder="Phone No." required>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <input type="submit" value="Register"></h2></center>
    <!--</div>-->
    </div>
    	<p class="login-register-text">Have an account?<a href="login.php">Login Here</a></p>
        <a href="index2.html" class="btn" style="font-size: 24px;
            text-decoration: none;
            padding: 10px 20px;
            border: 5px solid #fff;
            transition: 0.6s ease;
            position: absolute;
            top:90%;
            left: 75%;
            float: right;
">BACK</a>
        </form>
    </body>
</html>