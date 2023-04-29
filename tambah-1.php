<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Tambah Data Pegawai</h2>
            <form action="tambah.php" method="POST">
                <table>
                    <tr>
                        <td>ID Pegawai : </td>
                        <td>
                            <input type="number" name="id_pegawai">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Pegawai : </td>
                        <td>
                            <input type="text" name="nama_pegawai">
                        </td>
                    </tr>
                    <tr>
                        <td>ID Jabatan : </td>
                        <td>
                            <input type="number" name="id_jabatan">
                        </td>
                    </tr>
                    <tr>
                        <td>Gaji : </td>
                        <td>
                            <input type="number" name="gaji">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="submit" value="Tambah Data">
            </form>
        </div>
    </body>
</html>