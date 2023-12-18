
<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>
<?php
// Asumsikan $getObat adalah sebuah array dari item-item obat
$totalJumlah = 0;
$jumlahPasien = count($getPasien);

foreach ($getObat as $obat) {
    $totalJumlah += $obat['jumlah'];
}

// $jumlahPegawai = count($totalPegawai);
// var_dump($totalPegawai);
?>

<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-6">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Jumlah Obat</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?= $totalJumlah; ?> </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Jumlah Pasien</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?= $jumlahPasien; ?> </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Jumlah Pegawai</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p><?php $totalJumlah; ?></p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas3" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Obat Kadaluarsa</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>50 </p>
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas4" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Data Obat</h4>
                        <div class="d-flex ">
                            <!-- <i data-feather="download"></i> -->
                        </div>
                    </div>
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                        <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Jumlah</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($getObat as $obat) : ?>             
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= esc($obat['nama']); ?></td>
                            <td><?= esc($obat['jenis']); ?></td>
                            <td><?= $obat['jumlah']; ?></td>
                        <?php endforeach; ?>
                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            

    <?= $this->endSection(); ?>
