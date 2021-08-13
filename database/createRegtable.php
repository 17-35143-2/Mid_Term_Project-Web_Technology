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
$sql = "CREATE TABLE registration (
id INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
        email VARCHAR(30)NOT NULL ,
        username VARCHAR(30) NOT NULL,
        DOB VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        cpassword VARCHAR(50) NOT NULL,
        address VARCHAR(50) NOT NULL,
        gender VARCHAR(50) NOT NULL,
        
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
