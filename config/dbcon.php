<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "phpecom";

    // Create database connection
    $con = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: ". mysqli_connect_error());
    }

?>