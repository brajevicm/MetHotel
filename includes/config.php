<?php
define('DB_NAME', 'methotels');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_TABLE', 'users');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die('Connection error: ' . $conn->connect_error);
}
?>