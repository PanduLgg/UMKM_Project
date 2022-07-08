<!-- Content Wrapper. Contains page content -->
<div class="mt-0">
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-widget">
                        <div class="box-body">
                            <div class="box-header with-border">
                                <br>
                                <div class="btn btn-sm btn-success float-sm-right">
                                    <?php $grand_total = 0;
                                    if ($keranjang = $this->cart->contents()) {
                                        foreach ($keranjang as $item) {
                                            $grand_total = $grand_total + $item['subtotal'];
                                        }
                                    }

                                    echo "Total belanja anda adalah : Rp. " . number_format($grand_total, 0, ',', '.');
                                    ?>
                                </div>
                            </div>
                            <form action="<?= site_url('/Inner/proses/') ?>" method="post">
                                <br>
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-4">
                                        <form action="<?= site_url('/Inner/proses/') ?>" method="post">
                                            <div class="form-group">
                                                <input type="hidden" name="kode_barang">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_barang">Tanggal Beli</label>
                                                <input type="date" id="date" name="tgl_pesan" value="<?= date('Y-m-d') ?>" class="form-control" required>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="kategori_barang">Nama Lengkap</label>
                                                <input type="text" id="nama" name="nama" class="form-control" required value="<?= set_value('nama'); ?>">
                                            </div>
                                            <br>
                                            <div class=" form-group">
                                                <label for="satuan_barang">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" class="form-control" required value="<?= set_value('alamat'); ?>">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="harbel">No Handphone</label>
                                                <input type="number" id="no_hp" name="nohp" class="form-control" required value="<?= set_value('no_hp'); ?>">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="">Metode Pembayaran</label>
                                                <div class="form-group" required>
                                                    <select class="form-control">
                                                        <option value="0">BNI</option>
                                                        <option value="1">BRI</option>
                                                        <option value="2">BCA</option>
                                                        <option value="3">Mandiri</option>
                                                        <option value="4">Alfamart/indomart</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <fieldset disabled>
                                                <div class="form-group">
                                                    <label for="disabledSelect">Bayar ke Nomor Ini</label>
                                                    <span class="text-danger">*Sesuai dengan metode pembayaran yang anda pilih</span>
                                                    <textarea id="" rows="5" class="form-control text-left">
BNI - 0122212331
BRI - 0213332126
BCA - 0135689334
Mandiri - 0146997633                                                   
Alfamart/Indomart - 0512883191
                                                    </textarea>
                                                </div>
                                            </fieldset>
                                            <br>
                                            <div class="form-group">
                                                <label for="stok">Jasa Pengiriman</label>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="0">J & T</option>
                                                        <option value="1">JNE</option>
                                                        <option value="2">ID Expres</option>
                                                        <option value="3">Gojek</option>
                                                        <option value="4">Pos Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="image">Bukti Bayar</label>
                                                <input type="file" class="form-control" name="bukti" id="bukti" required>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <textarea id="note" rows="3" class="form-control" name="catatan" id="catatan" value="<?= set_value('catatan'); ?>"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <br>
                                                <button type="submit" class="btn btn-block btn-success"><i class='bx bx-paper-plane'></i> Proses</button>
                                                <button type="reset" class="btn btn-block btn-danger"><i class='bx bx-arrow-back'></i> Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
    </section>
</div>
<!-- /.content-wrapper -->