<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DataPegawai";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connnect to MySQL : " . mysqli_connect_errno();
        exit();
    }
?>