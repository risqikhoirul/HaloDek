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
    <!-- Loop untuk menampilkan artikel dari model -->
    <?php foreach ($posts as $post) : ?>
        <div class="card mt-4">
            <img src="<?= base_url($post['img']); ?>" class="card-img-top" alt="Gambar Artikel">
            <div class="card-body">
                <h5 class="card-title"><?= esc($post['title']); ?></h5>
                <p class="card-text"><?= esc($post['article']); ?></p>
                <a href="#" class="btn btn-primary">Baca Artikel</a>
            </div>
        </div>
    <?php endforeach; ?>

</div>

<?= $this->endSection(); ?>
