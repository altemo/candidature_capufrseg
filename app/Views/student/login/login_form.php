  <!-- /.login-logo -->
  <div class="card card-outline card-info">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>CAP</b>UFRSEG</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ouvrir une session</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="email" data-name="email" class="form-control" required placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" data-name="password" class="form-control" required placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
          <a href="<?= site_url(['login','account']) ?>" class="text-center text-info btn_link"> <i class="fas fa-link" ></i> Cr&eacute;er un compte</a>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <a href="#" class="btn btn-info btn-block btn_login"><i class="fas fa-check" ></i>&nbsp;Connexion</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <script src="<?= base_url() ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css"></script>
  <script src="<?= base_url() ?>/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script>


    var Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 3000
    });

    $('body').on('click', '.btn_login', function(e) {
      e.preventDefault();

      var data = $('[data-name]');
      var validate = true;
      var error_msg = "";

      data.each(function(d){
        let current = $(this).val().trim();
        console.log();
        if(current === '' && $(this)[0].hasAttribute('required')){
          error_msg = "Veuillez saisir votre " + $(this).data('name');
          validate = false;
          $(this).focus();
          return false;
        }

        if($(this).data('name') === 'email' && isvalid_email($(this).val().trim()) === false){
          error_msg = "Veuillez saisir le bon format de l'" + $(this).data('name');
          validate = false;
          $(this).focus();
          return false;
        }

      });

      if(!validate){
        Toast.fire({
          icon: 'error',
          title: error_msg
        });
        return;
      }

      // validate email JS
      function isvalid_email(email_string){
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(email_string.match(mailformat)){
          return true;
        }
        return false;
      }

    });


  </script>