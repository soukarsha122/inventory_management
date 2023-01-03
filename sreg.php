<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->

	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<form action="sreg_acc.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; ">Register</p>
			<div class="input-group">
				<input type="text" id="name" name="name" placeholder="Name"  required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email ID" name="email" id="email" required>
			</div>
			<div class="input-group">
				<input type="tel" id="phno" name="phno" placeholder="Phone no."  required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" id="passowrd" required>
           		</div>

			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="slogin.php">Login Here</a>.</p>
			<a href="index2.html" class="btn" style="font-size: 12px;
            text-decoration: none;
            color: #6c5ce7;           
            padding: 8px 15px;
            border: 5px solid #6c5ce7;
            border-radius: 30px;
            transition: 0.6s ease;
            position: absolute;
            top:79%;
            left: 48%;
            float: right;
">BACK</a>
		</form>
	</div>
</body>
</html>