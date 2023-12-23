<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <h1 class="text-center">Media Seputar Kesehatan</h1>
      <div class="card mt-5">
        <div class="card-body">
        <h6 class="card-subtitle mb-2 text-muted">Author: <?= $getMedia['author']; ?></h6>
        <br>
          <h5 class="card-title"><?= $getMedia['title']; ?></h5>
          <p class="card-text"><?= $getMedia['content']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
