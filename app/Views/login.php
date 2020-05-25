<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>Welcome</title>
</head>
<body class="bg-light text-dark">
  <div class="container p-5">
    <div class="row justify-content-center">
      <div class="col-xl-3 text-center">
        <img src="<?php echo base_url('assets/images/gambungstore.png') ?>" alt="gambungstore" height="100px">
      </div>
      <div class="col-xl-1 text-center p-4">
        <h1>X</h1>
      </div>
      <div class="col-xl-3 text-center p-4">
        <img src="<?php echo base_url('assets/images/travedia.png') ?>" alt="travedia" height="50px">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-8 text-center">
        <div class="card border-0 p-3 bg-light d-flex">
          <div class="my-5 justify-content-center align-self-center">
            <h1 class="font-weight-bold">PRE <span class="text-warning">-</span> KETEK</h1>
            <p class="font-weight-bold">Presensi Kerja Praktek - Login Page</p>
            <p>Gambungstore and Travedia ' s presence app for practical work</p>
            <hr>
            <div class="card-body">
              <div class="card col-md-12">
                <div class="card-body">
                  <form method="POST" action="">
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
                        <a href="/register" class="btn btn-light text-dark w-100">
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


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
