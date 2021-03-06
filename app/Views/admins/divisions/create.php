<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('admins/partials/header') ?>
</head>

<body>
    <div class="wrapper">
        <?php echo view('admins/partials/sidebar') ?>
        <div class="main-panel">
            <?php echo view('admins/partials/navbar') ?>
            <div class="content">
                <div class="container-fluid">
                    <form method="POST" action="/divisions/store">
                        <div class="form-group row">
                            <label for="practical_work_id" class="col-md-12 col-form-label text-md-left">Startup</label>
                            <div class="col-md-12">
                                <select name="practical_work_id" id="practical_work_id" class="form-control">
                                    <option value="">Pilih Startup</option>
                                    <?php foreach ($practical_works as $index => $practical_work) : ?>
                                        <option value="<?= $practical_work['id'] ?>"><?= $practical_work['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">Nama Divisi</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary w-100">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php echo view('admins/partials/footer') ?>
        </div>
    </div>
</body>

</html>