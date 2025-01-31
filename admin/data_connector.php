<?php

function connect() {
    // Database connection details
    $servername = "ecommerce-db.cluster-c9acea4ma2rh.ap-southeast-2.rds.amazonaws.com";
    $username = "admin";
    $password = "admin123";
    $database = "ecommerce-db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Return the connection object
    return $conn;
}

?>
