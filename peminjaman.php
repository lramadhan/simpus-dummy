<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Peminjaman</title>
<?php include 'layout/head.php'; ?>  

</head>

<body>
<?php include 'layout/header.php'; ?>
  <!-- Modal Login -->
<?php include 'layout/login.php'; ?>
<div class="container" style="margin-top:70px; margin-bottom: 50px;">
  <div class="row">
        <div class="well col-xs-12 col-sm-12 col-md-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Transaksi Peminjaman</strong>
                        <br>
                        <form method="get" action="peminjaman.php">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Cari nomor anggota" name="cari" required>
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" href="peminjaman.php">
                              <i class="glyphicon glyphicon-search"></i>
                            </button>
                            <a class="btn btn-default" href="peminjaman.php" ">
                              <i class="glyphicon glyphicon-refresh"></i>
                            </a>
                          </div>
                        </form>
                        </div>
<?php 
if (isset($_GET['cari'])) {
  $cari = $_GET['cari'];
  $dataAnggota = mysqli_query($koneksi, "select nama_anggota from anggota where nomor_anggota='".$cari."'");
  $namaAnggota = mysqli_fetch_row($dataAnggota);
  $nama_anggota = $namaAnggota[0];
} else {
  $nama_anggota = '&nbsp;';
}

$today = date('Y/m/d');
$tempo = date('Y/m/d', strtotime($today. '+ 3 days'));
 ?>

                        <div class="input-group">
                          <span for="nama_anggota" class="input-group-addon">Nama Anggota </span>
                          <input class="form-control" id="nama_anggota" name disabled name="nama_anggota" value="<?php echo $nama_anggota; ?>"></input>
                        </div>
                        <div class="input-group">
                          <span for="tempo" class="input-group-addon">Tanggal Tempo</span>
                          <input class="form-control" id="tempo" disabled <?php echo 'value='.$tempo; ?>></input>
                        </div>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Tanggal: <?php echo $tanggal = date("Y/m/d"); ?></em>
                    </p>
                    <p>
                        <em>Kode Peminjaman: <b>34522677W</b></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h3>Daftar Pinjaman</h3>
                </div>
                </span>
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="glyphicon glyphicon-cog"></em></th>
                        <th class="hidden-xs">No/ISBN</th>
                        <th>Judul Buku</th>
                        <th>Pengarang</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <tr>
                      <td align="center" width="10%">
                        <a class="btn btn-default btn-xs"><em class="glyphicon glyphicon-pencil"></em></a>
                        <a class="btn btn-danger btn-xs"><em class="glyphicon glyphicon-trash"></em></a>
                      </td>
                      <td width="10%">1<span style="color: grey;"> (1)</span></td>
                      <td width="50%">Manusia setengah matang</td>
                      <td>Superman</td>
                    </tr>
                                      <tr>
                      <td align="center" width="10%">
                        <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                        <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                      </td>
                      <td width="10%">2<span style="color: grey;"> (2)</span></td>
                      <td width="50%">Manusia setengah matang</td>
                      <td>Superman</td>
                    </tr>
                                      <tr>
                      <td align="center" width="10%">
                        <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                        <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                      </td>
                      <td width="10%">3<span style="color: grey;"> (3)</span></td>
                      <td width="50%">Manusia setengah matang</td>
                      <td>Superman</td>
                    </tr>
                    </tbody>
                  </table>            
                <button type="button" class="btn btn-success btn-md pull-right">
                    Simpan <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include 'layout/footer.php'; ?>
</body>
<?php include 'layout/script.php'; ?>
</html>