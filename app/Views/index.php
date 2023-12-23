<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/simple-datatables/style.css"); ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.svg"); ?>" type="image/x-icon">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"> -->
    <title><?= $title; ?> | HalloDek</title>
</head>
<body>
    <div class="container">
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?= base_url("/"); ?>">HalloDek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url("/"); ?>">Rumah</a>
                   
                    <a class="nav-link" href="<?= base_url("cekbmi"); ?>">Cek BMI</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url("carirs"); ?>">Rumah Sakit</a></li>
                       
                        </ul>
                    </li>
                    <a class="nav-link" href="<?= base_url("media"); ?>">Media</a>
                </div>  
            </div>
        </nav>
        <!-- end navbar -->

        <!-- start content -->
        <?= $this->renderSection('content'); ?>
        <!-- end content -->
    </div>
    <!-- Bootstrap JS and dependencies (Popper.js) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url("assets/js/vendors.js"); ?>"></script>
    <script src="<?= base_url("assets/vendors/simple-datatables/simple-datatables.js"); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
