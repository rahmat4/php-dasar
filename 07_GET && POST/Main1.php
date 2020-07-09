<?php
    // cek apakah tidak ada data di $_GET
    if (!isset($_GET["Nama"]) || !isset($_GET["NRP"]) || !isset($_GET["jurusan"]) || !isset($_GET["email"])) {
        // redirect
        header("Location: Main.php");
        exit;
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
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><?php echo $_GET["Nama"] ?></li>
        <li><?php echo $_GET["NRP"] ?></li>
        <li><?php echo $_GET["jurusan"] ?></li>
        <li><?php echo $_GET["email"] ?></li>
    </ul>

    <a href="Main.php">kembali ke daftar mahasiswa</a>
</body>
</html>