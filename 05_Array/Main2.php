<?php
    $mahasiswa = [
        ["Rahmat Pratama","083890022","Teknik Informatika","rahmatpratama@gmail.com"],
        ["Ilas Fernando","083890011","Teknik Informatika","ilasfernando@gmail.com"],
        ["Firdaus Sembiring","083890056","Multi Media","firdaussembiring@gmail.com"],
        ["Akmal Winanda","083560022","Teknik Informatika","akmalwinanda@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <?php foreach($mhs as $mh): ?>
                <li><?php echo $mh; ?></li>
            <?php endforeach ?>
            <br>
        <?php endforeach ?>
        <br>
        <?php foreach($mahasiswa as $mhs): ?> 
            <li>Nama : <?php echo $mhs[0] ?></li>
            <li>NRP : <?php echo $mhs[1] ?></li>
            <li>Jurusan : <?php echo $mhs[2] ?></li>
            <li>Email : <?php echo $mhs[3] ?></li>
            <br>
        <?php endforeach ?>
    </ul>
</body>
</html>