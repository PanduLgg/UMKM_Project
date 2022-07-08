<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <i class="fas fa-shopping-bag ml-3"></i>&nbsp; &nbsp; UMKM SUPER
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-0 px-5 py-2 mb-0 d-flex">

            <div class="info">

                <a href="#" class="d-block">
                    <span class="hidden-xs"><?= $this->acces->nama_login()->name; ?></span>
                </a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header"> MAIN NAVIGATION</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li <?= $this->uri->segment(1) == 'Produk' ?: '' ?>class="nav-item">
                            <a href="<?= site_url('/Dashboard'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Barang' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Barang'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tshirt"></i> <span> Kelola Produk</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Kategori' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Kategori'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-list"></i> <span>Kategori Produk</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Supplier' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Supplier'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-truck"></i> <span>Kelola Supplier</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Invoice' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Invoice') ?>" class="nav-link">
                                <i class="nav-icon fas fa-paper-plane" aria-hidden="true"></i>
                                <span>Pesanan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">TAMPILAN USER</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li <?= $this->uri->segment(1) == 'Produk' ? '' : '' ?> class="nav-item">
                            <a href="<?= site_url('/Produk'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tv"></i> <span> Daftar Produk</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Belanja' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Produk/detail_keranjang'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-cart-arrow-down"></i> Data Belanja</a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'Pembayaran' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/Produk/checkout/') ?>" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i> Pembayaran</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">SETTING</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li <?= $this->uri->segment(1) == 'User' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('/User'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <span> Users</span>
                            </a>
                        </li>
                        <li <?= $this->uri->segment(1) == 'User' ?: '' ?> class="nav-item">
                            <a href="<?= site_url('login/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-door-open"></i> Sign out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- /.control-sidebar -->