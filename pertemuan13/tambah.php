<?php
    require 'functions.php';
    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        
        // var_dump($_POST);
        // var_dump($_FILES);
        // die;

        if ( tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href ='index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href ='index.php';
                </script>
            ";    
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" class="text" name="nama" id="nama" required>
            </li>
            <br>
            <li>
                <label for="npm">NPM : </label>
                <input type="number" class="text" name="npm" id="npm" required>
            </li>
            <br>
            <li>
                <label for="email">Gambar : </label>
                <input type="file" class="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="nama">Jurusan : </label>
                <input type="text" class="text" name="jurusan" id="jurusan" required>
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>
        </ul>
    </form>
    
</body>
</html>