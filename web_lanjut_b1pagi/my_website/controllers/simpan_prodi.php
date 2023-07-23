<?php
require "functions.php";

$nama_prodi = $_POST["nama_prodi"];
$tgl = date("Y-m-d H:i:s");

$simpan = q("INSERT INTO prodi VALUES(null,
'$nama_prodi',
'$tgl',
'$tgl')");

if ($simpan) {
    echo "berhasil";
}else {
    echo "gagal";
}