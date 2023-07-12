<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h3>Tambah data baru</h3>
    </center>
    <form action="<?php echo base_url() . 'mahasiswa/tambah_aksi'; ?>" method="post>
    method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No.Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>