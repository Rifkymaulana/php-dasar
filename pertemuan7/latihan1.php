<?php

// variable scope / lingkup variabel
// $x=78;
// echo $x;

// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();
// echo $x;

// variabel superglobal
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// semua jenis variabel superglobal adalah array assosiatif

// var_dump($_SERVER);

// echo $_SERVER["SERVER_NAME"];

// $_GET["nama"] = "Rifky Maulana";
// $_GET["npm"] = 1810631170147;
// $_GET["jurusan"] = "Teknik Informatika";
// $_GET["email"] = "rifky@gmail.com";

// http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Rifky%20Maulana&NPM=1810631170147

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
        "npm"=>1810631170147_1,
        "email"=>"rifky@gmail.com1",
        "jurusan"=>"teknik informatika1",
        "gambar"=>"2.jpeg"
    ],
    [
        "nama"=>"Rifky Maulana2",
        "npm"=>1810631170147_2,
        "email"=>"rifky@gmail.com2",
        "jurusan"=>"teknik informatika2",
        "gambar"=>"3.jpeg"
    ],
    [
        "nama"=>"Rifky Maulana3",
        "npm"=>1810631170147_3,
        "email"=>"rifky@gmail.com3",
        "jurusan"=>"teknik informatika3",
        "gambar"=>"4.jpeg"
    ],
];

// var_dump($_GET);



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
    <?php foreach($mahasiswa as $mhs) : ?>
    <!-- <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> alt="">
        </li> -->
        <!-- <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NPM :<?= $mhs["npm"]; ?></li>
        <li>Jurusan :<?= $mhs["email"]; ?></li>
        <li>Email :<?= $mhs["jurusan"]; ?></li> -->
    <!-- </ul> -->

        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>">
                <?= $mhs["nama"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</body>
</html>