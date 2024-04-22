<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <form action="<?php echo base_url('Home/ubah_siswa/') . $tampil['nim'] ?>" method="post">   
    <label>NIM           : </label><input type="text" name="txtnim" value="<?php echo $tampil['nim'] ?>">
    <label>Nama          : </label><input type="text" name="txtnama" value="<?php echo $tampil['nama'] ?>">  
    <label>Jenis Kelamin : </label><input type="radio" name="gender" value="Laki-laki" <?php if ($tampil['jk'] == "Laki-laki") { ?> checked <?php } ?> >Laki-laki <input type="radio" name="gender" value="Perempuan" <?php if ($tampil['jk'] == "Perempuan") { ?> checked <?php } ?>>Perempuan
    <label>Alamat        : </label><textarea name="txtalamat"><?php echo $tampil['alamat'] ?></textarea>
    <label>Foto          : </label><input type="file" name="gambar">
    <input type="submit" value="Kirim">    
    </form>
    </pre>
</body>

</html>