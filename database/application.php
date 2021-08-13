<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Rental_Property_Management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE application (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
        email VARCHAR(30)NOT NULL ,
        City VARCHAR(30) NOT NULL,
        Region VARCHAR(50) NOT NULL,
        date VARCHAR(50) NOT NULL,
        
        signature VARCHAR(50) NOT NULL,
        
        
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Application created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
