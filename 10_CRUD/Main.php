<?php
    require 'functions.php';
    // ambil data mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

    // tombol cari di tekan
    if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahsiswa</a>
    <br>
    <br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukan data yang mau di cari..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><a href="ubah.php?id=<?php echo $row["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ? ');" >Hapus</a></td>
            <td><?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
            <?php $i++; ?>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>