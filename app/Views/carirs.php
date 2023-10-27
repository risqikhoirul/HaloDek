<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-6">
        <div class="content">
            <h1>Cari Rumah Sakit Terdekat</h1>
            <form>
                <label for="province">Pilih Provinsi:</label>
                <select id="province" class="form-select" aria-label="Pilih Provinsi" onchange="loadRegencies()">
                    <option selected disabled value="">Pilih Provinsi</option>
                    <!-- Options will be dynamically added here -->
                </select>

                <br>

                <label for="regency">Pilih Kabupaten/Kota:</label>
                <select id="regency" class="form-select" aria-label="Pilih Kabupaten/Kota" onchange="showResult()">
                    <option selected disabled value="">Pilih Kabupaten/Kota</option>
                    <!-- Options will be dynamically added here -->
                </select>

                <!-- Container untuk menampilkan hasil pemilihan -->
                <div id="resultContainer"></div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
          <div class="image">
            <span class="image__bgrs"></span>
            <img src="<?= base_url("/assets/carirs.jpg"); ?>" alt="header image" class="img-fluid" />
            <div class="image__content image__content__1">
              <span><i class="ri-user-3-line"></i></span>
              <div class="details">
                <h4>150+</h4>
                <p>Klien Aktif</p>
              </div>
            </div>
            <div class="image__content image__content__2">
              <ul>
                <li>
                  <span><i class="ri-check-line"></i></span>Rumah Sakit Mendukung BPJS
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>Rumah Sakit Terbaik
                </li>
              </ul>
            </div>
          </div>
        </div>
</div>

<script src="<?= base_url("js/carirs.js"); ?>"></script>

<?= $this->endSection(); ?>
