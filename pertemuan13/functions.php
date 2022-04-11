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
        $jurusan = htmlspecialchars($data["jurusan"]);


        // upload gambar

        $email = upload();
        if( !$email ){
            return false;
        }

        // query insert data
        // var_dump($_POST);
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$npm', '$email', '$jurusan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['email']['name'];
        $ukuranFile = $_FILES['email']['size'];
        $error = $_FILES['email']['error'];
        $tmpName = $_FILES['email']['tmp_name'];

        // cek apakah tidak ada gambar yg diupload
        if( $error === 4){
            echo "<script>
            alert('pilih gambar terlebih dahulu');
            </script>";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ["jpg", "jpeg", "png"];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
            alert('yang anda upload bukan gambar');
            </script>";
            return false;
        }

        // ukuran file, membatasi ukuran file yg diupload
        if( $ukuranFile > 1000000) {
            echo "<script>
            alert('ukuran file gambar terlalu besar');
            </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // gambar siap diupload
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
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
        $emailLama = $data["gambarLama"];
        $jurusan = htmlspecialchars($data["jurusan"]);

        // query insert data
        // cek apakah user pilih gambar baru atau tidak
        if($_FILES['email']['error'] === 4){
            $email = $emailLama;
        } else{
            $email = upload();
        }
 


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
?>