<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2> Welcome!
                    <span class="hidden-xs"><?= $this->acces->nama_login()->name; ?></span>
                </h2>
                <ol>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('/Inner'); ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
                    <li class="breadcrumb-item">
                        <i class='bx bx-cart'></i>
                        <?php $keranjang = ' '  .  $this->cart->total_items()  . ' items' ?>
                        <?= anchor('/Inner/detail_keranjang/', $keranjang) ?>
                    </li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page px-5 mx-auto ">
        <div class="container">
            <div class="row text-center ">
                <?php foreach ($barang->result() as $brg) : ?>
                    <div class="col-md-6 col sm col-lg-3 col-sm-6">
                        <div class="card text-center mx-auto mb-3" style="width: 15rem;">
                            <div class="card-header">
                                <h4 class="card-title text-center "><?= $brg->nama_barang; ?></h4>
                            </div>
                            <img src="<?= base_url() . '/assets/img/' . $brg->gambar ?>" width="100%" height="100%" class="card-img-top" alt="...">
                            <div class="card-body ">
                                <hr>
                                <span class="badge bg-primary">Harga</span>
                                <br>
                                <span class="badge rounded-pill bg-success">Rp. <?= $brg->harga_jual; ?></span>
                                <br>
                                <?= anchor('Inner/tambah_ke_keranjang/' . $brg->kode_barang, '<div class="btn btn-sm btn-primary mt-1">Tambah Ke Keranjang</div>') ?>
                                <br>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main><!-- End #main -->