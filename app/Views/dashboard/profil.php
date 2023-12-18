<?= $this->extend('dashboard/sidebar'); ?>
<?= $this->section('content'); ?>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profil</h3>
                <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates optio, nostrum nemo atque dolor provident explicabo, quam quidem minima rem dolorum quod porro. Esse sint veritatis iste possimus suscipit ullam?</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">profil</li>
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
                <!-- var_dump($getProfil); -->
                <h4 class="card-title"><?php echo $getProfil['firstname'] . ' ' . $getProfil['lastname']; ?></h4>
                <br>
                <ul class="list-group">
                                <li class="list-group-item"><b>Username: </b> <?php echo $getProfil['username']; ?></li>
                                <li class="list-group-item"><b>Nama Lengkap: </b> <?php echo $getProfil['firstname'] . ' ' . $getProfil['lastname']; ?></li>
                                <li class="list-group-item"><b>Email: </b> <?php echo $getProfil['email']; ?></li>
                                <li class="list-group-item"><b>Level Akun: </b> <?php echo $getProfil['level']; ?></li>
                            </ul>

            </div>
            <!-- View: contoh_view.php -->

    <?= $this->endSection(); ?>