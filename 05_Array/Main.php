<?php
    // membuat array cara lama
    $hari = array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
    // membuat array cara baru
    $bulan = ["januari","february","maret","april"];
    // eleman pada array boleh menggunakan tipe data yang beda
    $kantong_doraemon = ["senter pembesar",1233,false];

    // menampilkan array
    // bisa menggunakan var_dump, print_r
    echo "<br>";
    var_dump($bulan);
    echo "<br>";
    print_r($hari);
    echo "<br>";
    echo $bulan[0]."<br>";
    echo $bulan[1]."<br>";
    echo $bulan[2]."<br>";
    $bulan[] = "mei"; // menambahkan array
    $bulan[] = "juni";
    var_dump($bulan);

?>