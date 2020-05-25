<div class="row">
  <div class="col-sm-12">
    <form method="POST" action="/register/process">
      <div class="form-group row">
        <label for="nim" class="col-md-12 col-form-label text-md-left">NIM</label>
        <div class="col-md-12">
          <input id="nim" type="text" class="form-control " name="nim" value="<?= session()->nim ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">Apa yang sudah anda kerjakan kemarin</label>
        <div class="col-md-12">
          <textarea id="dones" class="form-control" name="dones" rows="4"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">Apa yang akan anda kerjakan hari ini</label>
        <div class="col-md-12">
          <textarea id="goals" class="form-control" name="goals" rows="4"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">Apa kesulitan yang anda alami</label>
        <div class="col-md-12">
          <textarea id="resistances" class="form-control" name="resistances" rows="4"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="name" class="col-md-12 col-form-label text-md-left">Evidences</label>
        <div class="col-md-12">
          <textarea id="evidences" class="form-control" name="evidences" rows="4"></textarea>
        </div>
      </div>
      <div class="form-group row mt-4">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-warning w-100 text-white">
            Input Kehadiran
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
