<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Obat</h3>
                <p class="text-subtitle text-muted">Tabel data dari seluruh obat di HalloDek.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">MediaKesehatant</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">

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

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Content</h4>
                </div>
                <div class="card-body">
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
                                    <td><b>Judul: </b><?= esc($media['title']); ?> <br><br><?= $media['content']; ?></td>
                                    <td>
                                        <div class="buttons">
                                        <a href="/dashboard/mediakesehatan/ubah/<?= $media['id_Media']; ?>" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                                        </div>
                                        <!-- Button trigger modal delete -->
                                        <button type="button" class="btn icon btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $media['id_Media']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                                <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal delete -->
                                <div class="modal fade text-left" id="delete<?= $media['id_Media']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel1">Delete</h5>
                                                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Yakin Ingin Menghapus?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <form action="/dashboard/mediakesehatan/delete/<?= $media['id_Media']; ?>" method="post" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn icon btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
</div>
<?= $this->endSection(); ?>
