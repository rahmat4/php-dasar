<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost","root","","phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        // ambil data dari tiap element
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // query insert
        mysqli_query($conn,"INSERT INTO mahasiswa VALUES ('','$nrp','$nama','$email','$jurusan')");
        // cek apakah data berhasil di tambah kan
        return mysqli_affected_rows($conn);
    }

    function hapus($data){
        global $conn;
        // query delete
        mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $data");
        // cek apakah data berhasil di hapus
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        // ambil data dari tiap element
        $id = $data["id"];
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        // query insert
        mysqli_query($conn,"UPDATE mahasiswa SET nrp='$nrp',nama='$nama',email='$email',jurusan='$jurusan' WHERE id = '$id'");
        // cek apakah data berhasil di tambah kan
        return mysqli_affected_rows($conn);
        
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE nrp LIKE'%$keyword%' OR nama LIKE'%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%'";
        return query($query);
    }
?>