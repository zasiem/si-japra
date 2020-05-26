<div class="row">
  <div class="col-sm-12">
    <table id="datatable" class="table table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Pukul</th>
          <th>Done</th>
          <th>Target</th>
          <th>Halangan</th>
          <th>Evidence</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($presences as $index => $presence) : ?>
          <tr>
            <td><?= $index+1 ?></td>
            <td><?= date("d-m-Y",strtotime($presence['created_at'])); ?></td>
            <td><?= date("H:s",strtotime($presence['created_at'])); ?></td>
            <td><?= nl2br($presence['dones']) ?></td>
            <td><?= nl2br($presence['goals']) ?></td>
            <td><?= nl2br($presence['resistances']) ?></td>
            <td><?= nl2br($presence['evidences']) ?></td>
            <td class="font-weight-bold"><?= $presence['is_late'] == 1 ? "Terlambat" : "Tepat Waktu" ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
