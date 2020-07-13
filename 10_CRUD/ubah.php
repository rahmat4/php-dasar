<?php
    require 'functions.php';
    // ambil data dari url
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // cek apakah tombol sudah di pencet atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil di tambahkan atau tidak
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil di ubah!');
                    document.location.href = 'Main.php';
                </script>
            ";
        }else{
            echo "
            <script>
                alert('data gagal di ubah!');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]; ?>">
            </li>
            <br>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" value="<?php echo $mhs["nama"]; ?>">
            </li>
            <br>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" value="<?php echo $mhs["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mhs["jurusan"]; ?>">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>