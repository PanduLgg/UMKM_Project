<div class="content-wrapper">
    <section class="content">
        <section class="content-header">
            <h1>
                Data Users
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
                        <a href="<?= site_url('/User/tambah'); ?> " class="btn btn-primary ">
                            <i class="fa fa-users"> Tambah User</i>
                        </a>
                    </div>
                    <br>
                </div>
                <br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Tanggal Bergabung</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($row->result() as $data) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data->username ?></td>
                                    <td><?= $data->name ?></td>
                                    <td><?= $data->email ?></td>
                                    <td><?= $data->level ?> </td>
                                    <td><?= date('d F Y', $data->date_create); ?></td>
                                    <td class="text-center" width="160px">
                                        <form action="<?= site_url('/User/hapus') ?>" method="post">
                                            <a href="<?= site_url('/User/edit/' . $data->user_id); ?> " class="btn btn-primary btn-xs ">
                                                <i class="fas fa-edit"> Edit</i>
                                            </a>
                                            <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                                            <button onclick="return confirm('Apakah yakin data akan dihapus?')" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash"> Hapus</i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            <?php
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
</div>