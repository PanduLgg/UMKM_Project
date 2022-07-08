<!-- Content Wrapper. Contains page content -->
<div class="">
    <!-- Main content -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2> <?= $judul; ?>
                </h2>
                <ol>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('/Inner'); ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="container">
        <div class="alert alert-success mb-3">
            <h3 class="text-center align-middle">Selamat ! Pesanan Anda Telah Berhasil Diproses</h3>
        </div>
        <a class="btn btn-block btn-primary " href="<?= site_url('/Inner'); ?>">KEMBALI </a>
    </section>
</div>