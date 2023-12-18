<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>
            

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



<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Setting Profil</h3>
                <!-- <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates optio, nostrum nemo atque dolor provident explicabo, quam quidem minima rem dolorum quod porro. Esse sint veritatis iste possimus suscipit ullam?</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">setting</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">

    <!--  -->

     <!-- // Basic multiple Column Form section start -->
   <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Profil</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="/dashboard/setting/update">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">First Name</label>
                                            <input type="text" id="first-name-column" value="<?php echo $getProfil['firstname']; ?>" class="form-control" placeholder="First Name"
                                                name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Last Name</label>
                                            <input type="text" id="last-name-column" value="<?php echo $getProfil['lastname']; ?>" class="form-control" placeholder="Last Name"
                                                name="lastname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="city-column">Username</label>
                                            <input type="text" readonly="readonly" id="city-column" class="form-control" value="<?php echo $getProfil['username']; ?>" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Email</label>
                                            <input type="email" id="country-floating" value="<?php echo $getProfil['email']; ?>" class="form-control" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="company-column">Password</label>
                                            <input type="password" id="company-column" value='********' class="form-control" name="password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email-id-column">Password</label>
                                            <input type="password" id="email-id-column" value='********' class="form-control" name="password_confirm"
                                                placeholder="Password Confirm">
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class='form-check'>
                                            <div class="checkbox">
                                                <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                <label for="checkbox5">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->

    <?= $this->endSection(); ?>