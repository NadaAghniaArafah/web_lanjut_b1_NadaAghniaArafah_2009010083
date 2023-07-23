<?php
require "functions.php";

$nama_mahasiswa = $_POST["nama_mahasiswa"];
$npm = $_POST["npm"];
$id_prodi = $_POST["id_prodi"];
$alamat = $_POST["alamat"];

$tanggal = date("Y-m-d H:i:s");

$simpan = q("INSERT INTO mahasiswa VALUES(null,
'$nama_mahasiswa',
'$npm',
'$id_prodi',
'$alamat',
'$tanggal',
'$tanggal')");

if ($simpan) {
    echo "berhasil";
}else {
    echo "gagal";
}