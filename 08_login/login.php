<?php
    // cek apakah tombol submit sudah di tekan
    if (isset($_POST["submite"])) {
        // cek username && password
        if($_POST["username"] == "root" && $_POST["password"] == "root"){
            // jika benar kita, redirect ke halaman admin
            header("Location: admin.php");
            exit;
        }else{
            // jika salah , tampilkan pesan salah
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)): ?>
        <p style="color : red; font-style: italic">username / password salah!!</p>
    <?php endif ?>
    <ul>
    <form action="" method="POST">
        <li>
            <label for="username">username : </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="username">Password : </label>
            <input type="password" name="password" id="username">
        </li>
        <li>
            <button type="submit" name="submite">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>