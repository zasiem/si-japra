<?php echo view("partials/header.php") ?>
    <div class="row justify-content-center">
      <div class="col-sm-8 text-center">
        <div class="card border-0 p-3 bg-light d-flex">
          <div class="justify-content-center align-self-center">
            <div class="card-body">
              <div class="card col-md-12">
                <div class="card-body">
                  <form method="POST" action="/login/process">
                    <div class="form-group row">
                      <label for="nim" class="col-md-12 col-form-label text-md-left">NIM</label>
                      <div class="col-md-12">
                        <input id="nim" type="text" class="form-control " name="nim" value="" required autocomplete="nim">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-md-12 col-form-label text-md-left">Password</label>
                      <div class="col-md-12">
                        <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                      </div>
                    </div>
                    <div class="form-group row mt-4">
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-warning w-100 text-white">
                          Login
                        </button>
                      </div>
                    </div>
                    <div class="form-group row mb-3 mt-4">
                      <div class="col-md-12 text-center">
                        <p><small>Belum punya akun?</small></p>
                        <a href="/register" class="btn btn-light text-warning w-100">
                          Daftar
                        </a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php echo view('partials/footer.php'); ?>
