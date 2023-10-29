<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <!-- Header "Layanan Ambulan" -->
    <h1 class="my-4">Layanan Ambulan</h1>
     <!-- Kolom Pencarian -->
     <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari lokasi...">
        <button class="btn btn-primary" type="button">Cari</button>
    </div>
    <p class="ambulan-terdekat">Ambulan Terdekat</p> <!-- Teks "Ambulan Terdekat" -->
    <!-- Daftar Layanan Ambulan Bojonegoro -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#bojonegoroKecamatan">
            Bojonegoro
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="bojonegoroKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>

    <!-- Daftar Layanan Ambulan Tuban -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#tubanKecamatan">
            Tuban
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="tubanKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>

    <!-- Daftar Layanan Ambulan Lamongan -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#lamonganKecamatan">
            Lamongan
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="lamonganKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>

    <!-- Daftar Layanan Ambulan Nganjuk -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#nganjukKecamatan">
            Nganjuk
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="nganjukKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>

    <!-- Daftar Layanan Ambulan Kediri -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#kediriKecamatan">
            Kediri
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="kediriKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>

    <!-- Daftar Layanan Ambulan Jombang -->
    <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#jombangKecamatan">
            Jombang
            <i class="fas fa-chevron-down"></i>
        </li>
        <div id="jombangKecamatan" class="collapse">
            <li class="list-group-item">
                Kecamatan Kapas
                <p>Jl. Ahmad Yani no.726</p>
                <p>Nomor Telepon: 0289200-telepon-kecamatan-1</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Dander
                <p>Jl. Raya Dander-Kota no.929 no.726</p>
                <p>Nomor Telepon: 413211</p>
            </li>
            <hr> <!-- Pembatas -->
            <li class="list-group-item">
                Kecamatan Kota
                <p>Jl. Diponegoro no.3837</p>
                <p>Nomor Telepon: 82772</p>
            </li>
        </div>
    </ul>
</div>

</ul>

    
    <?= $this->endSection(); ?>s