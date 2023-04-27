<?php
$servername = "localhost";
$database = "dsd";
$username = "admin";
$password = "admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO tbbb (ip) VALUES ('$ip')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>