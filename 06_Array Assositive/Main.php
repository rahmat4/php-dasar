<?php
    // Array Assositive
    $mahasiswa = [
        [
            "Nama"=>"Rahmat Pratama",
            "NRP"=>"0234540045",
            "jurusan"=>"Teknik Informatika",
            "email"=>"rahmatpratama@gmail.com"
        ],
        [
            "Nama"=>"Ilas Fernando"
            ,"NRP"=>"0234230045",
            "jurusan"=>"Teknik Masak",
            "email"=>"ilasfernando@gmail.com"
        ],
        [
            "Nama"=>"Firdaus Sembiring",
            "NRP"=>"0234540022",
            "jurusan"=>"Teknik Perkawinan",
            "email"=>"firdaussembiring@gmail.com"
        ],
        [
            "Nama"=>"Wirangga wahyu",
            "NRP"=>"0211540045",
            "jurusan"=>"Teknik Pertemanan",
            "email"=>"wiranggawahyu@gmail.com"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array Assositive</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
        <li>Nama : <?php echo $mhs["Nama"] ?></li>
        <li>NRP : <?php echo $mhs["NRP"] ?></li>
        <li>jurusan : <?php echo $mhs["jurusan"] ?></li>
        <li>email : <?php echo $mhs["email"] ?></li>
        <br>
        <?php endforeach ?>
    </ul>
</body>
</html>