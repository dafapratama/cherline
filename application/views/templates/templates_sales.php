<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex" href="<?= base_url('sales') ?>">
                <div class="sidebar-brand-text mx-3">CHERLINE</div>
            </a>

            <div class="container">
                <div class="row">
                    <div class="col-2 my-auto px-0">
                        <img class="img-xs rounded-circle" src="<?= base_url('assets/img/user/') . $this->fungsi->user_login()->gambar ?>" alt="profile image" width="40" height="40">
                    </div>
                    <div class="col-8">
                        <p class="mb-0 font-weight-bold"><?= $this->fungsi->user_login()->nama ?></p>
                        <p class="mb-0">Sales Admin</p>
                    </div>
                    <div class="my-auto px-0">
                        <a class="xs-auto fa fa-edit" href="<?= base_url('sales/editprof') ?>"></a>
                    </div>
                </div>
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sales') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- bagian data sama collapsenya masih nyatu harusnya datanya sama collapsenya terpisah. data ke halaman data collapse nampilin data collapsenya -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sales/list_produk') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sales/list_kategori') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>List Kategori</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('sales/lihat_transaksi') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Transaksi</span>
                </a>
            </li>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h3 class="ml-2"><?= $title; ?></h3>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="<?= base_url('auth/logout') ?>" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Keluar</span>
                                <i class="fas fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?= $contents ?>

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/chartjs/Chart.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/aplod.js"></script>
    <script src="<?= base_url('assets/'); ?>js/delete.js"></script>

</body>

</html>