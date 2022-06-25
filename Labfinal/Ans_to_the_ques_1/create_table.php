<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labfinal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE users (id int(10), name varchar(20), age int(5), username varchar(20), password varchar(30))";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>