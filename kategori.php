<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Kategori Buku</title>
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
                    <h3 class="panel-title">Daftar Kategori Buku</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#tambah">Tambah Kategori</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="glyphicon glyphicon-cog"></em></th>
                        <th class="hidden-xs">No/ID</th>
                        <th>Alias Kategori</th>
                        <th>Kategori</th>
                    </tr> 
                  </thead>
                  <tbody>
                    <?php
                    $x = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM kategori");
                    foreach ($tampil as $data) {
                    ?>
                    <tr>
                      <td align="center">
                        <a class="btn btn-default btn-sm" href="kategori/update.php"><em class="glyphicon glyphicon-pencil"></em></a>
                        <a class="btn btn-danger btn-sm"><em class="glyphicon glyphicon-trash"></em></a>
                      </td>
                      <td width="10%"><?php echo $x++; ?><span style="color: grey;"> (<?php echo $data['id_kategori']; ?>)</span></td>
                      <td width="20%"><?php echo $data['alias_kategori']; ?></td>
                      <td><?php echo $data['nama_kategori']; ?></td>
                    <?php
                    }
                    ?>
                    </tr>
                  </tbody>
                </table>            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
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
<!-- Modal tambah data -->
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah daftar kategori</h4>
      </div>
      <form action="system/tambahKategori.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
          <label for="alias">Alias Kategori:</label>
          <input type="text" id="alias_kategori" name="alias_kategori" class="form-control inpus-sm" placeholder="FIL" required>
        </div>
        <div class="form-group">
          <label for="nama_kategori">Nama Kategori:</label>
          <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" required placeholder="Fiksi Ilmiah">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-sm" type="submit" name="submit">Simpan</button>
      </div>
      </form>
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