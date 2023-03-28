<?php
// Set session expiration time to 30 minutes
ini_set('session.gc_maxlifetime', 1800);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);

ob_start();

// Start the session
session_start();

// If the session variable is not set, redirect to the login page
if (!isset($_SESSION['loggedIn'])) {
    echo "<script>alert('Your session has expired. Please log in again.'); window.location.href='login.php';</script>";
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
    exit;
}

ob_end_flush();
?>