<!-- Content Wrapper. Contains page content -->
<main id="main">
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
                <div align="middle">
                    <a href="<?= site_url('/Inner/hapus') ?>">
                        <div class="btn btn-danger mb-1"><i class='bx bx-trash'></i> Hapus
                        </div>
                    </a>
                    <a href="<?= site_url('/Inner') ?>">
                        <div class="btn btn-primary mb-1"><i class='bx bx-arrow-back'></i> Kembali
                        </div>
                    </a>
                    <a href="<?= site_url('/Inner/checkout') ?>">
                        <div class="btn btn-success mb-1"><i class='bx bx-paper-plane'></i> Checkout
                        </div>
                    </a>
                </div>
            </div>
    </section>
</main>