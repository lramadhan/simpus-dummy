<?php 
include 'koneksi.php';

$alias_kelas = $_POST['alias_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$query = "INSERT INTO kelas VALUES('','$alias_kelas','$nama_kelas')";

mysqli_query($koneksi, $query);

header("location:../kelas.php");
?>