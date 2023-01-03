<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>GROCERY STORE-S_login</title>
</head>
<body>
	<div class="container">
		<form action="slogin_acc.php" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" id="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="sreg.php">Register Here</a>.</p><br>
			 <p class="login-register-text">Forgot Password?<ul><a href="chngpass.php">Change Password</a></ul></p><br>
			 <a href="index2.html" class="btn" style="font-size: 18px;
            text-decoration: none;
            color: #6c5ce7;           
            padding: 8px 15px;
            border: 5px solid #6c5ce7;
            border-radius: 30px;
            transition: 0.6s ease;
            position: absolute;
            top:75%;
            left: 48%;
            float: right;
">BACK</a>
		</form>
	</div>
</body>
</html>