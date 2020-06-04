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
<!-- End Navbar -->
