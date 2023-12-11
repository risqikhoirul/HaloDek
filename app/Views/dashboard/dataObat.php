<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Obat</h3>
                <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates optio, nostrum nemo atque dolor provident explicabo, quam quidem minima rem dolorum quod porro. Esse sint veritatis iste possimus suscipit ullam?</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataObat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">

    <!--  -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Obat</h4>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form method="post" action="<?= route_to('dashboard.dataObat.add') ?>">

                        <div class="form-group">
                            <label for="basicNama">Nama</label>
                            <input type="text" class="form-control" id="basicNama" name="nama" placeholder="Enter nama obat">
                        </div>
                        <div class="form-group">
                            <label for="basicJenis">Jenis</label>
                            <input type="text" class="form-control" id="basicJenis" name="jenis" placeholder="Enter jenis obat">
                        </div>
                        <div class="form-group">
                            <label for="basicSelect">Status</label>
                            <fieldset class="form-group">
                                        <select class="form-select" name="status" id="basicSelect">
                                            <option value='<span class="badge bg-success">Tersedia</span>'>Tersedia</option>
                                            <option value='<span class="badge bg-warning">Terjual</span>'>Terjual</option>
                                            <option value='<span class="badge bg-danger">Kadaluarsa</span>'>Kadaluarsa</option>
                                        </select>
                                    </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Basic Inputs end -->
        <div class="card">
            
            <!-- <div class="card-header">
                Simple Datatable
            </div> -->
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($getObat as $obat) : ?>             
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($obat['nama']); ?></td>
                            <td><?= esc($obat['jenis']); ?></td>
                            <td><?= $obat['status']; ?></td>
                            <td>
                            <button type="button" class="btn icon btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $obat['id_Obat']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></button>
                            <form action="/dashboard/dataObat/<?= $obat['id_Obat']; ?>" method="post" class="d-inline">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn icon btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
</svg></button>
                            </form>
                        </td>
                            
                        </tr>
                            <!-- modal -->

    <!--edit form Modal -->
    <div class="modal fade text-left" id="edit<?= $obat['id_Obat']; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Ubah Data </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                            </div>
                            <form method="post" action="<?= route_to('dashboard.dataObat.update')?>">
                            <div class="modal-body">
                                <label>Nama: </label>
                                <div class="form-group">
                                <input type="hidden" name="id_Obat" value="<?= $obat['id_Obat']; ?>">
                                <input type="text" value="<?= esc($obat['nama']); ?>" name="nama" class="form-control">
                                </div>
                                <label>Jenis </label>
                                <div class="form-group">
                                <input type="text" value="<?= esc($obat['nama']); ?>" name="jenis" class="form-control">
                                </div>
                                <div class="form-group">
                            <label for="basicSelect">Status</label>
                            <fieldset class="form-group">
                                        <select class="form-select" name="status" id="basicSelect">
                                            <option value='<span class="badge bg-success">Tersedia</span>'>Tersedia</option>
                                            <option value='<span class="badge bg-warning">Terjual</span>'>Terjual</option>
                                            <option value='<span class="badge bg-danger">Kadaluarsa</span>'>Kadaluarsa</option>
                                        </select>
                                    </fieldset>
                        </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Ubah</span>
                                </button>
                            </div>
                            </form>
                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- end modal -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
        </div>
    </div>




    <?= $this->endSection(); ?>