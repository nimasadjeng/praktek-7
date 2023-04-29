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

$sql = "INSERT INTO jabatan (id_jabatan, nama_jabatan, gaji_pokok)
        VALUES('01', 'WEB DEVELOPER', '15000000')";

if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>