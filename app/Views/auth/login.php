<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css"); ?>">
    
    <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.svg"); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url("assets/css/app.css"); ?>">
</head>

<body>
    <div id="auth">

        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="<?= base_url("assets/images/favicon.svg"); ?>" height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to Voler.</p>
                    </div>
                    <?php $errorMessage = session('error'); ?>
<?php if ($errorMessage): ?>
    <div class="alert alert-danger">
            <?= esc($errorMessage) ?><br>
    </div>
        
<?php endif; ?>
                    <form method="post" action="<?= route_to('auth.login'); ?>">
                    
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" name="username" class="form-control" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="auth-forgot-password.html" class='float-end'>
                                    <small>Forgot password?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" name="password" class="form-control" id="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary float-end">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="<?= base_url("assets/js/feather-icons/feather.min.js"); ?>"></script>
    <script src="<?= base_url("assets/js/app.js"); ?>"></script>
    
    <script src="<?= base_url("assets/js/main.js"); ?>"></script>
</body>

</html>