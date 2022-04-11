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

    // function cari
    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa WHERE 
                nama LIKE '%$keyword%' OR
                npm LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";

        return query($query);
    }

    function registrasi($data){
        global $conn;

        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);


        // username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
            alert('username yang dipilih sudah terdaftar');
            </script>";

            return false;
        }

        // cek konfirmasi password
        if($password !== $password2){
            echo "<script>
            alert('konfirmasi password tidak sesuai');
            </script>";

            return false;
        }

        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        // var_dump($password);

        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }

?>