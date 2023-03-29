<?php
require_once('login-session-start.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Throw It - Log In</title>
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
	<div class="welcome-header">
		<h1>Welcome to <br> Throw It</h1>
	</div>
      <div class="form-wrapper">
        <form id="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="input-lines">
            <div class="username-container">
              <input type="text" id="username" class="username" name="username" placeholder="Username" required pattern="^[A-Za-z][A-Za-z0-9_.]{4,14}$">
              <div class="error-msg" id="username-error"></div>
            </div>
            <div class="password-container">
              <input type="password" id="password" class="password" name="password" placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@_!%*?&])[A-Za-z\d@_!%*?&]{8,15}$">
              <button type="button" id="show-password" class="show-password">Show</button>
              <div class="error-msg" id="password-error"></div>
            </div>
          </div>
		  <?php if(isset($errorMessage)): ?>
            <script>
			  alert('<?php echo $errorMessage; ?>');
			</script>
          <?php endif; ?>
          <div class="forgot-password">
			<a href="#">Forgot password?</a>
		  </div>
          <br>
          <button type="submit" class="login">Log in</button>
          <div class="or">
            <a>or</a>
          </div>
        </form>
        <button type="button" class="signup" onclick="window.location.href='registration.php';">New to Throw It?
				Join now</button>
      </div>
    </div>
    <script src="js/show-password.js"></script>
    <script src="js/error-messages.js"></script>
  </body>
</html>