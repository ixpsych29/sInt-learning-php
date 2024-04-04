<?php

include ('dbCredentials.php');

// Create connection
$conn = new mysqli($HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<li>DB Connection successful</li>";