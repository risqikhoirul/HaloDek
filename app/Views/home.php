<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

      <div class="row">
        <div class="col-md-6">
          <div class="content">
            <h1><span>Get Quick</span><br />Medical Services</h1>
            <p>
            Di dunia yang serba cepat saat ini, akses ke layanan medis yang cepat dan efisien merupakan hal yang sangat penting. Ketika dihadapkan pada keadaan darurat medis atau mencari pertolongan medis segera, kemampuan untuk menerima layanan medis yang cepat
              dapat secara signifikan memengaruhi hasil dari suatu situasi.
            </p>
            <!-- <button class="btn btn-primary">Get Services</button> -->
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
    
    <?= $this->endSection(); ?>