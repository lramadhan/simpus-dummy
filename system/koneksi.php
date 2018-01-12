<?php 
$koneksi = mysqli_connect("localhost", "root", "") or die(mysql_error());
// if ($koneksi) {
// 	echo "Koneksi tersambung";
// 	echo "<br>";
// } else {
// 	echo "Tidak dapat menyambung";
// 	echo "<br>";
// }
mysqli_select_db($koneksi, "simpus") or die("Tidak ada database yang dipilih!");
 ?>