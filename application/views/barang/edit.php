<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Edit Data
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
                    <div class="float-sm-right">
                        <a href="<?= site_url('/Barang'); ?>" class="btn btn-warning "><i class=" fa fa-undo"> Back</i></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 col-md-offset-4">
                        <form action="<?= site_url('/Barang/simpan') ?>" method="post">
                            <div class="form-group">
                                <input type="hidden" name="kode_barang" value="<?= $dt->kode_barang; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nabar" id="nama_barang" class="form-control" value="<?= $dt->nama_barang; ?>">
                            </div>
                            <div class="form-group">
                                <label for="kategori_barang">Kategori Barang</label>
                                <select name="katbar" id="kategori_barang" class="form-control">
                                    <option value=""> - Pilih -</option>
                                    <?php foreach ($kategori  as $kt) : ?>
                                        <option value="<?= $kt->id_kategori; ?>" <?= ($dt->kategori_barang == $kt->id_kategori) ? 'selected' : null ?>><?= $kt->nama_kategori; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="satuan_barang">Supplier Brang</label>
                                <select name="satbar" id="satuan_barang" class="form-control">
                                    <option value=""> - Pilih -</option>
                                    <?php foreach ($satuan  as $st) : ?>
                                        <option value="<?= $st->id_satuan; ?>" <?= ($dt->satuan_barang == $st->id_satuan) ? 'selected' : null ?>><?= $st->nama_satuan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harbel">Harga Beli</label>
                                <input type="number" name="harbel" id="harbel" class="form-control" value="<?= $dt->harga_beli; ?>">
                            </div>
                            <div class="form-group">
                                <label for="harjul">Harga Jual</label>
                                <input type="number" name="harjul" id="harjul" class="form-control" value="<?= $dt->harga_jual; ?>">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="number" name="stok" id="stok" class="form-control" value="<?= $dt->stok; ?>">
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar Produk</label>
                                <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $dt->gambar; ?>" required>
                            </div>
                            <div class=" form-group">
                                <button type="submit" class="btn btn-block btn-success"><i class="fa fa-paper-plane"> Submit</i></button>
                                <button type="reset" class="btn btn-block btn-danger"><i class="fa fa-undo"> Reset</i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>