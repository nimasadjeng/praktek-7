<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hapus Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Hapus Data Pegawai</h2>
            <form action="hapus.php" method="POST">
                <table>
                    <tr>
                        <td>ID Pegawai : </td>
                        <td>
                            <input type="number" name="id_pegawai">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="submit" value="Hapus Data">
            </form>
        </div>
    </body>
</html>