<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Master Buku</title>
<?php include 'layout/head.php'; ?>  

</head>

<body>
<?php include 'layout/header.php'; ?>
  <!-- Modal Login -->
<?php include 'layout/login.php'; ?>


<div class="container" style="margin-top:60px; margin-bottom: 50px;">

<div class="row">
  <div class="box">
    <form action="tambahbuku.php" method="post">
    <div class="col-lg-5 col-md-5 col-sm-5">
      <img src="assets/images/lib.jpg" alt="Gambar">
    </div>
    <div class="col-lg-7 col-md-7 col-sm-7"> 
      <h2><input type="text" class="form-control" placeholder="Judul Buku" name="judul_buku"></h2>
      <p><input type="text" class="form-control" placeholder="Penulis" name="penulis"></p>      
      <p><input type="text" class="form-control" placeholder="Kode Buku" name="kode_buku"></p>      
      <dl class="dl-horizontal">
        <dt>ISBN</dt><dd><input type="text" class="form-control" placeholder="ISBN"  name="isbn" required></dd>
        <dt>Penerbit</dt><dd><input type="text" class="form-control" placeholder="Penerbit"  name="penerbit_buku" required></dd>
        <dt>Tanggal Terbit</dt><dd><input type="text" class="form-control" placeholder="yyyy"  name="terbit_buku" required></dd>
        <dt>Jumlah Halaman</dt><dd><input type="text" class="form-control" placeholder="lembar"  name="halaman_buku" required></dd>
        <dt>Berat Buku</dt><dd><input type="text" class="form-control" placeholder="gram"  name="berat_buku" required></dd>
        <dt>Dimensi</dt><dd><input type="text" class="form-control" placeholder="10x10cm"  name="dimensi" required></dd>
        <dt>Kategori</dt><dd>
          <select name="id_kategori" class="form-control" >
            <?php 
            $kategori = mysqli_query($koneksi, "select * from kategori order by nama_kategori");
            while ($row=mysqli_fetch_assoc($kategori)) {
                ?>
                <option value="<?php echo $row['id_kategori']; ?>"><?php echo $row['nama_kategori']; ?></option>
                <?php
            }
             ?>
          </select></dd>
        <dt>Stok</dt><dd><input type="text" class="form-control" placeholder="Stok"  name="stok"></dd>
      </dl>      
      <div class="btn-group">
        <button class="btn btn-warning"><span class="glyphicon glyphicon-remove-circle"></span> Batal</button>
        <button class="btn btn-primary" type="submit" name="simpan"><span class="glyphicon glyphicon-save"></span> Simpan</button>
      </div>
    </div>
  </form>
  </div>
</div>

<br>
<?php include 'system/cariBuku.php' ?>
</div>

<!-- Footer -->
<?php include 'layout/footer.php'; ?>

</body>
<?php include 'layout/script.php'; ?>
</html>