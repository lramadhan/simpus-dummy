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
$buku = mysqli_query($koneksi, "select judul_buku, penulis_buku, isbn, penerbit_buku, terbit_buku, halaman_buku, berat_buku, dimensi, kategori.nama_kategori, stok.stok from buku, kategori, stok where kategori.id_kategori = buku.id_kategori and buku.id_buku = stok.id_buku and buku.id_buku = '$_GET[id_buku]'");
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
      <h2><?php echo $dataBuku['judul_buku']; ?></h2>
      <p><?php echo $dataBuku['penulis_buku']; ?></p>      
      <dl class="dl-horizontal">
        <dt>ISBN</dt><dd><?php echo $dataBuku['isbn']; ?></dd>
        <dt>Penerbit</dt><dd><?php echo $dataBuku['penerbit_buku']; ?></dd>
        <dt>Tanggal Terbit</dt><dd><?php echo $dataBuku['terbit_buku']; ?></dd>
        <dt>Jumlah Halaman</dt><dd><?php echo $dataBuku['halaman_buku']; ?></dd>
        <dt>Berat Buku</dt><dd><?php echo $dataBuku['berat_buku']; ?></dd>
        <dt>Dimensi</dt><dd><?php echo $dataBuku['dimensi']; ?></dd>
        <dt>Kategori</dt><dd><?php echo $dataBuku['nama_kategori']; ?></dd>
        <dt>Stok</dt><dd><a class="btn btn-primary btn-xs" href="kurangStok.php?id_buku=<?php echo $id_buku; ?>"><span class="glyphicon glyphicon-minus"></span></a>15/<?php echo $dataBuku['stok']; ?><a class="btn btn-primary btn-xs" href="tambahStok.php?id_buku=<?php echo $id_buku; ?>"><span class="glyphicon glyphicon-plus"></span></a></dd>
      </dl>      
      <div class="btn-group">
        <a class="btn btn-danger" href="hapusBuku.php?id_buku=<?php echo $id_buku; ?>"><span class="glyphicon glyphicon-remove-circle"></span> Hapus</a>
        <a class="btn btn-warning" dataBuku-toggle="modal" href="editBuku.php?id_buku=<?php echo $id_buku; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a>
        
        <a href="peminjaman.php" role="button" class="btn btn-default"><span class="glyphicon glyphicon-export"></span> Pinjam</a>
      </div>
    </div>
  </div>
</div>

<br/>
<div class="row">
  <div class="col-md-12">
          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Riwayat Sirkulasi Buku</h3>
                </div>
                <div class="col col-xs-6 text-right">
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
                      <th align="center">Judul Buku</th>
                      <th align="center">Buku Masuk</th>
                      <th align="center">Buku Keluar</th>
                      <th align="center">Tanggal</th>
                      <th align="center">Keterangan</th>
                  </tr> 
                </thead>
                <tbody>
                <?php
                $ambil = mysqli_query($koneksi, "select buku.kode_buku, stok_masuk, stok_keluar, tanggal, ket from mutasi_buku, buku where mutasi_buku.id_buku=buku.id_buku and mutasi_buku.id_buku=$_GET[id_buku]");
                foreach ($ambil as $data) { ?>
                  <tr>
                    <td width="40%"><?php echo $data['kode_buku']; ?></td>
                    <td width="10%"><?php echo $data['stok_masuk']; ?></td>
                    <td width="10%"><?php echo $data['stok_keluar']; ?></td>
                    <td width="10%"><?php echo $data['tanggal']; ?></td>
                    <td width="20%"><?php echo $data['ket']; ?></td>
                  <?php
                  }
                  ?>
                  </tr>
                </tbody>
              </table>            
            </div>

            <div class="panel-footer">
              <div class="row">
                <div class="col col-xs-4">Page 1 of <?php echo mysqli_num_rows($ambil);?>
                </div>
                <div class="col col-xs-8">
                  <ul class="pagination hidden-xs pull-right">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                  <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a></li>
                      <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>

</div>

<!-- Footer -->
<?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/script.php'; ?>
</html>