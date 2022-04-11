<?php
    require 'functions.php';

    //ambil data di url
    $id = $_GET["id"];
    // var_dump($id);

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    // var_dump($mhs);

    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        if ( ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href ='index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" class="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <br>
            <li>
                <label for="npm">NPM : </label>
                <input type="number" class="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
            </li>
            <br>
            <li>
                <label for="email">Email : </label>
                <input type="email" class="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="nama">Jurusan : </label>
                <input type="text" class="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    
</body>
</html>