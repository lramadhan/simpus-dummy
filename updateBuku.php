<?php 
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$penulis_buku = $_POST['penulis_buku'];
$isbn = $_POST['isbn'];
$penerbit_buku = $_POST['penerbit_buku'];
$terbit_buku = $_POST['terbit_buku'];
$halaman_buku = $_POST['halaman_buku'];
$berat_buku = $_POST['berat_buku'];
$id_kategori = $_POST['id_kategori'];
$dimensi = $_POST['dimensi'];

include 'system/koneksi.php';
$kueri = "UPDATE buku SET judul_buku='$judul_buku', penulis_buku='$penulis_buku', terbit_buku='$terbit_buku', halaman_buku='$halaman_buku', berat_buku='$berat_buku', id_kategori='$id_kategori', dimensi='$dimensi' WHERE id_buku='$id_buku' ";

$update = mysqli_query($koneksi, $kueri );


header("location:masterbuku.php");
 ?>