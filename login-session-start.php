<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered username and password are valid
    if (preg_match('/^[A-Za-z][A-Za-z0-9_.]{4,14}$/', $username) && 
        preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@_!%*?&])[A-Za-z\d@_!%*?&]{8,15}$/', $password)) {

        if (($handle = fopen("user_data.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($data[0] === $username && $data[1] === $password) {
                    // Regenerate the session ID
                    session_regenerate_id(true);

                    // Set the session variable
                    $_SESSION['loggedIn'] = true;

                    // Redirect to booking.php if the username and password are valid
                    header("Location: booking.php");
                    exit;
                }
            }
            fclose($handle);
        }

        // Display error message if the username and password are invalid
        $errorMessage = "Seems that either your username or password is wrong.";
    } else {
        // Display error message if the username and password are invalid
        $errorMessage = "Invalid username or password format.";
    }
}
?>