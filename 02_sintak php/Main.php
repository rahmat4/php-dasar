<?php
    // ini adalah komentar
    // komentar tidak akan di eksekusi
    // komentar di gunakan untuk menjelaskan fungsi dari baris kode program
    /*
        ini juga komentar
        komentar ini bisa di gunakan untuk banyak baris
    */
// --------------------------------------------------------------------------------

    // standar output
    // 1.echo  --> di gunakan untuk mencetak tampilah ke layar
    // 2.print --> ini juga bisa di gunakan untuk mencetak tampilah ke layar
    // 3.print_r --> ini digunakan untuk mencetak isi array, ini juga bisa di gunakan untuk melihat isi variable
    // 4. var_dump --> di gunakan untuk melihat isi variable atau informasi mengenai isi variable

    echo "Hello World! <br> "; // <br> --> tag HTML , untuk pindah baris
    print "Belajar Bahasa Pemrogramman <br> ";
    print_r("Ini adalah baris ke tiga <br>");
    var_dump("ini adalah baris ke empat <br>");

// -------------------------------------------------------------------------------

    // penulisan sintak php
    // 1.PHP di dalam HTML
    // 2.HTML di dalam PHP

// ------------------------------------------------------------------------------

    //Variable dan tipe data
    // 1.variable
    //   - tidak boleh di awali dengan angka, tapi boleh mengandung angka
    $nama = "Rahmat";

// ------------------------------------------------------------------------------

    // Operator Aritmatika
    // + - / *
    $a = 5;
    $b = 7;
    $c = $a+$b;
    echo "Hasil dari " .$a." + ".$b." = ".$c."<br>";

    // Operator Assigment
    // =, +=, -=, /=, %=;
    $a+=$b;
    echo "Hasil = ".$a."<br>";

    // Operator perbandingan
    // <, > ,<=, >=, ==, !=

    // Operator identitas
    // ===, !==

    // Operator logika
    // &&, ||, !

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
    <h1><?php echo "Ini adalah PHP di dalam HTML"; ?></h1>

    <?php 
        echo "<h1> ini adalah HTML di dalam PHP </h1>"
    ?>
</body>
</html>