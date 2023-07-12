<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>

<body>
    <center>
        <h1>DATA MAHASISWA</h1>
    </center>
    <center><?php echo anchor('mahasiswa/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telepon</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $m) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $m->NIM ?></td>
                <td><?php echo $m->Nama ?></td>
                <td><?php echo $m->Alamat ?></td>
                <td><?php echo $m->Telepon ?></td>
                <td>
                    <?php echo anchor('mahasiswa/edit/' . $m->NIM, 'Edit'); ?>
                    <?php echo anchor('mahasiswa/hapus/' . $m->NIM, 'Hapus'); ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
