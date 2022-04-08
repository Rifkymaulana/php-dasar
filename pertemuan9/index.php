<?php
    // koneksi ke databases
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari tabel mahasiswa / query data mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // if( !$result){
    //     echo mysqli_error($conn);
    // }

    // ambil data mahasiswa dari data result (fetch)
    // ada 4 cara :
    // mysqli_fetch_row() mengembalikan array numerik
    // mysqli_fetch_assoc() mengembalikan array assosiatif
    // mysqli_fetch_array() mengembalikan keduanya (numerik dan assosiatif)
    // mydql_fetch_object() mengembalikan object
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs[2]);
    // $mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs["jurusan"]);
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);

    // while($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php  while( $row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["npm"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php  endwhile; ?>
    </table>
    
</body>
</html>