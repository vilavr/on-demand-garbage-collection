<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
	<meta name="keywords" content="web_project, Throw It, book a collection">
	<meta name="author" content="Dark Side">
	<meta name="viewport" content="initial-scale=1">

	<title>Welcome to Throw It - Log In</title>
	<link rel="stylesheet" href="styles/login.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="icon" href="img/icon.png" type="image/x-icon">

	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
</head>

<body>
	<!-- Header section of the document -->
	<?php require_once('header.php'); ?>

	<!-- Content section of the document -->
	<div id="main" class="centered">
		<div class="welcome-header">
			<h1>Welcome to <br> Throw It</h1>
		</div>
		<form action="booking.php" method="post" id="login">
			<div class="input-lines">
				<div class="username-container">
					<input type="text" id="username" class="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9!@#$%^&*()_+-=]{8,15}">
				</div>
				<div class="password-container">
					<input type="password" id="password" class="password" name="password" placeholder="Password" required pattern="[A-Za-z0-9!@#%^&*()_+-=]{8,15}">
					<button type="button" id="show-password" class="show-password" onclick="showPassword()">Show</button>
				</div>
			</div>


			<div class="forgot-password">
				<a href="#">Forgot password?</a>
			</div>
			<br>
			<button type="submit" class="login" form="login">Log in</button>
			<div class="or">
				<a>
					or
				</a>
			</div>

			<button type="button" class="signup" onclick="window.location.href='registration.php';">New to Throw It?
				Join now</button>
		</form>
	</div>

	<script src="js/show-password.js"></script>
</body>

</html>