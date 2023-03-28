<?php 
// Start the session

if (isset($_SESSION['loggedIn'])) {
    // Show header for logged in users
    include 'header-logged-in.php';
} else {
    // Show header for non-logged in users
    include 'header-non-logged-in.php';
}
?>
