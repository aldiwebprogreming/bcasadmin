<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Bcas</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>calender/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/')  ?>calender/theme.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <!--    <i class="fab fa-gratipay"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3"><img src="<?= base_url('assets/logo/logo.png') ?>"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Utama
            </div>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_slide') ?>">
                    <i class="fas fa-sliders-h"></i>
                    <span>Slide Home</span>
                </a>

                <a class="nav-link" href="<?= base_url('admin/tambah_slide') ?>">
                    <i class="fas fa-plus-square"></i>
                    <span>Tambah Slide</span>
                </a>
            </li>


            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                About
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>About</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?= base_url('admin/visi') ?>">Our Vission</a>
                        <a class="collapse-item" href="<?= base_url('admin/misi') ?>">Our Mission</a>
                        <a class="collapse-item" href="<?= base_url('admin/our_product') ?>">Our Product</a>
                        <a class="collapse-item" href="<?= base_url('admin/our_strength') ?>">Our Strength</a>
                        
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Product
            </div>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/product') ?>">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Data Product</span>
                </a>

                <a class="nav-link" href="<?= base_url('admin/tambah_product') ?>">
                    <i class="fas fa-store"></i>
                    <span>Tambah Product</span>
                </a>


            </li>

             <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Brand
            </div>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/brand') ?>">
                    <i class="fas fa-list"></i>
                    <span> Data Brand</span></a>

                <a class="nav-link" href="<?= base_url('admin/tambah_brand') ?>">
                    <i class="fas fa-plus-circle"></i>
                    <span> Tambah Brend</span>
                </a>
            </li>

             <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/admin') ?>">
                    <i class="fas fa-users"></i>
                    <span>Data Admin</span></a>

                <a class="nav-link" href="<?= base_url('admin/tambah_admin') ?>">
                    <i class="fas fa-user-plus"></i>
                    <span>Tambah Admin</span></a>

             
            </li>

        
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           <!--  <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> -->

        </ul>

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
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
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
                            <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
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
                            </div> -->
                        </li>

                        <!-- Nav Item - Alerts -->
                        
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user fa-fw"></i>
                                <!-- Counter - Messages -->
                              <!--   <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Profil
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                            
                           
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?= base_url('assets/img/') ?>undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate"><?= $this->session->username ?></div>
                                        <div class="small text-gray-500"></div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('login/logout') ?>">Logout</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        
                    </ul>

                </nav>