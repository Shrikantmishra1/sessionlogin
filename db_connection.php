<?php
$servername = "localhost";
$database = "sessionlogin";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";



?>