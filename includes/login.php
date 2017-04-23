<?php
session_start();
require_once 'functions.php';
if (isset($_POST['login'])) {
    $mail = $conn->real_escape_string($_POST['mail']);
    $password = $_POST['password'];
    if (!empty($mail) && !empty($password)) {
        if (checkUser($mail, $password)) {
            $_SESSION['logged'] = $mail;
        } else {
            $error = 'Wrong credentials.';
            $_SESSION['error'] = $error;
        }
    } else {
        $error = "All fields required.";
        $_SESSION['error'] = $error;
    }
}
?>