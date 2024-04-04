<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $uName = $_POST["uName"];
    $uEmail = $_POST["uEmail"];
    $uPassword = $_POST["uPassword"];
    $uPhone = $_POST["uPhone"];

    include ('dbConnection.php');

    //insert data to table
    $insertUserQuery = "INSERT INTO userCredentials (uName, uEmail, uPassword, uPhone)
 VALUES ('$uName', '$uEmail', '$uPassword', '$uPhone')";

    if ($conn->query($insertUserQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insertUserQuery . "<br>" . $conn->error;
    }
}