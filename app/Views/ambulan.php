<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>

<br><br><br><br><br>

      <div class="row">
        <div class="col-md-6">
          <div class="content">
            <h1><span>Layanan Ambulan</span><br />Medical Services</h1>
            <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad pariatur vel fuga error, quam mollitia corporis dolor quidem doloremque voluptatem deserunt labore quia officiis officia quibusdam quae voluptates. Iste, ullam!
            </p>
            <button class="btn btn-primary">Get Services</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image">
            <span class="image__bg"></span>
            <img src="<?= base_url("/assets/ambulan.jpg"); ?>" alt="header image" class="img-fluid" />
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
    
    <?= $this->endSection(); ?>s