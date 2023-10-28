<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<ul class="list-group list-group-flush">
  <li class="list-group-item" data-bs-toggle="collapse" data-bs-target="#bojonegoroKecamatan">Bojonegoro</li>
  <div id="bojonegoroKecamatan" class="collapse">
    <li class="list-group-item">Kecamatan 1</li>
    <li class="list-group-item">Kecamatan 2</li>
    <li class="list-group-item">Kecamatan 3</li>
  </div>
  <li class="list-group-item">Tuban</li>
  <li class="list-group-item">Lamongan</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>

    
    <?= $this->endSection(); ?>s