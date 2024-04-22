<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>DATA SISWA</h3>

    <a href="<?php echo base_url('Home/tambah_siswa') ?>">Tambah Data</a> |
    <a href="<?php echo base_url('Home/cetak_pdf') ?>">Cetak</a>

    <table border="1">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Foto</td>
            <td>Opsi</td>
        </tr>
        <?php
        $nomer = 1;
        foreach ($tampil as $data) {
        ?>
            <tr>
                <td><?php echo $nomer++ ?></td>
                <td><?php echo $data->nim  ?></td>
                <td><?php echo $data->nama  ?></td>
                <td><?php echo $data->jk  ?></td>
                <td><?php echo $data->alamat  ?></td>
                <td><img src="<?php echo base_url('gambar/') . $data->foto ?>" width="100"></td>
                <td>
                    <a href="<?php echo base_url('Home/ambil_data/') . $data->nim ?>">UPDATE</a> |
                    <a href="<?php echo base_url('Home/hapus/') . $data->nim ?>">DELETE</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>