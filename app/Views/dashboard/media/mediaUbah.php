<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Media Kesehatan</h3>
                <p class="text-subtitle text-muted">Mengubah konten seputar kesehatan.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard/">MediaKesehatan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ubah</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ubah Content</h4>
                </div>

                <!-- Tampilkan pesan kesalahan jika ada -->
                <?php $errorMessage = session('errors'); ?>
                <?php if ($errorMessage): ?>
                    <div class="alert alert-danger">
                        <?php foreach ($errorMessage as $error): ?>
                            <?= esc($error) ?><br>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <!--  -->

                <!-- Tampilkan pesan sukses jika ada -->
                <?php $successMessage = session('success'); ?>
                <?php if ($successMessage): ?>
                    <div class="alert alert-success">
                        <?= esc($successMessage) ?><br>
                    </div>
                <?php endif; ?>
                <!--  -->

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" action="/dashboard/mediakesehatan/ubah/update">
                                <input type="hidden" value="<?= $idMedia ?>" name="idMedia">
                                <div class="form-group">
                                    <label for="basicNama">ID Media</label>
                                    <input type="text" value="<?= $idMedia ?>" class="form-control" readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label for="basicNama">Judul</label>
                                    <input type="text" value="<?= $getMedia['title']; ?>" class="form-control <?= $errorMessage ? 'is-invalid' : '' ?>" id="basicNama" name="title" placeholder="Enter judul">
                                </div>

                                <div class="form-group">
                                    <label for="content">Konten</label>
                                    <!-- <textarea class="form-control" id="snow" name="content" rows="5" placeholder="Masukkan konten"></textarea> -->
                                    <div>
                                    <input type="hidden" name="content">
                                    <div id="full" style="min-height: 160px;">"<?= $getMedia['content']; ?></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Publish</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs end -->
</div>

<?= $this->endSection(); ?>
