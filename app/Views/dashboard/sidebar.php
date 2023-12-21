<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | HalloDek</title>
    
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/quill/quill.bubble.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/quill/quill.snow.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/simple-datatables/style.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/vendors/perfect-scrollbar/perfect-scrollbar.css"); ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/app.css"); ?>">
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.svg"); ?>" type="image/x-icon">
</head>
<body>
<div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div style="color: #56b6f7;" class="sidebar-header">
        HalloDek
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
                
                <li class='sidebar-title'>Main Menu</li>
                
            
                
                <li class="sidebar-item">

                    <a href="/dashboard" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>

                    
                </li>

                <li class="sidebar-item  ">
                    <a href="/dashboard/dataObat" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Obat</span>
                    </a> 
                </li>
                <li class="sidebar-item  ">
                    <a href="/dashboard/dataPasien" class='sidebar-link'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg> 
                        <span>Pasien</span>
                    </a> 
                </li>
                <?php
$isLevel = session()->get('level');
if ($isLevel == 'admin') {
    // Render the sidebar item
    echo ' <li class="sidebar-item  ">
    <a href="/dashboard/pegawai" class="sidebar-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
  </svg>
        <span>Pegawai</span>
    </a> 
</li>';
}
?>      
<li class="sidebar-item  has-sub">

<a href="#" class='sidebar-link'>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
  <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
</svg> 
    <span>Media</span>
</a>


<ul class="submenu ">
    
    <li>
        <a href="/dashboard/mediakesehatan">Lihat</a>
    </li>
    
    <li>
        <a href="/dashboard/mediakesehatan/tambah">Tambah</a>
    </li>
      
        </ul>
        
        
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                       
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="<?= base_url("assets/images/avatar/avatar-s-1.png"); ?>" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block"><?= session()->get('username'); ?></div>

                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="<?= base_url('/dashboard/profil'); ?>"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item" href="<?= base_url('/dashboard/setting'); ?>"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

        <!-- start content -->
        <?= $this->renderSection('content'); ?>
        <!-- end content -->
            <!-- Add this script after your form -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var passwordInput = document.getElementById('pw');
        var confirmPasswordInput = document.getElementById('pwconfirm');
        var confirmPasswordError = document.getElementById('confirm-password-error');

        function validatePassword() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                confirmPasswordError.textContent = 'Password and Confirm Password do not match';
                return false;
            } else {
                confirmPasswordError.textContent = '';
                return true;
            }
        }

        confirmPasswordInput.addEventListener('input', validatePassword);
    });
</script>
    
    <script src="<?= base_url("assets/vendors/quill/quill.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/pages/form-editor.js"); ?>"></script>
    <script src="<?= base_url("assets/js/feather-icons/feather.min.js"); ?>"></script>
    <script src="<?= base_url("assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/app.js"); ?>"></script>
    <script src="<?= base_url("assets/vendors/simple-datatables/simple-datatables.js"); ?>"></script>
    <script src="<?= base_url("assets/js/vendors.js"); ?>"></script>
    <script src="<?= base_url("assets/js/main.js"); ?>"></script>
</body>
</html>