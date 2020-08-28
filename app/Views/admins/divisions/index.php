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
              <a href="/divisions/create" class="btn btn-primary my-3">Tambah Divisi</a>
              <table id="datatable" class="table table-bordered" style="width:100%;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Startup</th>
                    <th>Nama Divisi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($divisions as $index => $division) : ?>
                    <tr>
                      <td><?= $index + 1 ?></td>
                      <td><?= $division['startup'] ?></td>
                      <td><?= $division['name'] ?></td>
                      <td>
                        <form action="/divisions/delete" method="post">
                          <input name="id" type="text" value="<?= $division['id'] ?>" hidden>
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
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