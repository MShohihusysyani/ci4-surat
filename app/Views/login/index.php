<style>
    .login-box {
        position: fixed;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1">Aplikasi Surat</a>
            </div>
            <?php if (session()->getFlashdata('alert')) { ?>
                <div class="error" data-error="<?= session()->get('alert') ?>"></div>
            <?php } ?>
            <?php if (session()->getFlashdata('pesan')): ?>
                <div><?= session()->getFlashdata('pesan'); ?></div>
            <?php endif; ?>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <center>
                    <img src="assets\images\mso.png" alt="logo PT MSO" width="120" height="100">
                </center>
                <br>
                <form action="/login/cekUser" method="post">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control " placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block tombol-login">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>/dist/js/adminlte.min.js"></script>
    <!-- sweet alert2 -->
    <script src="<?= base_url('assets/'); ?>/sweetalert2/package/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/sweetalert2/package/dist/sweetalert2.min.css">
    <script src="<?= base_url('assets/'); ?>/js/script.js"></script>
</body>

</html>