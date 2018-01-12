<?php 
include 'system/koneksi.php';
$hapus = mysqli_query($koneksi, "delete from kelas where id_kelas='$_GET[id_kelas]'");
header('location:kelas.php');
 ?>