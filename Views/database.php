<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'webtech';

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
}
?>