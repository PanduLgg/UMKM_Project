<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Dashboard
            </h1>
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('/Barang'); ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
                </ol>
            </div><!-- /.col -->

        </section>
        <br>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    Welcome!
                </div>
                <div class="card-body">
                    <h2 class="card-text"><?= $this->acces->nama_login()->name;  ?></h2>
                    <hr>
                    <p class="card-text"><?= $this->acces->nama_login()->email;  ?></p>
                    <p class="card-text"><small class="text-muted">Since <?= date('d F Y', $this->acces->nama_login()->date_create); ?></small></p>
                </div>
            </div>
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->