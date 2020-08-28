<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">  

  <title>SI-JAPRA | Presensi Kerja Praktek</title>
</head>
<body class="bg-light text-dark">
  <div class="container p-5">
    <div class="my-5 row justify-content-center owl-carousel">
      <?php foreach ($practical_works as $index => $practical_work) : ?>
      <div class="col-sm-12 text-center">
        <a href="<?= $practical_work['url'] ?>" target="_blank">
          <img src="<?php echo base_url('assets/uploads/'.$practical_work['image']) ?>" alt="<?= $practical_work['name'] ?>" height="100px">
        </a>
      </div>
      <?php endforeach ?>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-8 text-center">
        <h1 class="font-weight-bold">SI <span class="text-warning">-</span> JAPRA</h1>
        <p class="font-weight-bold">Presensi Kerja Praktek</p>
        <p>Presence app for practical work</p>
        <hr>
      </div>
      <div class="col-sm-8 text-center">
        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('success'); ?>
          </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('errors')): ?>
          <div class="alert alert-danger" role="alert">
            <?php foreach (session()->getFlashdata('errors') as $field => $error) : ?>
              <p><?= $error ?></p>
            <?php endforeach ?>
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
