<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Belanja
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
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($this->cart->contents() as $items) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $items['name'] ?></td>
                                    <td><?= $items['qty'] ?></td>
                                    <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
                                    <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="4">
                                <td align="right"> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?>
                                </td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div align="right">
                        <a href="<?= site_url('/Produk/hapus') ?>">
                            <div class="btn btn-danger"><i class="fa fa-trash"> Hapus</i>
                            </div>
                        </a>
                        <a href="<?= site_url('/Produk') ?>">
                            <div class="btn btn-primary"><i class="fa  fa-plus"> Lanjutkan Belanja</i>
                            </div>
                        </a>
                        <a href="<?= site_url('/Produk/checkout') ?>">
                            <div class="btn btn-success"><i class="fa fa-paper-plane"> Pembayaran</i>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
</div>