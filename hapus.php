<?php
if(isset($_POST['id_pegawai'])) {
    $id_pegawai = $_POST['id_pegawai'];
} else {
    echo "Error: ID pegawai tidak ditemukan";
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DataPegawai";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// menghapus data pada tabel pegawai dengan id tertentu
$sql = "DELETE FROM pegawai WHERE id_pegawai = '$id_pegawai'";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);

?>