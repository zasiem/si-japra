<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
  <div class="container-fluid">
    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar burger-lines"></span>
      <span class="navbar-toggler-bar burger-lines"></span>
      <span class="navbar-toggler-bar burger-lines"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <p class="nav-link text-warning">
            <span class="no-icon"><?= session()->name ?></span>
          </p>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="/logout">
            <span class="no-icon">Log out</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-sm-12 text-center mt-5">
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
      <?php echo session()->getFlashdata('success'); ?>
    </div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('errors')) : ?>
    <div class="alert alert-danger" role="alert">
      <?php foreach (session()->getFlashdata('errors') as $field => $error) : ?>
        <p><?= $error ?></p>
      <?php endforeach ?>
    </div>
  <?php endif; ?>
  <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $field => $error) : ?>
        <p><?= $error ?></p>
      <?php endforeach ?>
    </div>
  <?php endif ?>
</div>
<!-- End Navbar -->