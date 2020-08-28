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
                    <form method="POST" action="/practical-works/store" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label text-md-left">Nama Startup</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-12 col-form-label text-md-left">Image</label>
                            <div class="col-md-12">
                                <input id="image" type="file" name="image" value="" required autocomplete="image">
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