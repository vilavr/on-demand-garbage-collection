<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
	<meta name="keywords" content="web_project, Throw It, book a collection">
	<meta name="author" content="Dark Side">
	<meta name="viewport" content="initial-scale=1">
	<title>Welcome to Throw It - Registration</title>
	<link rel="stylesheet" href="styles/registration.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/login.css">
	<link rel="icon" href="img/icon.png" type="image/x-icon">

	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
</head>

<body>
	<!-- Header section of the document -->
	<?php require_once('header.php'); ?>

	<!-- Content section of the document -->
	<div id="main" class="centered">
		<div class="join-header">
			<h1>Join Throw It</h1>
		</div>
		<form action="booking.php" method="post">
			<div class="input-lines">
				<div class="username-container">
					<input type="text" id="username" class="username" name="username" placeholder="Username" required pattern="[A-Za-z0-9!@#$%^&*()_+-=]{8,15}">
				</div>
				<div class="password-container">
					<input type="password" id="password" class="password" name="password" placeholder="Password" required pattern="[A-Za-z0-9!@#%^&*()_+-=]{8,15}">
					<button type="button" id="show-password" class="show-password" onclick="showPassword()">Show</button>
				</div>
			</div>


			<div class="terms">
				<p>By clicking Agree &amp; Join, you agree to the <br>
					Throw It
					<a href="user_agreement.php">User Agreement</a>
					, and
					<a href="privacy_policy.php">Privacy Policy</a>.
				</p>
			</div>
			<br>
			<button type="submit" class="signup" form="signup">Agree &amp; Join</button>

			<div class="or">
				<a>
					or
				</a>
			</div>

			<button type="button" class="login" onclick="window.location.href='login.php';">Already have an account?
				Log in</button>
		</form>
	</div>

	<script src="js/show-password.js"></script>
	<noscript>Your browser does not support JavaScript!</noscript>
</body>

</html>