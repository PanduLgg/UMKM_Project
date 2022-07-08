<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Edit Data Supplier
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
                        <a href="<?= site_url('/Supplier'); ?>" class="btn btn-warning"><i class=" fa fa-undo"> Back</i></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <?php
                    foreach ($supplier as $sat) { ?>
                        <div class="col-md-12 col-md-offset-4">
                            <form action="<?= base_url() . 'supplier/update'; ?>" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id_satuan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_satuan">Nama Supplier</label>
                                    <input type="text" name="nasat" id="nama_satuan" class="form-control" value="<?= $sat->nama_satuan ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="kota" class="form-label">Kota</label>
                                    <input type="text" class="form-control" name="kota" id="kota" value="<?= $sat->kota ?>" required>
                                </div>
                                <div class=" form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="number" name="telepon" id="telepon" class="form-control" value="<?= $sat->telepon ?>">
                                </div>
                                <div class="form-group">
                                    <label for="kontak" class="form-label">Kontak Person</label>
                                    <input type="text" class="form-control" name="kontak" id="kontak" required value="<?= $sat->kontak ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $sat->alamat ?>">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success"><i class="fa fa-paper-plane"> Ubah</i></button>
                                    <button type="reset" class="btn btn-block btn-danger"><i class="fa fa-undo"> Reset</i></button>
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
</div>