<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                <?= $judul; ?>
            </h1>

            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <?php $keranjang = '<i class="fa fa-shopping-cart" aria-hidden="true"></i> '  .  $this->cart->total_items()  . ' items' ?>
                        <?= anchor('/Produk/detail_keranjang/', $keranjang) ?>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= site_url('/Produk'); ?>"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $judul; ?></li>
                </ol>
            </div><!-- /.col -->

        </section>
        <br> <br>

        <section class="content">
            <div class="content">
                <div class="row mt-3 text-center ">
                    <?php foreach ($barang->result() as $brg) : ?>
                        <div class="col-md-6 col-lg-3">
                            <div class="card text-center mx-auto " style="width: 15rem;">
                                <div class="card-header">
                                    <h4 class="card-title text-center "><?= $brg->nama_barang; ?></h4>
                                </div>
                                <img src="<?= base_url() . '/assets/img/' . $brg->gambar ?>" width="100%" height="100%" class="card-img-top" alt="...">
                                <div class="card-body ">
                                    <br>
                                    <small><?= $brg->keterangan; ?></small>
                                    <br>
                                    <span class="badge rounded-pill bg-success">Rp. <?= $brg->harga_jual; ?></span>
                                    <br>
                                    <br>
                                    <?= anchor('Produk/tambah_ke_keranjang/' . $brg->kode_barang, '<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </section>
</div>