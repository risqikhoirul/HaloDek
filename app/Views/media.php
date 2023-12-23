<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="row">
  <div class="col-md-8 offset-md-2">
  <h1>Media Seputar Kesehatan</h1>
    <div class="content mt-5">
      <div class="table-responsive">
        <table class='table table-striped' id="table1">
          <thead>
            <tr>
              <th>No</th>
              <th>Content Media</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; ?>
            <?php foreach ($getThumail as $media) : ?>
              <tr>
                <td><?= $i++ ?></td>
                <td>
                  <strong>Judul: </strong><?= esc($media['title']); ?> <br><br><?= $media['content']; ?>
                </td>
                <td>
                  <div class="d-flex">
                    <a href="/media/view/<?= $media['id_Media']; ?>" class="btn btn-sm btn-primary me-2"> Selengkapnya</a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Initialize Simple Datatables -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new simpleDatatables.DataTable('#table1');
  });
</script>

<?= $this->endSection(); ?>
