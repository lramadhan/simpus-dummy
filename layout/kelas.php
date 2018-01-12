
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS | Tambah Kelas</title>
	<link rel="stylesheet" href="http://localhost/simpus/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/simpus/assets/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="http://localhost/simpus/assets/css/main.css">  

</head>

<body>
    <!-- Navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid container">
      <div class="navbar-header">
        <a href="http://localhost/simpus/" class="navbar-brand">SI<b>MPUS</b></a>
      </div>
      <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari data">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
      </form>     
      <ul class="nav navbar-nav">
        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Kelola
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="masterbuku">Master Buku</a></li>
            <li><a href="stokbuku">Stok Buku</a></li>
            <li><a href="kelas">Kelas</a></li>
            <li><a href="anggota">Anggota</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Transaksi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="peminjaman">Peminjaman</a></li>
            <li><a href="pengembalian">Pengembalian</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="peminjaman">Peminjaman</a></li>
            <li><a href="pengembalian">Pengembalian</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Masuk</button>
      </ul>
    </div>
  </nav>  <!-- Modal Login -->
<div id="login" role="dialog" class="modal fade">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <!-- Heading -->
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login Pustakawan</h4>
      </div>
      <!-- Body -->
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control">
          </div>
        </form>
      </div>
      <!-- Footer -->
      <div class="modal-footer">
        <button class="btn btn-default" type="button" data-dismiss="modal">Masuk</button>
      </div>
    </div>
  </div>
</div>
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
                    <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#tambah">Tambah Kelas</button>
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
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">1<span style="color: grey;"> (1)</span></td>
                            <td width="20%">XTKJ1</td>
                            <td>X TKJ 1</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">2<span style="color: grey;"> (2)</span></td>
                            <td width="20%">XTKJ2</td>
                            <td>X TKJ 2</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">3<span style="color: grey;"> (3)</span></td>
                            <td width="20%">XTKJ3</td>
                            <td>X TKJ 3</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">4<span style="color: grey;"> (4)</span></td>
                            <td width="20%">XTKJ4</td>
                            <td>X TKJ 4</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">5<span style="color: grey;"> (5)</span></td>
                            <td width="20%">XITKJ1</td>
                            <td>XI TKJ 1</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">6<span style="color: grey;"> (6)</span></td>
                            <td width="20%">XITKJ2</td>
                            <td>XI TKJ 2</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">7<span style="color: grey;"> (7)</span></td>
                            <td width="20%">XITKJ3</td>
                            <td>XI TKJ 3</td>
                          </tr>
                                            <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="glyphicon glyphicon-pencil"></em></a>
                              <a class="btn btn-danger"><em class="glyphicon glyphicon-trash"></em></a>
                            </td>
                            <td width="10%">8<span style="color: grey;"> (8)</span></td>
                            <td width="20%">XITKJ4</td>
                            <td>XI TKJ 4</td>
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
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah data kelas</h4>
      </div>
      <form action="kelas/tambah" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label for="alias_kelas">Alias Kelas:</label>
          <input type="text" id="alias_kelas" class="form-control inpus-sm" placeholder="10IPA1">
        </div>
        <div class="form-group">
          <label for="nama_kelas">Nama Kelas:</label>
          <input type="text" id="nama_kelas" class="form-control" required placeholder="10 IPA 1">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <span class="text-muted">SIMPUS &copy; 2017-2018</span>
    </div>
  </footer></body>
	<script src="http://localhost/simpus/assets/js/jquery.min.js"></script>
	<script src="http://localhost/simpus/assets/js/bootstrap.js"></script></html