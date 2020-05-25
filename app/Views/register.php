<?php echo view("partials/header.php") ?>
<div class="row justify-content-center">
  <div class="col-sm-8 text-center">
    <div class="card border-0 bg-light d-flex">
      <div class="justify-content-center align-self-center">
        <div class="card-body">
          <div class="card col-md-12">
            <div class="card-body">
              <form method="POST" action="/register/process">
                <div class="form-group row">
                  <label for="email" class="col-md-12 col-form-label text-md-left">Email</label>
                  <div class="col-md-12">
                    <input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nim" class="col-md-12 col-form-label text-md-left">NIM</label>
                  <div class="col-md-12">
                    <input id="nim" type="text" class="form-control " name="nim" value="" required autocomplete="nim">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-12 col-form-label text-md-left">Nama Lengkap</label>
                  <div class="col-md-12">
                    <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="nim">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-12 col-form-label text-md-left">Jurusan</label>
                  <div class="col-md-12">
                    <select class="form-control" name="major" required>
                      <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                      <option value="S1 Teknik Industri">S1 Teknik Industri</option>
                      <option value="S1 Teknik Logistik">S1 Teknik Logistik</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-12 col-form-label text-md-left">Startup</label>
                  <div class="col-md-12">
                    <select class="form-control" name="practical_work" id="practical_work" required>
                      <option value="">Pilih Tempat KP</option>
                      <?php foreach ($practicalworks as $practicalwork) : ?>
                        <option value="<?= $practicalwork['id'] ?>"><?= $practicalwork['name'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-md-12 col-form-label text-md-left">Divisi</label>
                  <div class="col-md-12">
                    <select class="form-control" name="division" id="division" required>
                      <option value="">Pilih Divisi KP</option>
                      <?php foreach ($divisions as $division) : ?>
                        <option data-practical="<?= $division['practical_work_id'] ?>" value="<?= $division['id'] ?>"><?= $division['name'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-md-12 col-form-label text-md-left">Password</label>
                  <div class="col-md-12">
                    <input id="password" type="password" class="form-control " name="password" required autocomplete="current-password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="repassword" class="col-md-12 col-form-label text-md-left">Re - Password</label>
                  <div class="col-md-12">
                    <input id="repassword" type="password" class="form-control " name="reconfirm" required autocomplete="">
                  </div>
                </div>
                <div class="form-group row mt-4">
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-warning w-100 text-white">
                      Daftar
                    </button>
                  </div>
                </div>
                <div class="form-group row mb-3 mt-4">
                  <div class="col-md-12 text-center">
                    <p><small>Sudah punya akun?</small></p>
                    <a href="/login" class="btn btn-light text-warning w-100">
                      Login
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

<?php echo view("partials/footer.php") ?>
<script type="text/javascript">

$('#practical_work').on('change', function(){
  $('#division').val("");
  $('#division option[data-practical]').attr('hidden', 'true');
  var divisi = $('#practical_work option:selected').val();
  $('#division option[data-practical="'+divisi+'"]').removeAttr('hidden');
});

</script>
