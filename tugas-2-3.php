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

$sql = "CREATE TABLE pegawai (
    id_pegawai INT UNSIGNED PRIMARY KEY,
    nama_pegawai VARCHAR(50) NOT NULL,
    id_jabatan INT UNSIGNED NOT NULL,
    gaji INT UNSIGNED NOT NULL,
    FOREIGN KEY (id_jabatan) REFERENCES jabatan(id_jabatan));";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>