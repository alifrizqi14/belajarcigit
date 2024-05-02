<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgrey;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadows-sm rounded">
                    <div class="card-body">

                        <form action="<?= base_url('Home/simpan'); ?>" method="post" enctype="multipart/form-data">
                            <div>
                                <label class="font-weight-bold">NIM : </label>
                                <input class="form-control" type="text" name="txtnim">
                            </div>
                            <div>
                                <label class="font-weight-bold">Nama : </label>
                                <input class="form-control" type="text" name="txtnama">
                            </div>
                            <div>
                                <label class="font-weight-bold">Jenis Kelamin : </label>
                                <input type="radio" name="gender" value="Laki-laki">Laki-laki <input type="radio" name="gender" value="Perempuan">Perempuan
                            </div>
                            <div>
                                <label class="font-weight-bold">Alamat : </label>
                                <textarea class="form-control" rows="5" name="txtalamat"></textarea>
                            </div>
                            <div>
                                <label class="font-weight-bold">Foto : </label>
                                <input class="form-control" type="file" name="gambar">
                            </div>
                            <input type="submit" value="Kirim" class="btn btn-md btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('txtalamat');
    </script>
</body>

</html>