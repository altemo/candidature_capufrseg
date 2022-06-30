  <!-- /.login-logo -->
  <div class="card card-outline card-dark">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>CAP</b>UFRSEG</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Nouveau compte utilisateur</p>

      <form action="#" method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" required placeholder="Nom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" required placeholder="Pr&eacute;nom">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="email" class="form-control" required placeholder="E-mail">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
          <a href="<?= site_url(['login']) ?>" class="text-center text-info btn_link">D&eacute;j&agrave; un compte</a>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <a href="#" class="btn btn-dark btn-block btn_register"><i class="fas fa-save" ></i>&nbsp;Cr&eacute;er compte</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->