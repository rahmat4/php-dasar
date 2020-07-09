<?php
    echo date("l") . "<br>"; // untuk menampilkan hari
    echo date("d") . "<br>"; // untuk menampilkan tanggal
    echo date("M") . "<br>"; // untuk menampilkan bulan
    echo date("m") . "<br>"; // untuk menampilkan bulan dalam bentuk angka
    echo date("Y") . "<br>"; // untuk menampilkan tahun
    echo "<br>";
    echo time() . "<br>"; // UNIX Timestamp / EPOCH time, detik yang sudah berlalu sejak 1 jamuari 1970
    echo "<br>";
    echo date("d M Y ",time() - 60*60*24*100);
    echo "<br>";
    // mktime(0,0,0,0,0,0);
    // jam,menit,detik,bulan,tanggal,tahun
    echo date("l",mktime(0,0,0,4,23,2003)) . "<br>";
    echo "<br>";
    echo date("l",strtotime("23 jul 2003")) . "<br>";
?>