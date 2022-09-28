<?php
$servername = "localhost";
$username = "webganyi_codewithgautam";
$password = "Gautam@123@mysql";
$database = "webganyi_contactdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>