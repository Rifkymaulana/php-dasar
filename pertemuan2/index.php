
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //ini adalah komentar
    //ini juga komentar
    /*
    ini juga komentar
    */
    
    // pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print
    // print_r
    // var_dump

    echo "Rifky Maulana";
    print "Rifky Maulana";
    echo 123;
    echo true;
    echo false;
    echo 'ini menggunakan kutip 1';

    // Penulisan Sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    echo "Selamat Datang Rifky";

    // Variabel dan Tipe Data
    $nama = "Rifky Maulana";
    echo "<br>$nama";
    // aturan pembuatan variabel
    // 1. tidak boleh diawali angka, tapi boleh mengandung angka
    

    // operator
    // arutmatika (+, -, *, /, %)

    $x = 10;
    $y = 5;

    echo $x*$y;

    // penggabungan string / concatenation / concat

    $nama_depan = "Rifky";
    $nama_belakang = "Maulana";
    echo $nama_depan . " " . $nama_belakang;

    $d = 5;
    $d += 7;
    echo $d;

    // Assignment =
    // perbandingan <, >, <=, >=, ==, !=

    var_dump(1 == "1");

    // identitas
    // ===, !==

    var_dump(1 === "1");

    // operator &&, ||, !
    $x = 10;
    var_dump($x < 10 && $x % 2 == 0);


?>
    
</body>
</html>