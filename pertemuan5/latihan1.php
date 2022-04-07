<?php

// array adalah sebuah variabel yang dapat memiliki banyak nilai
// elemen pada array bole beda tipe data
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0
$nama = "Rifky Maulana";
$hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'];
echo $hari[3];

// membuat array 
// cara lama
$bulan = array("januari", "februari");

// cara baru
$bulan = ["januari", "februari"];
// elemen pada array boleh beda
$arr1 = [1, "satu"];

// menampilkan 
echo $hari[2];
var_dump($hari);

print_r($bulan);

?>