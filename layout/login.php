<?php include 'system/koneksi.php' ?>
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