<?php
$$host = 'db';
$user = 'task_user';
$password = 'root';
$database = 'task_db';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
?> 