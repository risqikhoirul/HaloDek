<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <!-- Header "Informasi Kesehatan" -->
    <h1 class="my-4">Informasi Kesehatan</h1>
    <!-- Kolom Pencarian -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari informasi kesehatan...">
        <button class="btn btn-primary" type="button">Cari</button>
    </div>

    <!-- Artikel Kesehatan -->
    <div class="card">
        <img src="<?= base_url("assets/olahraga.jpg"); ?>" class="card-img-top" alt="Gambar Artikel 1">
        <div class="card-body">
            <h5 class="card-title">Manfaat Olahraga untuk Kesehatan</h5>
            <p class="card-text">Olahraga secara teratur dapat meningkatkan kesehatan tubuh dan pikiran.</p>
            <a href="#" class="btn btn-primary">Baca Artikel</a>
        </div>
    </div>

    <div class="card mt-4">
        <img src="<?= base_url("assets/mental.jpg"); ?>" class="card-img-top" alt="Gambar Artikel 2">
        <div class="card-body">
            <h5 class="card-title">Tips Menjaga Kesehatan Mental</h5>
            <p class="card-text">Berbagai tips untuk menjaga kesehatan mental dan kesejahteraan emosional Anda.</p>
            <a href="#" class="btn btn-primary">Baca Artikel</a>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
