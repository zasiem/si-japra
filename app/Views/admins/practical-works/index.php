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
          <div class="row">
            <div class="col-sm-12 p-4" style="overflow:auto; background-color:white">
              <a href="/practical-works/create" class="btn btn-primary my-3">Tambah Startup</a>
              <table id="datatable" class="table table-bordered" style="width:100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Startup</th>
                    <th>Image</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($practical_works as $index => $practical_work) : ?>
                    <tr>
                      <td><?= $index+1 ?></td>
                      <td><?= $practical_work['name'] ?></td>
                      <td><?= $practical_work['image'] ?></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php echo view('admins/partials/footer') ?>
    </div>
  </div>
</body>
</html>
