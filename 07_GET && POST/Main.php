<?php
    // SUPERGLOBALS
    
    // $_GET
    // $_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV

    // variable global milik php
    // merupakan Array Assositive

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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="Main1.php?Nama=<?php echo $mhs["Nama"]; ?>&NRP=<?php echo $mhs["NRP"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>"><?php echo $mhs["Nama"] ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</body>
</html>