<?php

// sql to create table
$sql = "CREATE TABLE userCredentials (
  id INT(6) UNSIGNED UNIQUE AUTO_INCREMENT PRIMARY KEY,
  uName VARCHAR(30) NOT NULL,
  uEmail VARCHAR(30) NOT NULL,
  uPassword VARCHAR(50),
  uPhone VARCHAR(15),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

if ($conn->query($sql) === TRUE) {
    echo "\nTable userCredentials created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
