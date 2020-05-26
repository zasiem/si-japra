<?php echo view('partials/header.php') ?>
<div class="row justify-content-center" onload="startTime()" id="timeServer">
  <h5></h5>
</div>
<div class="row justify-content-center">
  <p>
    Hai
    <div class="dropdown px-2">
      <span class="dropdown-toggle font-weight-bold text-warning" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= session()->name ?>
      </span>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </div>
    , sudah absen hari ini ?
  </p>
</div>
<div class="accordion">
  <div class="row justify-content-center text-center mb-3">
    <div class="col-sm-6">
      <a href="#" class="text-center text-dark text-decoration-none font-weight-bold" data-toggle="collapse" data-target="#collapsePresence" id="presence">
        Input Presensi
        <hr class="bg-warning">
      </a>
    </div>
    <div class="col-sm-6">
      <a href="#" class="text-center text-dark text-decoration-none font-weight-bold" data-toggle="collapse" data-target="#collapseHistory" id="history">
        History Presensi
        <hr>
      </a>
    </div>
  </div>
  <div class="collapse show" id="collapsePresence">
    <div class="card card-body">
      <?php echo view("members/presence"); ?>
    </div>
  </div>
  <div class="collapse" id="collapseHistory">
    <div class="card card-body">
      <?php echo view("members/history"); ?>
    </div>
  </div>
</div>
<?php echo view('partials/footer.php') ?>
<script type="text/javascript">
$(document).ready(function(){

  $('#presence').on('click', function(){
    $('#collapseHistory').removeClass('show');
    $('#presence hr').addClass('bg-warning');
    $('#history hr').removeClass('bg-warning');
  });

  $('#history').on('click', function(){
    $('#collapsePresence').removeClass('show');
    $('#presence hr').removeClass('bg-warning');
    $('#history hr').addClass('bg-warning');
  });

  var timer = setInterval(clock, 1)
  function clock(){
    var today = new Date();
    $("#timeServer h5").html(today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear()+" ― "+today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds());
  }

});
</script>
