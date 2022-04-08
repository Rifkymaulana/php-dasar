<?php
    // cek apakah tombol submit sudah ditekan belum
    if( isset($_POST["submit"])){
        // cek username & password
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        // jika benar, redirect ke halaman admin
        header("Location: index.php");
        exit;
        } else {
        // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
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
    <h1>Login</h1>
    <?php if(isset($error)) : ?>
    <p style="color: red; font-style:italic;">username atau password salah!</p>
    <?php endif; ?>

<ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input id="username" type="text" name="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input id="password" type="password" name="password">
        </li>
        <li>
            <button type="submit" name="submit">login</button>
        </li>
    </form>
</ul>
    
</body>
</html>