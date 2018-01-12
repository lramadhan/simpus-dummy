<?php 
include 'koneksi.php';
$id_kelas = $_POST['id_kelas'];
$alias_kelas = $_POST['alias_kelas'];
$nama_kelas = $_POST['nama_kelas'];

$query = "UPDATE kelas SET alias_kelas='$alias_kelas', nama_kelas='$nama_kelas' where id_kelas='$id_kelas'";

mysqli_query($koneksi, $query);
header("location:../kelas.php");

 ?>