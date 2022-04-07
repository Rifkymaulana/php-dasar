<!-- <?php
    $mahasiswa = [
        ["Rifky Maulana", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"],
        ["Rifky Maulana2", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"],
        ["Rifky Maulana3", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"]
    ];
?> -->

<!-- // array assosiatif
// key nya adalah string yang dibuat kita sendiri -->
<?php
    $mahasiswa = [
        [
            "nama"=>"Rifky Maulana",
            "npm"=>1810631170147,
            "email"=>"rifky@gmail.com",
            "jurusan"=>"teknik informatika",
            "gambar"=>"1.jpeg"
        ],
        [
            "nama"=>"Rifky Maulana1",
            "npm"=>1810631170147,
            "email"=>"rifky@gmail.com",
            "jurusan"=>"teknik informatika",
            "gambar"=>"2.jpeg"
        ],
        [
            "nama"=>"Rifky Maulana2",
            "npm"=>1810631170147,
            "email"=>"rifky@gmail.com",
            "jurusan"=>"teknik informatika",
            "gambar"=>"3.jpeg"
        ],
        [
            "nama"=>"Rifky Maulana3",
            "npm"=>1810631170147,
            "email"=>"rifky@gmail.com",
            "jurusan"=>"teknik informatika",
            "gambar"=>"4.jpeg"
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    <!-- <ul>
        <li>Rifky Maulana</li>
        <li>1810631170147</li>
        <li>Teknik Informatika</li>
        <li>rifky@gmail.com</li>
    </ul> -->

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> alt="">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM :<?= $mhs["npm"]; ?></li>
        <li>Jurusan :<?= $mhs["email"]; ?></li>
        <li>Email :<?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>