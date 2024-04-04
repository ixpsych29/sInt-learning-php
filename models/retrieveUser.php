<?php

//search data in table
if (isset($_GET['uName'])) {
    $uRetrievalName = $_GET['uName'];
    $searchUserQuery = "Select uName, uEmail, uPhone from userCredentials where uName = '$uRetrievalName'";
    $result = $conn->query($searchUserQuery);
}