<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Detail Buku</title>
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
$buku = mysqli_query($koneksi, "select buku.id_buku, judul_buku, penulis_buku, isbn, stok.stok from buku, stok where buku.id_buku = stok.id_buku and buku.id_buku = '$_GET[id_buku]'");
$dataBuku = mysqli_fetch_array($buku);
}
 ?>
<div class="row">
  <div class="box">
    <div class="col-lg-5 col-md-5 col-sm-5">
      <img src="assets/images/lib.jpg" alt="Gambar">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7"> 
      <h2><?php echo $dataBuku['judul_buku']; ?></h2>
      <p><?php echo $dataBuku['penulis_buku']; ?></p>
      <form method="post" action="tambahStokBuku.php">
        <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
        <div class="form-horizontal">
          <div class="form-group">
            <label for="isbn" class="control-label col-sm-2">ISBN</label><div class="col-sm-4"><input disabled type="text" id="isbn" placeholder="<?php echo $dataBuku['isbn']; ?>" name="isbn" class="form-control"></div>
          </div>
          <div class="form-group">
            <label for="tanggal" class="control-label col-sm-2">Tanggal</label><div class="col-sm-4"><input readonly type="text" id="tanggal"  name="tanggal" class="form-control" value="<?php echo date('Y/m/d'); ?>"></div>
            <label for="stokAwal" class="control-label col-sm-2">Stok Awal</label><div class="col-sm-4"><input readonly type="text" id="stokAwal" name="stokAwal" value="<?php echo $dataBuku['stok']; ?>" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label for="stok" class="control-label col-sm-2">Tambahan</label><div class="col-sm-4"><input type="text" id="stok" placeholder="Stok Masuk" class="form-control" name="stok">
            </div>
            <label for="ket" class="control-label col-sm-2">Keterangan</label><div class="col-sm-4"><input type="text" id="ket" class="form-control" placeholder="Keterangan" name="ket"></div>
          </div>
        </div> 
      <div class="btn-group">
      	<a class="btn btn-warning btn-sm" dataBuku-toggle="modal" href="detail.php?id_buku=<?php echo $id_buku; ?>"><span class="glyphicon glyphicon-remove-circle"></span> Batal</a>
        <button class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-save"></span> Simpan</button>
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