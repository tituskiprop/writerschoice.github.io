<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="content";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO register (firstname, secondname, email, password, confirmpassword)

VALUES

('$_POST[firstname]','$_POST[secondname]', '$_POST[email]', '$_POST[password]','$_POST[confirmpassword]')";

if ($conn->query($sql) === TRUE) {
  echo "Accoount  created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>