<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

        <div class="row">
            <div class="col-md-6">
                <div class="content">
                <h1>Cek BMI</h1>
                    <form>
                        <div class="mb-3">
                            <label for="weight" class="form-label">Weight (kg): </label>
                            <input type="number" placeholder="0" class="form-control" id="weight" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="height" class="form-label">Height (cm):</label>
                            <input type="number" placeholder="0" class="form-control" id="height">
                        </div>
                        <p>Your BMI is: <span id="result">-</span></p>
                        <div id="interpretation"></div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
          <div class="image">
            <span class="image__bg"></span>
            <img src="<?= base_url("/assets/header-bg.png"); ?>" alt="header image" class="img-fluid" />
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
                  <span><i class="ri-check-line"></i></span>Dapatkan diskon 20% setiap tanggal 1 setiap bulannya
                </li>
                <li>
                  <span><i class="ri-check-line"></i></span>Dokter Mahir
                </li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </div>
    <script src="<?= base_url("js/bmi.js"); ?>"></script>
    <?= $this->endSection(); ?>