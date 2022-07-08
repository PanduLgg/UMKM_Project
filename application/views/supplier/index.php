<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Supplier
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            Tambah Supplier
                        </button>
                    </div>
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Kota</th>
                                <th>Telepon</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($supplier as $sat) : ?>
                                <tr>
                                    <th><?= $no++; ?></th>
                                    <td><?= $sat->nama_satuan; ?></td>
                                    <td><?= $sat->kota; ?></td>
                                    <td><?= $sat->telepon; ?></td>
                                    <td><?= $sat->kontak; ?></td>
                                    <td><?= $sat->alamat; ?></td>
                                    <td><a href="<?= site_url('/Supplier/edit/' . $sat->id_satuan); ?>" class="btn btn-warning"> <i class="fa fa-edit"> </i> Edit</a>
                                        <button onclick="confirm('Yakin di Hapus?') ? location.href='<?= site_url('/Supplier/delete/' . $sat->id_satuan) ?>' : null" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
        </section>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h3 class="modal-title" id="staticBackdropLabel">Tambah Supplier</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() . 'supplier/create'; ?>">
                    <div class=" mb-3">
                        <label for="nama_satuan" class="form-label">Nama Supplier</label>
                        <input type="text" class="form-control" name="nama_satuan" id="nama_satuan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" id="kota" required>
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak Person</label>
                        <input type="text" class="form-control" name="kontak" id="kontak" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                    <div class="">
                        <button type="submit" name="simpan" class="btn btn-block btn-primary w-100">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>