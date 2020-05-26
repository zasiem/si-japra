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
        </tr>
      </thead>
      <tbody>
        <?php foreach($presences as $presence) : ?>
          <tr>
            <td><?= $presence['created_at'] ?></td>
            <td><?= $presence['created_at'] ?></td>
            <td><?= $presence['created_at'] ?></td>
            <td><?= $presence['dones'] ?></td>
            <td><?= $presence['goals'] ?></td>
            <td><?= $presence['resistances'] ?></td>
            <td><?= $presence['evidences'] ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>
