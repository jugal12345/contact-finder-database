<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS viewer (
username VARCHAR(20) NOT NULL,
name VARCHAR(30) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  echo "Table created";
}

mysqli_close($conn);
?>
