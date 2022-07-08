<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Kategori Produk
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
                            Tambah Kategori Produk
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
                                <th>Nama Kategori Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($kategori as $sat) : ?>
                                <tr>
                                    <th><?= $no++; ?></th>
                                    <td><?= $sat->nama_kategori; ?></td>
                                    <td><a href="<?= site_url('/Kategori/edit/' . $sat->id_kategori); ?>" class="btn btn-warning"> <i class="fa fa-edit"> </i> Edit</a>
                                        <button onclick="confirm('Yakin di Hapus?') ? location.href='<?= site_url('/Kategori/delete/' . $sat->id_kategori) ?>' : null" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button>
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
                <h3 class="modal-title" id="staticBackdropLabel">Tambah Kategori</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url() . 'kategori/create'; ?>">
                    <div class=" mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" required>
                    </div>
                    <div class="">
                        <button type="submit" name="simpan" class="btn btn-block btn-primary w-100">Tambah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>