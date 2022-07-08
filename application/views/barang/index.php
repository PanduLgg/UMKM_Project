<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <section class="content-header">
            <h1>
                Data Barang
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
                        <a href="<?= site_url('/Barang/tambah'); ?>" class="btn btn-primary" class="btn btn-success">Tambah Barang</a>
                    </div>
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Supplier</th>
                                <th>Harga Jual</th>
                                <!-- <th>Keterangan</th> -->
                                <th>Stok</th>
                                <!-- <th>Gambar</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($barang as $row) : ?>
                                <tr>
                                    <th><?= $no++; ?></th>
                                    <td><?= $row->nama_barang; ?></td>
                                    <td><?= $row->nama_kategori; ?></td>
                                    <td><?= $row->nama_satuan; ?></td>
                                    <td><?= $row->harga_jual; ?></td>
                                    <!-- <td><?= $row->keterangan; ?></td> -->
                                    <td><?= $row->stok; ?></td>
                                    <!-- <td><?= $row->gambar; ?></td> -->
                                    <td><a href="<?= site_url('/Barang/edit/' . $row->kode_barang); ?>" class="btn  btn-warning"> <i class="fa fa-edit"></i> Edit</a>
                                        <button onclick="confirm('Yakin di Hapus?') ? location.href='<?= site_url('/Barang/hapus/' . $row->kode_barang) ?>' : null" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </section>
</div>