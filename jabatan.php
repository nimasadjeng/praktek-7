<?php 
    require("tugas-3.php");
    $data = mysqli_query($conn, "SELECT * FROM jabatan");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Jabatan</title>
    </head>
    <body>
        <div align="center">
            <h2>Daftar Jabatan</h2>
            
            <table border="1px">
                <tr>
                    <th>ID Jabatan</th>
                    <th>Nama Jabatan</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id_jabatan']?></td>
                    <td><?php echo $row['nama_jabatan']?></td>
                </tr>
                <?php } //End while 
                    mysqli_close($conn); // Menutup koneksi ke database
                ?>
            </table>
            <br>
            <button>
                <a href="pegawai.php">Data Pegawai</a>
            </button>
        </div>
    </body>
</html>