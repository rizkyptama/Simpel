<section class="ftco-section mt-5">
  <div class="row">
    <div class="col-md-3">&nbsp;</div>
    <div class="col-md-6">
      <center>
      <div class="card text-center w-50">
        <div class="card-header">
          <img src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="rounded-circle" width="100" height="100">
          <ul class="nav nav-tabs card-header-tabs justify-content-center mt-2">
            <li class="nav-item">
              <a class="nav-link" href="#tab_1" data-toggle="tab" aria-expanded="true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab_2" data-toggle="tab" aria-expanded="false">Lupa Password</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <h4 class="text-center"><b>Silahkan Login</b></h4>
              <form method="post" class="form-signin" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <select id="idjenisuser" class="form-control mb-2" required="" name="idjenisuser">
                  <option value="">Login Sebagai</option>
                  <option value="000002">Pencari Kerja</option><option value="000001">Perusahaan</option>            
                </select>
                <input type="hidden" name="csrf_test_name" value="37b9bd29ce9e3fa938bcea08f4c864a6" style="display: none">
                <input id="username" name="username" placeholder="Nama pengguna" required="" class="form-control mb-2" type="text" size="20" autofocus="">
                <input id="password" name="password" placeholder="Kata sandi" class="form-control mb-2" required="" type="password" value="" size="20">
                <input class="btn btn-lg btn-primary btn-block btn-signin" id="login" name="login" type="submit" value="Sign in">
              </form>        
            </div>

            <div class="tab-pane" id="tab_2">
              <h4 class="text-center"><b>Lupa Password</b></h4>
              <form method="post" class="form-signin" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="hidden" name="csrf_test_name" value="37b9bd29ce9e3fa938bcea08f4c864a6" style="display: none">
                <input id="email" class="form-control mb-2" name="email" type="email" placeholder="Email Pengguna" autofocus="">
                <input class="btn btn-lg btn-primary btn-block btn-signin" id="login" name="login" type="submit" value="Kirim Sandi">
              </form>
            </div>
          </div>
        </div>
      </div>
      </center>
    </div>
    <div class="col-md-3">&nbsp;</div>
  </div>
</section>