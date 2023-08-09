<?php
echo "ola mundo";

$host = 'db';
$user = 'task_user';
$password = 'root';
$database = 'task_db';

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$query = "SELECT * from tb_usuarios";
    $result = $conn->query($query);
    while($fetch = $result->fetch_row()){
        echo "<p>". $fetch[0] . " - " . $fetch[1] . " - " . "</p>";
    }

?>