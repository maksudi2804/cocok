<?php
    $namahost     = "localhost";//nama hosting yang digunakan
    $namaPengguna = "root";  //username default untuk bisa masuk/login di localhost
    $katasandi    = "";
    $nama_dbase   = "projek";
    $koneksi      = mysql_connect($namahost,$namaPengguna,$katasandi);
    $database     = mysql_select_db($nama_dbase);

    //cek koneksi
    if(!$koneksi)//jika koneksi tidak ada
        echo "Koneksi Gagal";
    //cek database
    if(!$database)//jika database tidak aktif atau tidak ditemukan
        echo "Database tidak ditemukan";
?>