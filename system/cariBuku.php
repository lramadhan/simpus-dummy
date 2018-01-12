                  <?php
                  if (isset($_GET['cari'])) {
                    $cari = $_GET['cari'];
                    $x = 1;
                    $tampil = mysqli_query($koneksi, "select buku.id_buku, isbn, judul_buku, penulis_buku, nama_kategori, stok from buku, stok, kategori where buku.id_buku = stok.id_buku and buku.id_kategori = kategori.id_kategori and (buku.isbn like '%".$cari."%' or buku.judul_buku like '%".$cari."%' or buku.penulis_buku like '%".$cari."%' or kategori.nama_kategori like '%".$cari."%')");
                  } else {

                    $x = 1;
                    $tampil = mysqli_query($koneksi, "select buku.id_buku, isbn, judul_buku, penulis_buku, nama_kategori, stok from buku, stok, kategori where buku.id_buku = stok.id_buku and buku.id_kategori = kategori.id_kategori order by buku.id_buku desc");
                  }
                  ?>
                  <div class="row">
                    <div class="col-md-12">
                            <div class="panel panel-default panel-table">
                              <div class="panel-heading">
                                <div class="row">
                                  <div class="col col-xs-6">
                                    <h3 class="panel-title">Daftar Buku</h3>
                                  </div>
                                  <div class="col col-xs-6 text-right">
                                  <form action="masterbuku.php" method="get">
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
                                      <a class="btn btn-default" href="masterbuku.php" >
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
                                        <th align="center">No/ID</th>
                                        <th align="center">ISBN</th>
                                        <th align="center">Judul Buku</th>
                                        <th align="center">Penulis Buku</th>
                                        <th align="center">Kategori</th>
                                        <th align="center">Stok Buku</th>
                                        <th align="center"><em class="glyphicon glyphicon-cog"></em></th>
                                    </tr> 
                                  </thead>
                                  <tbody>
                                  <?php foreach ($tampil as $data) { ?>
                                    <tr>
                                      <td width="5%"><?php echo $x++; ?><span style="color: grey;"> (<?php echo $data['id_buku']; ?>)</span></td>
                                      <td width="15%"><?php echo $data['isbn']; ?></td>
                                      <td width="30%"><?php echo $data['judul_buku']; ?></td>
                                      <td width="10%"><?php echo $data['penulis_buku']; ?></td>
                                      <td width="10%"><?php echo $data['nama_kategori']; ?></td>
                                      <td width="3%" align="center"><?php echo $data['stok']; ?></td>
                                      <td width="10%">
                                        <a class="btn btn-primary" href="peminjaman.php"><em class="glyphicon glyphicon-share"></em></a>
                                        <a class="btn btn-default" href="detail.php?id_buku=<?php echo $data['id_buku']; ?>"><em class="glyphicon glyphicon-zoom-in"></em></a>
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