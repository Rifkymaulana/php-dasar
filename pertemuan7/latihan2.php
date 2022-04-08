<!-- <?php

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

// var_dump($_GET);

// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["npm"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"])
    ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?> alt="">
        </li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NPM : <?= $_GET["npm"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
        <li>Email : <?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali</a>
    
</body>
</html>