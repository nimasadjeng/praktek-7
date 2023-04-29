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

$sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, id_jabatan, gaji)
        VALUES('0001', 'NIMAS', '01', '15000000')";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>