<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Manajemen Buku</title>
<?php include 'layout/head.php'; ?>  

</head>

<body>
<?php include 'layout/header.php'; ?>
  <!-- Modal Login -->
<?php include 'layout/login.php'; ?>

  <!-- Body -->

<div class="container" style="margin-top:60px; margin-bottom: 50px;">
<?php
if (isset($_GET['id_buku'])) {
$id_buku = $_GET['id_buku'];
$buku = mysqli_query($koneksi, "select buku.id_buku, judul_buku, penulis_buku, isbn, penerbit_buku, terbit_buku, halaman_buku, berat_buku, dimensi, kategori.id_kategori, kategori.nama_kategori, stok.stok from buku, kategori, stok where kategori.id_kategori = buku.id_kategori and buku.id_buku = stok.id_buku and buku.id_buku = '$_GET[id_buku]'");
$dataBuku = mysqli_fetch_array($buku);
} else if (isset($_GET['cari'])) {
    $dataBuku = "";
}


 ?>
<div class="row">
  <div class="box">
    <div class="col-lg-5 col-md-5 col-sm-5">
      <img src="assets/images/lib.jpg" alt="Gambar">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7">
      <form action="updateBuku.php" method="post">
      <h2><input type="text" class="form-control" value="<?php echo $dataBuku['judul_buku']; ?>" name="judul_buku"></h2>
      <p><input type="text" class="form-control" value="<?php echo $dataBuku['penulis_buku']; ?>" name="penulis_buku"></p>
      <input type="hidden" name="id_buku" value="<?php echo $dataBuku['id_buku']; ?>">
      <dl class="dl-horizontal">
        <dt>ISBN</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['isbn']; ?>" name="isbn"></dd>
        <dt>Penerbit</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['penerbit_buku']; ?>" name="penerbit_buku"></dd>
        <dt>Tanggal Terbit</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['terbit_buku']; ?>" name="terbit_buku"></dd>
        <dt>Jumlah Halaman</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['halaman_buku']; ?>" name="halaman_buku"></dd>
        <dt>Berat Buku</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['berat_buku']; ?>" name="berat_buku"></dd>
        <dt>Dimensi</dt><dd><input type="text" class="form-control input-sm" value="<?php echo $dataBuku['dimensi']; ?>" name="dimensi"></dd>
        <input type="hidden" value="<?php echo $dataBuku['id_kategori']; ?>" name="id_kategori">

        <dt>Kategori</dt><dd>
          <select name="id_kategori" class="form-control">
          <?php 
          $kategori = mysqli_query($koneksi, "SELECT * FROM kategori order by nama_kategori");
          while ($row=mysqli_fetch_assoc($kategori)) {
            if ($row[id_kategori] == $dataBuku['id_kategori']) {
              echo "<option value=$row[id_kategori] selected>$row[nama_kategori]</option>";
            } else {
              echo "<option value=$row[id_kategori]>$row[nama_kategori]</option>";
            }
          }
          ?>
          </select></dd>
        <!-- button -->
        <div class="btn-group">
        <a href="detail.php?id_buku=<?php echo $id_buku; ?>" role="button" class="btn btn-default"><span class="glyphicon glyphicon glyphicon-remove-sign"></span> Batal</a>
        <button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<br>
</div>

<!-- Footer -->
<?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/script.php'; ?>
</html>