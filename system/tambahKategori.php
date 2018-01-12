<?php 
include 'koneksi.php';

$alias_kategori = $_POST['alias_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = "INSERT INTO kategori VALUES('','$alias_kategori','$nama_kategori')";

mysqli_query($koneksi, $query);

header("location:../kategori.php");
?>