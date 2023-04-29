<?php
    include("tugas-3.php");
    
    if (isset($_POST['submit'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $id_jabatan = $_POST['id_jabatan'];
        $gaji = $_POST['gaji'];
           
        
        $sql = "INSERT INTO pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', id_jabatan='$id_jabatan', gaji='$gaji'";
        if (mysqli_query($conn, $sql)) {
            header("Location: pegawai.php");
        } else {
            echo "Tambah Data Gagal!!!";
        }
    }

    mysqli_close($conn);
?>