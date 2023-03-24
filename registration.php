<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Open the file in append mode
    $file = fopen("user_data.csv", "a");

    // Write the username and password to the file
    fputcsv($file, array($username, $password));

    // Close the file
    fclose($file);

    // Redirect the user to the dashboard
    header("Location: booking.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Tallinn University of Technology – Web Technologies Project - HTML & CSS">
    <meta name="keywords" content="web_project, Throw It, book a collection">
    <meta name="author" content="Dark Side">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <div class="form-wrapper">
        <form id="signup" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
          <div class="terms">
            <p>By clicking Agree &amp; Join, you agree to the <br>
              Throw It
              <a href="user_agreement.php">User Agreement</a>
              , and
              <a href="privacy_policy.php">Privacy Policy</a>.
            </p>
          </div>
          <br>
          <button type="submit" class="signup">Agree &amp; Join</button>
          <div class="or">
            <a>or</a>
          </div>
        </form>
        <button type="button" class="login" onclick="window.location.href='login.php';">Already have an account? Log in</button>
      </div>
    </div>
    <script src="js/show-password.js"></script>
    <script src="js/error-messages.js"></script>
  </body>
</html>