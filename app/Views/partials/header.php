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
    <div class="my-5 row justify-content-center">
      <div class="col-sm-3 text-center">
        <img src="<?php echo base_url('assets/images/gambungstore.png') ?>" alt="gambungstore" height="100px">
      </div>
      <div class="col-sm-1 text-center p-4">
        <h1>X</h1>
      </div>
      <div class="col-sm-3 text-center p-4">
        <img src="<?php echo base_url('assets/images/travedia.png') ?>" alt="travedia" height="50px">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-8 text-center">
        <h1 class="font-weight-bold">SI <span class="text-warning">-</span> JAPRA</h1>
        <p class="font-weight-bold">Presensi Kerja Praktek - Register Page</p>
        <p>Gambungstore and Travedia ' s presence app for practical work</p>
        <hr>
      </div>
      <div class="col-sm-8 text-center">
        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('success'); ?>
          </div>
        <?php endif; ?>
        <?php if (! empty($errors)) : ?>
          <div class="alert alert-danger">
            <?php foreach ($errors as $field => $error) : ?>
              <p><?= $error ?></p>
            <?php endforeach ?>
          </div>
        <?php endif ?>
      </div>
    </div>
