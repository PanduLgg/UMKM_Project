<div class="content-wrapper">
    <section class="content">
        <section class="content-header">
            <h1>
                <?= $judul; ?>
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
                        <a href="<?= site_url('/User'); ?> " class="btn btn-warning ">
                            <i class="fa fa-undo"> Back</i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-4">
                            <form action="<?= site_url('/User/update'); ?>" method="post">

                                <div class="form-group">
                                    <label for="nama">Name</label>
                                    <input type="text" name="fullname" value="<?= $user->name ?>" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" value="<?= $user->username ?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Email</label>
                                    <textarea name="email" class=" form-control"><?= $user->email ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select name="level" id="level" class=" form-control">
                                        <option value="0">--Pilih--</option>
                                        <option value="1" <?= ($user->level == 1) ? 'SELECTED' : null ?>>Admin</option>
                                        <option value="2" <?= ($user->level == 2) ? 'SELECTED' : null ?>>User</option>
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-block btn-success "><i class="fa fa-paper-plane"> Submit</i></button>
                                    <button type="Reset" class="btn btn-block btn-danger "><i class="fa fa-undo"> Reset</i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
</div>