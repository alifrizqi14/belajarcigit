<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>DATA SISWA</h3>

    <table border="1">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Foto</td>
        </tr>
        <?php
        $nomer = 1;
        foreach ($tampil as $siswa) {
        ?>
            <tr>
                <td><?php echo $nomer++ ?></td>
                <td><?php echo $siswa->nim  ?></td>
                <td><?php echo $siswa->nama  ?></td>
                <td><?php echo $siswa->jk  ?></td>
                <td><?php echo $siswa->alamat  ?></td>
                <td><img src="<?php echo base_url('assets/gambar/') . $siswa->foto ?>" width="100"></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>