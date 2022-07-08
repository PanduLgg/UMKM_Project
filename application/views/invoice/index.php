<div class="content-wrapper">
    <section class="content">
        <section class="content-header">
            <h1>
                Data Pesanan
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
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Tanggal Pesan</th>
                                <th>Batas Bayar</th>
                                <th>Bukti Bayar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($invoice->result() as $invc) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $invc->nama; ?></td>
                                    <td><?= $invc->alamat; ?></td>
                                    <td><?= $invc->nohp ?></td>
                                    <td><?= $invc->tgl_pesan; ?></td>
                                    <td><?= $invc->batas_bayar; ?></td>
                                    <td><?= $invc->bukti; ?></td>
                                    <td><button onclick="confirm('Yakin di Hapus?') ? location.href='<?= site_url('/Invoice/delete/' . $invc->id) ?>' : null" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button></td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
</div>