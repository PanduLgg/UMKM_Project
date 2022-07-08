<style>
    .hidden {
        display: none;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Pembayaran
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
            <div class="container-fluid">
                <div class=" row">
                    <div class="col-md-2">
                        <div class="col-md-8">

                            <div class="col-md-2">
                            </div>
                        </div>
                    </div>
                </div>
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
                                <form action="<?= site_url('/Produk/proses/') ?>" method="post">
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-4">
                                            <div class="form-group">
                                                <input type="hidden" name="kode_barang">
                                            </div>
                                            <fieldset disabled>
                                                <div class="form-group">
                                                    <label for="nama_barang">Tanggal Beli</label>
                                                    <input type="date" id="date" name="tgl_pesan" value="<?= date('Y-m-d') ?>" class="form-control" required>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <label for="kategori_barang">Nama Lengkap</label>
                                                <input type="text" id="nama" name="nama" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="satuan_barang">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="harbel">No Handphone</label>
                                                <input type="number" id="no_hp" name="nohp" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Metode Pembayaran</label>
                                                <div class="form-group" required>
                                                    <select class="form-control" name="bayar">
                                                        <option value="0">BNI</option>
                                                        <option value="1">BRI</option>
                                                        <option value="2">BCA</option>
                                                        <option value="3">Mandiri</option>
                                                        <option value="4">Alfamart/Indomart</option>
                                                    </select>
                                                </div>
                                            </div>
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
                                            <div class="form-group">
                                                <label for="stok">Jasa Pengiriman</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="bayar">
                                                        <option value="0">J & T</option>
                                                        <option value="1">JNE</option>
                                                        <option value="2">ID Expres</option>
                                                        <option value="3">Gojek</option>
                                                        <option value="4">Pos Indonesia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Bukti Bayar</label>
                                                <input type="file" class="form-control" name="bukti" id="bukti" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="catatan">Catatan</label>
                                                <textarea id="note" rows="3" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-success"><i class="fa fa-paper-plane"> Proses</i></button>
                                                <button type="reset" class="btn btn-block btn-warning"><i class="fa fa-undo"> Cancel</i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</div>
<!-- /.content-wrapper -->
<script>
    var Arende = document.getElementById("Arende");
    var Bestallning = document.getElementById("Bestallning");
    var Anmalan = document.getElementById("Anmalan");

    // Listen to changes in <select>
    Arende.addEventListener('change', function() {

        // Get the value of selected <option>
        var value = this.options[this.selectedIndex].value;

        // Hide all other elements, but show the one whose ID matches option value
        var otherElements = document.querySelectorAll('.otherElements');
        for (var i = 0; i < otherElements.length; i++) {
            var el = otherElements[i];

            if (el.id === value)
                el.style.display = 'block';
            else
                el.style.display = 'none';
        }
    });
</script>