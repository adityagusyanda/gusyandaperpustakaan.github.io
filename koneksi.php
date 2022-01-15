<?php
$namaserver = "localhost";
$namauser = "root";
$katasandi = "";
$nama_db = "03_perpustakaan_12rpl2";

$koneksi = (mysqli_connect($namaserver, $namauser, $katasandi, $nama_db));

if (!$koneksi) {
    echo die ("koneksi gagal");
}
?>