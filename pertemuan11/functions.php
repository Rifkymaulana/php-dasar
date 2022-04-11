<?php
    // koneksi ke databases
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        // ambil data dari tiap elemen dalam form
        
        $nama = htmlspecialchars($data["nama"]);
        $npm = htmlspecialchars($data["npm"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // query insert data
        // var_dump($_POST);
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$jurusan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        // ambil data dari tiap elemen dalam form
        
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $npm = htmlspecialchars($data["npm"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // query insert data
        // var_dump($_POST);
        $query = "UPDATE mahasiswa SET
                    npm = '$npm', nama = '$nama', email = '$email', jurusan = '$jurusan' 
                  WHERE id = '$id' ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>