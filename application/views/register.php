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
            <h2 class="login-box-msg">REGISTER</h2>
            <?= $this->session->flashdata('message'); ?>

            <form action="<?= site_url('auth/register') ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="username" name="username" id="username " class="form-control" placeholder="Username" required value="<?= set_value('username'); ?>">
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password1" id="password1" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= set_value('email'); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="name" placeholder="Nama" name="name" value="<?= set_value('name'); ?>">
                    <span class=" glyphicon glyphicon-font form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" id="address" placeholder="Alamat" name="address" value="<?= set_value('address'); ?>">
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"> </div>
                    <div class="col-xs-12">
                        <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Buat Akun</button>
                        <a class="small text-white" href="<?= site_url('Auth'); ?>">Sudah punya akun? </a>
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