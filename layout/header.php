    <!-- Navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid container">
      <div class="navbar-header">
        <a href="http://localhost/simpus" class="navbar-brand">SI<b>MPUS</b></a>
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
            <li><a href="masterbuku.php">Master Buku</a></li>
            <li><a href="kategori.php">Kategori Buku</a></li>
            <li><a href="kelas.php">Kelas</a></li>
            <li><a href="anggota.php">Anggota</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Transaksi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="peminjaman.php">Peminjaman</a></li>
            <li><a href="pengembalian.php">Pengembalian</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="peminjaman.php">Peminjaman</a></li>
            <li><a href="pengembalian.php">Pengembalian</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Keluar</button>
      </ul>
    </div>
  </nav>