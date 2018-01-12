<?php 
include 'system/koneksi.php';
$hapus = mysqli_query($koneksi, "delete from buku where id_buku='$_GET[id_buku]'");
header("location:masterbuku.php");
 ?>