<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <style>
    .container{
        min-height: 100vh;
    }
  </style>
    
</head>
<body>
    <?php $counter = 0; for($i = 0; $i < count($presences)/5; $i++){?>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-8 text-center">
                <h1>Laporan Kerja Harian dan Mingguan</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-left">
                <div class="table table-responsive table-borderless">
                    <table>
                        <tr>
                            <td>Nama Perusahaan</td>
                            <td>:</td>
                            <td><?= $user[0]['startup'] ?></td>
                        </tr>
                        <tr>
                            <td>Lokasi Kerja/Unit</td>
                            <td>:</td>
                            <td><?= $user[0]['division'] ?></td>
                        </tr>
                        <tr>
                            <td>Waktu Kerja Praktek</td>
                            <td>:</td>
                            <td><?= count($presences)-1 ?> Hari Kerja</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 text-center">
                <h5>Pekan ke <?= $i+1 ?></h5>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-10 text-center">
                <div class="table table-bordered">
                    <table>
                        <thead>
                            <tr>
                                <th>Hari dan Tanggal</th>
                                <th>Jam Datang</th>
                                <th>Jam Pulang</th>
                                <th>Aktivitas</th>
                                <th>Evaluasi dan Paraf (Pembimbing Lapangan)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $temp = $counter;
                            for($j = $temp; $j < ($temp+5); $j++) {
                                if($counter < count($presences)-1){
                            ?>
                                <tr>
                                    <th><?= $presences[$j]['created_at'] ?></th>
                                    <th><?= $presences[$j]['created_at'] ?></th>
                                    <th>16.30 WIB</th>
                                    <th><?= $presences[$j+1]['dones'] ?></th>
                                    <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, consequatur cum similique ea nemo sed dolorem sit omnis quas aut repudiandae saepe odio quisquam. Sit error ipsam dolorum. Omnis, fuga?</th>
                                </tr>
                            <?php
                                }
                                $counter++;
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>