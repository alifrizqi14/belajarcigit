<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <form action="<?= base_url('Home/simpan'); ?>" method="post" enctype="multipart/form-data">   
    <label>NIM           : </label><input type="text" name="txtnim">
    <label>Nama          : </label><input type="text" name="txtnama">  
    <label>Jenis Kelamin : </label><input type="radio" name="gender" value="Laki-laki">Laki-laki <input type="radio" name="gender" value="Perempuan">Perempuan
    <label>Alamat        : </label><textarea name="txtalamat"></textarea>
    <label>Foto          : </label><input type="file" name="gambar">
    <input type="submit" value="Kirim">    
    </form>
    </pre>
</body>

</html>