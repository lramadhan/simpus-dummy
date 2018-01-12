<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | diam</title>
<?php include '../layout/head.php'; ?>  

</head>

<body>
<?php include '../layout/header.php'; ?>
  <!-- Modal Login -->
<?php include '../system/koneksi.php';
$tampilkan=mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_berita='$_GET[id]'");
?>
</div>
<!-- Footer -->
<?php include '../layout/footer.php'; ?>
</body>
<?php include '../layout/script.php'; ?>
</html>