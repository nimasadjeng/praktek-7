<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn){
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "CREATE TABLE jabatan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    deskripsi TEXT);";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>