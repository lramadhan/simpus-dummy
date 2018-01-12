<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Daftar Anggota</title>
<?php include 'layout/head.php'; ?>  

</head>

<body>
<?php include 'layout/header.php'; ?>
  <!-- Modal Login -->
<?php include 'layout/login.php'; ?>

<div class="container" style="margin-top:60px; margin-bottom: 50px;">
    <h3 class="well">Pendaftaran Anggota</h3>
    <form action="anggota.php" method="post"><div class="input-group col-lg-3 pull-right"><select name="anggota" id="anggota" class="form-control input-sm"><option value="0">Pilih Anggota</option><option value="1">Siswa</option><option value="2">Guru</option></select><div class="input-group-btn"><button class="btn btn-default btn-sm">Tampilkan</button></div></div></form>
    <?php 
    if (isset($_REQUEST['anggota']) == true) {
      if ($_REQUEST['anggota'] == 2) {
        ?>
        <div class="col-lg-12 well">
            <div class="row">
              <form method="post" action="tambahanggotaguru.php">
                <dl class="dl-horizontal col-md-6 pull-right">
                  <dt>Tanggal Pendaftaran</dt><dd><input readonly type="text" class="form-control" value="<?php echo date('Y/m/d'); ?>" name="tanggalGuru"></dd>
                  <dt>No Identitas</dt><dd><input type="text" class="form-control" placeholder="NIK/NIP" name="uidGuru"></dd>
                  <dt>Nama Lengkap</dt><dd><input type="text" class="form-control" placeholder="Nama Lengkap" name="namaGuru"></dd>
                  <dt>Jenis Kelamin</dt><dd><select name="jkGuru" id="jk" class="form-control"><option value="l">Laki-laki</option><option value="p">Perempuan</option></select></dd>
                  <dt>Tanggal lahir</dt><dd><input type="text" class="form-control" placeholder="yyyy-mm-dd" name="ttlGuru"></dd>
                  <dt>Alamat</dt><dd><input type="text" class="form-control" placeholder="Alamat lengkap" name="alamatGuru"></dd>
                  <dt>Telephone</dt><dd><input type="text" class="form-control" placeholder="08xxxxxxxxxxxx" name="phoneGuru"></dd>
                  <div class="pull-right" style="padding-top: 10px;">
                    <div class="btn-group">
                      <button class="btn btn-default">Batal</button><button class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </dl>
              </form>
            </div>
        </div>
        <?php
      } else if ($_REQUEST['anggota'] == 1) {
        ?>
      <div class="col-lg-12 well">
        <div class="row">
          <form method="post" action="tambahanggotasiswa.php">
            <dl class="dl-horizontal col-md-6 pull-right">
              <dt>Tanggal Pendaftaran</dt><dd><input readonly type="text" class="form-control" value="<?php echo date('Y/m/d'); ?>" name="tanggalSiswa"></dd>
              <dt>No Identitas</dt><dd><input type="text" class="form-control" placeholder="NIS" name="uidSiswa"></dd>
              <dt>Nama Lengkap</dt><dd><input type="text" class="form-control" placeholder="Nama Lengkap" name="namaSiswa"></dd>
              <dt>Jenis Kelamin</dt><dd><select name="jkSiswa" id="jk" class="form-control"><option value="l">Laki-laki</option><option value="p">Perempuan</option></select></dd>
              <dt>Kelas</dt><dd>
                <select name="id_kelas" class="form-control">
                <?php 
                  $kelas = mysqli_query($koneksi, "select * from kelas");
                  while ($row = mysqli_fetch_assoc($kelas)) {
                  echo "<option value=$row[id_kelas]>$row[nama_kelas]</option>";
                  }
                 ?>
                </select></dd>
              <dt>Tanggal lahir</dt><dd><input type="text" class="form-control" placeholder="yyyy-mm-dd" name="ttlSiswa"></dd>
              <dt>Alamat</dt><dd><input type="text" class="form-control" placeholder="Alamat lengkap" name="alamatSiswa"></dd>
              <dt>Telephone</dt><dd><input type="text" class="form-control" placeholder="08xxxxxxxxxxxx" name="phoneSiswa"></dd>
              <div class="pull-right" style="padding-top: 10px;">
                <div class="btn-group">
                  <button class="btn btn-default">Batal</button><button class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </dl>
          </form>
        </div>
      </div>
      <?php
      } else {
        echo '<blink>Silakan pilih siswa/guru.</blink>';
      }
    }
     ?>
<br/>

    <div class="row">
      <div class="col-md-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col col-xs-6">
                      <h3 class="panel-title">Daftar Anggota</h3>
                    </div>
                    <div class="col col-xs-6 text-right">
                    <form action="anggota.php" method="get">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Cari buku" name="cari" value=
                      <?php 
                      if (isset($_GET['cari'])) {
                        echo $_GET['cari'];
                      }
                       ?>
                      >
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                        <a class="btn btn-default" href="anggota.php" >
                          <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                      </div>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-list">
                    <thead>
                      <tr>
                          <th align="center">No Anggota</th>
                          <th align="center">Nama Anggota</th>
                          <th align="center">Status Guru</th>
                          <th align="center">Status Siswa</th>
                          <th align="center">Tanggal Masuk</th>
                          <th align="center">Status Anggota</th>
                          <th align="center"><em class="glyphicon glyphicon-cog"></em></th>
                      </tr> 
                    </thead>
                    <tbody>
                    <?php


                  if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $x = 1;
                    $tampil = mysqli_query($koneksi, "select * from anggota where id_anggota like '%".$cari."%' or nomor_anggota like '%".$cari."%' or nama_anggota like '%".$cari."%' ");
                  } else {
                    $x = 1;
                    $tampil = mysqli_query($koneksi, "select * from anggota");
                  }

                    foreach ($tampil as $data) { ?>
                      <tr>
                        <td width="20%"><?php echo $x++; ?><span style="color: grey;"> (<?php echo $data['nomor_anggota']; ?>)</span></td>
                        <td width="46%"><?php echo $data['nama_anggota']; ?></td>
                        <td width="3%"><?php echo $data['id_guru']; ?></td>
                        <td width="3%"><?php echo $data['id_siswa']; ?></td>
                        <td width="10%"><?php echo $data['tanggal']; ?></td>
                        <td width="3%" align="center"><?php echo $data['status']; ?></td>
                        <td width="15%">
                          <a class="btn btn-primary btn-sm" href="editAnggota.php?id_anggota=<?php echo $data['id_anggota']; ?>"><em class="glyphicon glyphicon-share"></em></a>
                          <a class="btn btn-default btn-sm" href="detailAnggota.php?id_anggota=<?php echo $data['id_anggota']; ?>"><em class="glyphicon glyphicon-zoom-in"></em></a>
                          <a class="btn btn-danger btn-sm" href="hapusAnggota.php?id_anggota=<?php echo $data['id_anggota']; ?>"><em class="glyphicon glyphicon-trash"></em></a>
                        </td>
                      <?php
                      }
                      ?>
                      </tr>
                    </tbody>
                  </table>            
                </div>

                <div class="panel-footer">
                  <div class="row">
                    <div class="col col-xs-4">Page 1 of <?php echo mysqli_num_rows($tampil);?>
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