<?php
    require 'functions.php';
    // ambil data mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa");
    // ambil data mahasiswa
    // mysqli_fetch_row();
    // mysqli_fetch_assoc();
    // mysqli_fetch_array();
    // mysqli_fetch_object();

    // while ($mhs = mysqli_fetch_assoc($result)){
    // var_dump($mhs);
    // }
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
            <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            <td><?php echo $row["nrp"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?>/td>
            <td><?php echo $row["jurusan"]; ?></td>
            <?php $i++; ?>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>