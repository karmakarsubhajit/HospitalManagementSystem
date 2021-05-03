<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "Hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "Delete from Doctors where Doctor_ID = '5'";
$ans = $conn->query($sql);
if ($ans === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>