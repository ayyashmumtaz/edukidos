    <!-- Page Wrapper -->
    <div id="wrapper">

     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  
    <div class="sidebar-brand-text mx-3">Digital Printing</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('');?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('Order/input_order');?>">
        <i class="fas fa-fw fa-plus"></i>
        <span>Input Order</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Lorem Ipsum
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-box"></i>
        <span>Gudang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="<?= site_url('Gudang');?>">Order Gudang</a>
            <a class="collapse-item" href="<?= site_url('Gudang/barang_masuk');?>">Barang Masuk</a>
            <a class="collapse-item" href="<?= site_url('Gudang/barang_keluar');?>">Barang Keluar</a>
            <a class="collapse-item" href="<?= site_url('Gudang/barang_datang');?>">Kedatangan Barang</a>
            <a class="collapse-item" href="<?= site_url('Gudang/barang_retur');?>">Retur Barang</a>

        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>SPK</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= site_url('Spk/a3');?>">A3</a>
            <a class="collapse-item" href="<?= site_url('Spk/indoor');?>">INDOOR</a>
            <a class="collapse-item" href="<?= site_url('Spk/outdoor');?>">OUTDOOR</a>
            <a class="collapse-item" href="<?= site_url('Spk/cutting');?>">CUTTING</a>
            <a class="collapse-item" href="<?= site_url('Spk/finishing');?>">FINISHING</a>
            <a class="collapse-item" href="<?= site_url('Spk/lain_lain');?>">LAIN - LAIN</a>


        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rekapHarian"
        aria-expanded="true" aria-controls="rekapHarian">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Rekap Harian</span>
    </a>
    <div id="rekapHarian" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">A3</a>
            <a class="collapse-item" href="utilities-border.html">INDOOR</a>
            <a class="collapse-item" href="utilities-animation.html">OUTDOOR</a>
            <a class="collapse-item" href="utilities-other.html">CUTTING</a>
            <a class="collapse-item" href="utilities-other.html">FINISHING</a>
            <a class="collapse-item" href="utilities-other.html">LAIN - LAIN</a>


        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#produksi"
        aria-expanded="true" aria-controls="produksi">
        <i class="fas fa-fw fa-pen"></i>
        <span>Produksi</span>
    </a>
    <div id="produksi" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">A3</a>
            <a class="collapse-item" href="utilities-border.html">INDOOR</a>
            <a class="collapse-item" href="utilities-animation.html">OUTDOOR</a>
            <a class="collapse-item" href="utilities-other.html">CUTTING</a>
            <a class="collapse-item" href="utilities-other.html">FINISHING</a>
            <a class="collapse-item" href="utilities-other.html">LAIN - LAIN</a>


        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi"
        aria-expanded="true" aria-controls="transaksi">
        <i class="fas fa-fw fa-money-bill"></i>
        <span>Transaksi</span>
    </a>
    <div id="transaksi" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Data Transaksi</a>

        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan"
        aria-expanded="true" aria-controls="laporan">
        <i class="fas fa-fw fa-chart-line"></i>
        <span>Laporan</span>
    </a>
    <div id="laporan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Arus Gudang</a>

        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-truck"></i>
        <span>Kedatangan Barang</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Stok Barang</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Config
</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-bars"></i>
        <span>Master Data</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Data Bahan</a>
            <a class="collapse-item" href="utilities-border.html">Karyawan</a>
            <a class="collapse-item" href="utilities-animation.html">Konsumen</a>
            <a class="collapse-item" href="utilities-other.html">Gudang</a>
            <a class="collapse-item" href="utilities-other.html">Kategori</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->

<!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->






   

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                           PT. EDUKIDOS MEDINA CREATIVA
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="btn btn-primary btn-sm mr-2 d-none d-lg-inline small">Douglas McGee</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->