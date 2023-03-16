<?php
session_start();
if (isset($_POST['submit-form'])) {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // Store form data in session variable
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['surname'] = $surname;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $address;
}
?>