<nav class="navbar navbar-expand-lg navbar-dark bg-primary  py-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>UMKM SUPER</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-outline-light" aria-current="page" href=" <?= site_url('/Produk'); ?>">Home</a>
                </li>
            </ul>
            <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-1 btn-outline-light" type="button">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <button class="btn btn-primary me-md-1 btn-outline-light" type="button">
                    Hello <span class=""><?= $this->acces->nama_login()->name; ?></span>
                </button>
                <a class="btn btn-primary btn-outline-light" type="button" href="<?= base_url('auth/logout'); ?> ">
                    Logout
                </a>
            </div>
            <div class="d-flex">


            </div>
        </div>
    </div>
</nav>