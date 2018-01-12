<?php 
include 'system/koneksi.php';

$id_buku = $_POST['id_buku'];
$tanggal = $_POST['tanggal'];
$stok = $_POST['stok'];
$stokTotal = $_POST['stokAwal'] + $stok;
$ket = $_POST['ket'];

$simpanStok1 = "insert into mutasi_buku values('','$id_buku','$stok','','$tanggal','$ket') ";
$simpanStok2 = "update stok set stok=$stokTotal, tanggal=$tanggal where id_buku=$id_buku";

mysqli_query($koneksi, $simpanStok1);
mysqli_query($koneksi, $simpanStok2);

header("location:detail.php?id_buku=".$id_buku);
?>