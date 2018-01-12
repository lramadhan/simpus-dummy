<?php 
include 'system/koneksi.php';
$judul = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$kode = $_POST['kode_buku'];
$isbn = $_POST['isbn'];
$penerbit = $_POST['penerbit_buku'];
$tanggal = $_POST['terbit_buku'];
$halaman = $_POST['halaman_buku'];
$berat = $_POST['berat_buku'];
$dimensi = $_POST['dimensi'];
$id_kategori = $_POST['id_kategori'];
$stok = $_POST['stok'];
$kueri = "insert into buku values('','$kode', '$isbn', '$judul', '$penulis', '$penerbit', '$tanggal', '$halaman', '$berat', '$id_kategori', '$dimensi')";
$masuk = mysqli_query($koneksi, $kueri);

$ambil = mysqli_query($koneksi, "select * from buku order by id_buku desc limit 1");
$id = mysqli_fetch_row($ambil);

$id_buku = $id[0];
$tgl = date("Y/m/d");

$masuk2 = mysqli_query($koneksi, "insert into stok values('$id_buku','$stok','$tgl')");
$masuk3 = mysqli_query($koneksi, "insert into mutasi_buku values('','$id_buku','$stok','0','$tgl','Pengadaan baru')");

header("location:masterbuku.php");
 ?>