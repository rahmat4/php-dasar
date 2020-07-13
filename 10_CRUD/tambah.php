<?php
    require 'functions.php';
    // cek apakah tombol sudah di pencet atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil di tambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil di tambahkan!');
                    document.location.href = 'Main.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal di tambahkan!');
                document.location.href = 'Main.php';
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <br>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <br>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>