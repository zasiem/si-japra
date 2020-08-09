<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Document - <?= $user[0]['name'] ?></title>

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
            <div class="col-9 text-center">
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
                                    <td><?= date("d-m-Y",strtotime($presences[$j]['created_at'])); ?></td>
                                    <td><?= date("H.i",strtotime($presences[$j]['created_at'])); ?> WIB</td>
                                    <td>16.30 WIB</td>
                                    <td><?= $presences[$j+1]['dones'] ?></td>
                                    <td>
                                        <img src="<?php echo base_url('assets/images/paraf.png') ?>" alt="paraf" height="80px">
                                    </td>
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