<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Edit Data Pegawai</h2>
            <form action="edit.php" method="POST">
                <table>
                    <?php
                        // melakukan koneksi ke database
                        $conn = mysqli_connect("localhost", "root", "", "DataPegawai");

                        // mengecek koneksi database
                        if (!$conn) {
                            die("Koneksi gagal: " . mysqli_connect_error());
                        }

                        // mendapatkan id pegawai dari parameter GET
                        $id_pegawai = isset($_GET['id_pegawai']) ? $_GET['id_pegawai'] : null;

                        // query untuk mendapatkan data pegawai dengan id yang sesuai
                        $sql = "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_row($result);

                        // mengisi nilai-nilai pada form dengan data pegawai yang telah didapatkan
                        list($id_pegawai, $nama_pegawai, $id_jabatan, $gaji) = $row;
                    ?>
                    <tr>
                        <td>ID Pegawai: </td>
                        <td>
                            <input type="number" name="id_pegawai" value="<?php echo $id_pegawai?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama : </td>
                        <td>
                            <input type="text" name="nama_pegawai" value="<?php echo $nama_pegawai?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan : </td>
                        <td>
                            <input type="number" name="id_jabatan" value="<?php echo $id_jabatan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Gaji : </td>
                        <td>
                            <input type="number" name="gaji" value="<?php echo $gaji?>">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="simpan" value="Simpan Data" >
                <input type=reset value=Reset>
                <button><a href="pegawai.php" style="text-decoration: none; color: black;">Kembali</a></button>
            </form>
        </div>
    </body>
</html>