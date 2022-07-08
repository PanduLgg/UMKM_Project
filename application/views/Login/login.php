<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?= $judul; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/plugins/iCheck/square/blue.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>UMKM SUPER</b>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <h2 class="login-box-msg">LOGIN</h2>
            <?= $this->session->flashdata('message'); ?>

            <form action="<?= site_url('/Login/auth') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="username" name="username" id="username " class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                        <a class="btn btn-warning btn-block" href="<?= site_url('home'); ?>">Kembali </a>
                        <a class="small text-white" href="<?= site_url('Auth/register'); ?>">Belum punya akun? </a>
                        <br>
                    </div>
                </div>
            </form>
            <!-- /.col -->
            <!-- /.col -->
        </div>
    </div>


    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>/assets/template/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>/assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>/assets/template/plugins/iCheck/icheck.min.js"></script>
</body>

</html>