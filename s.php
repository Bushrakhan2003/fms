<!DOCTYPE html>
<html>
<head>
	<title>Login/Register</title>
	<style>
		body {
			background-color: #F7F7F7;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			background-color: #FFFFFF;
			width: 400px;
			margin: 0 auto;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.3);
			margin-top: 50px;
		}
		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}
		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
			box-sizing: border-box;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: #FFFFFF;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
		.error {
			color: #FF0000;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Login/Register</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="home.html">
					<h2>Login</h2>
					<?php if(isset($_GET['login_error'])) { ?>
					<div class="error"><?php echo $_GET['login_error']; ?></div>
					<?php } ?>
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" required>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required>
					<input type="submit" value="Login">
				</form>
			</div>
			<div class="col-md-6">
				<form method="post" action="s.php">
					<h2>Register</h2>
					<?php if(isset($_GET['register_error'])) { ?>
					<div class="error"><?php echo $_GET['register_error']; ?></div>
					<?php } ?>
					<label for="username">Username:</label>
					<input type="text" id="username" name="username" required>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required>
					<label for="confirm_password">Confirm Password:</label>
					<input type="password" id="confirm_password" name="confirm_password" required>
					<input type="submit" value="Register">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
