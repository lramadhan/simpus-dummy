<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPUS</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  
<style>
  .parallax { 
      /* The image used */
      background-image: url("assets/images/lib.jpg");

      /* Set a specific height */
      height: 150px; 

      /* Create the parallax scrolling effect */
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
  }
</style>
  
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid container">
    <div class="navbar-header">
      <a href="index.html" class="navbar-brand">SI<b>MPUS</b></a>
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
      <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Tambah
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Master Buku</a></li>
          <li><a href="anggota.html">Pengguna</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pengembalian.html">Pengembalian</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Masuk</button>
    </ul>
  </div>
</nav>

  <!-- Modal Login -->
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
 
<!-- Cari-->
<div id="cari" role="dialog" class="modal fade">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
  <!-- Heading -->
    <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Cari Buku</h4>
    </div>
    <!-- Body -->
    <div class="modal-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari data">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Hujan di bulan Juni</td>
            <td>Sapardi Djoko Darmono</td>
            <td><a href="transaksi.html" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>
          <tr>
            <td>Hujan di bulan Juni</td>
            <td>Sapardi Djoko Darmono</td>
            <td><a href="transaksi.html" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus"></span></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

  <!-- Body -->

<div class="container" style="margin-top:60px; margin-bottom: 50px;">
<div class="row">
  <div class="col-lg-12 well">
    <h4>Transaksi</h4>
    <dl class="dl-horizontal col-md-6">
      <dt>Tanggal</dt><dd>dd/mm/yyyy</dd>
      <dt>No. Anggota</dt><dd><select name="no" id="" class="form-control"><option value="yyyy00">YYYY00</option></select></dd>
      <dt>Nama Anggota</dt><dd>Ibrahimovic</dd>
    </dl>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul Buku</th>
          <th>Pengarang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Hujan di bulan Juni</td>
          <td>Sapardi Djoko Darmono</td>
          <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Hujan di bulan Juni</td>
          <td>Sapardi Djoko Darmono</td>
          <td><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td><button class="btn btn-primary" data-toggle="modal" data-target="#cari"><span class="glyphicon glyphicon-eye-open"></span> Cari</button></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td class="btn-group"><input type="button" class="btn btn-default" value="Batal"><input type="button" class="btn btn-info" value="Simpan"></td>
        </tr>
      </tbody>
    </table>
    
  </div>
</div>
</div>
  <!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <span class="text-muted">SIMPUS &copy; 2017</span>
  </div>
</footer>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
</html>