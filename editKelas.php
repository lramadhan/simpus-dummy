<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | diam</title>
<?php include 'layout/head.php'; ?>  

</head>

<body>
<?php include 'layout/header.php'; ?>
  <!-- Modal Login -->
<?php include 'layout/login.php'; ?>

<div class="container" style="margin-top:70px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Daftar Kelas</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a type="button" class="btn btn-sm btn-primary btn-create" href="kelas.php">Tampilkan Daftar</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="glyphicon glyphicon-cog"></em></th>
                        <th class="hidden-xs">No/ID</th>
                        <th>Alias Kelas</th>
                        <th>Nama Kelas</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php
                    $tampil = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$_GET[id_kelas]'");
                    $data = mysqli_fetch_array($tampil);
                    ?>
                    <tr>
                    <form action="system/updateKelas.php" method="POST">
                      <td align="center">
                        <button type="submit" class="btn btn-primary btn-sm"><em class="glyphicon glyphicon-save"></em></button>
                      </td>
                      <td width="10%"><input type="text" class="form-control" disable value="<?php echo $data['id_kelas']; ?>" name="id_kelas"></td>
                      <td width="20%"><input type="text" class="form-control" value=<?php echo $data['alias_kelas']; ?> name="alias_kelas"></td>
                      <td><input type="text" class="form-control" value="<?php echo $data['nama_kelas']; ?>" name="nama_kelas"></td>
                    </tr>
                	</form>
                  </tbody>
                </table>            
              </div>

              <div class="panel-footer">
                <div class="row">
                	<h6 class="blink" align="center">Anda sedang mengedit data!</h6>
                </div>
              </div>
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