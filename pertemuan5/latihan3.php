<?php
    $mahasiswa = [
        ["Rifky Maulana", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"],
        ["Rifky Maulana2", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"],
        ["Rifky Maulana3", 1810631170147, "Teknik Infromatika", "rifky@gmail.com"]
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
    <ul>
        <li>Rifky Maulana</li>
        <li>1810631170147</li>
        <li>Teknik Informatika</li>
        <li>rifky@gmail.com</li>
    </ul>
    <!-- <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?php echo $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NPM :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>