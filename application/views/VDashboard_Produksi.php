<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/logodoang_soerja.png">
    <title>roof-inno</title>
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="<?php echo base_url(); ?>assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/7fe2999734.js"></script>
    <!-- font awesome CSS -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" rel="stylesheet" >
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- This Page CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar bg-transparent">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logodoang_soerja.png" alt="homepage" class="dark-logo" width="50"/>
                            <!-- Light Logo Icon -->
                            <img src="<?php echo base_url(); ?>assets/images/logodoang_soerja.png" alt="homepage" class="light-logo" width="50" />
                        </b>
                        <span class="logo-text">
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>assets/images/textdoang_soerja.png" alt="homepage" class="dark-logo" width="150"/>
                            <!-- Light Logo Icon -->
                            <img src="<?php echo base_url(); ?>assets/images/textdoang_soerja.png" alt="homepage" class="light-logo" width="150"/>
                        </span>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse bg-transparent" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <!-- Left Side Toggle and Nav items biar ngga ke kanan -->
                    <ul class="navbar-nav float-left mr-auto">
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-bell fa-lg"></i>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="mb-0 mt-1">4 New</h4>
                                            <span class="font-light">Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle fa-lg"></i></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Habib</h4>
                                        <p class=" mb-0">habib@soerja.com</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- Menu -->
                        <li class="sidebar-item active"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-th-large"></i><span class="hide-menu">Dashboard </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./demo" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Utama </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item active"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-solar-panel"></i><span class="hide-menu">Produksi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./produksi" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Produksi </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-plug"></i><span class="hide-menu">Konsumsi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./konsumsi" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Konsumsi </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-signal"></i><span class="hide-menu">Performa </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./performa" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Performa </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-wallet"></i><span class="hide-menu">Penghematan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./penghematan" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Penghematan </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-battery-full"></i><span class="hide-menu">Baterai </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./baterai" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Baterai </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Laporan </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="./laporan" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Laporan </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-clock"></i><span class="hide-menu">Penjadwalan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./penjadwalan" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Dashboard Penjadwalan </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-cog"></i><span class="hide-menu">Pengaturan </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="./pengaturan" class="sidebar-link"><i class="mdi mdi-adjust"></i><span class="hide-menu"> Pengaturan Dashboard </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- CONTAINER FLUID -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="<?php echo base_url(); ?>assets/images/Produksi.png" alt="Produksi" height="65" width="65">
                                    </div>
                                    <div class="col-4">
                                        <br>
                                        <h3> Monitor Data Produksi</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Produksi Harian / Monitor Data Produksi -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="col-12">
                                        <h4 class="card-title"><Strong>Produksi Harian</Strong></h4>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <h4 class="card-title" style="color: blue ; margin-left: 15px" ><strong>2KWh</strong></h4>
                                            <h6 class="card-subtitle" style="margin-left: 15px">Pada 12.00 PM</h6>
                                        </div>
                                        <div class="col-lg-2" style="text-align: left">
                                            <h4 class="card-title" style="color: blue ; margin-left: 15px"><strong>600KWh</strong></h4>
                                            <h6 class="card-subtitle" style="margin-left: 15px">Total Produksi</h6>
                                        </div>
                                        <div class="col-4 float-right">
                                            <h5 class="card-subtitle" style="margin-left:155px; margin-top:10px">29 November 2019</h5>
                                        </div>
                                        <div class="col-lg-1">
                                            <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                            <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                                        </div>
                                        <div class="col-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" style="width:10px;">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     <!--========================================================================================== -->
                                                <!-- Produksi Mingguan -->
    <!-- ========================================================================================== -->

                 <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                 <div class="col-12">
                                    <h4 class="card-title"><Strong>Produksi Mingguan</Strong></h4>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                                        <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                                    </div>
                                    <div class="col-lg-9 float-right">
                                         <h5 class="card-subtitle" style="margin-left:505px; margin-top:5px">24 November - 30 November</h5>
                                    </div>
                                    <div class="col-lg-1">
                                            <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                            <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-4"></div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select">
                                                        <option value="0" selected>Bulan</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select dropdown-toggle">
                                                        <option value="0" selected>Tahun</option>
                                                        <option value="1">2018</option>
                                                        <option value="2">2019</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select">
                                                        <option value="0" selected>Minggu</option>
                                                        <option value="1">Minggu 1</option>
                                                        <option value="2">Minggu 2</option>
                                                        <option value="3">Minggu 3</option>
                                                        <option value="4">Minggu 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                            </div>
                                </div>
                                <!-- Bulanan -->
                                <div class="pt-3">
                                    <div class="row">
                                        <!-- column -->
                                       <div class="col-md-12 col-lg-12">
                                          <div class="ct-sm-line-chart" style="position: relative; height:250px;width:1050px;"></div>
                                            <div class="row mb-0 mt-3 text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- ============================================================== -->
                <!-- END PRODUKSI MINGGUAN -->
                <!-- ============================================================== -->
    <!-- ========================================================================================== -->
                                                <!-- Produksi Bulanan -->
     <!-- ========================================================================================== -->

                 <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                 <div class="col-12">
                                    <h4 class="card-title"><Strong>Produksi Bulanan</Strong></h4>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                                        <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                                    </div>
                                    <div class="col-lg-9 float-right">
                                         <h5 class="card-subtitle" style="margin-left:570px; margin-top:5px">November 2019</h5>
                                    </div>
                                    <div class="col-lg-1">
                                            <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                            <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-6"></div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select">
                                                        <option value="0" selected>Bulan</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select dropdown-toggle">
                                                        <option value="0" selected>Tahun</option>
                                                        <option value="1">2018</option>
                                                        <option value="2">2019</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                            </div>
                                </div>
                                <!-- Bulanan -->
                                <div class="pt-3">
                                    <div class="row">
                                        <!-- column -->
                                       <div class="col-md-12 col-lg-12">
                                          <div id="stacked-column-produksi-bulanan" style="position: relative; height:250px;"></div>
                                            <div class="row mb-0 mt-3 text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- ============================================================== -->
                <!-- END PRODUKSI BULANAN -->
                <!-- ============================================================== -->
    <!-- ========================================================================================== -->
                                                <!-- Produksi Tahunan -->
     <!-- ========================================================================================== -->

                 <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                 <div class="col-12">
                                    <h4 class="card-title"><Strong>Produksi Tahunan</Strong></h4>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <h4 class="card-title" style="color: blue; margin-left: 30px"><strong>600KWh</strong></h4>
                                        <h6 class="card-subtitle" style="margin-left: 30px">Total Produksi</h6>
                                    </div>
                                    <div class="col-lg-9 float-right">
                                         <h5 class="card-subtitle" style="margin-left:630px; margin-top:5px">2019</h5>
                                    </div>
                                    <div class="col-lg-1">
                                            <i class="fas fa-angle-left" style="margin-left:5px; margin-top:10px"></i>
                                            <i class="fas fa-angle-right" style="margin-left: 10px; margin-top:10px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-8"></div>
                                            <div class="col-2 float-right">
                                                <div class="dl">
                                                    <select class="custom-select dropdown-toggle">
                                                        <option value="0" selected>Tahun</option>
                                                        <option value="1">2018</option>
                                                        <option value="2">2019</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-2 float-right">
                                                <button type="button" class="btn btn-block btn-info">Terapkan</button>
                                            </div>
                                </div>
                                <!-- tahunan -->
                                <div class="pt-3">
                                    <div class="row">
                                        <!-- column -->
                                       <div class="col-md-12 col-lg-12">
                                          <div id="stacked-column-produksi-tahunan" style="position: relative; height:250px;"></div>
                                            <div class="row mb-0 mt-3 text-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- ============================================================== -->
                <!-- END PRODUKSI TAHUNAN -->
                <!-- ============================================================== -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Daya baterai, performa hari ini -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-white">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?php echo base_url(); ?>assets/images/dayabaterai.png" alt="performa hari ini" height="115" width="110">
                                    </div>
                                    <div class="col-6">
                                        <br>
                                        <h3>80%</h3>
                                        <h6 class="card-title text-black">Daya Baterai</h6>
                                        <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-white">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?php echo base_url(); ?>assets/images/penghematan.png" alt="performa hari ini" height="115" width="110">
                                    </div>
                                    <div class="col-6">
                                        <br>
                                        <h3>Rp 134.000</h3>
                                        <h6 class="card-title text-black">Penghematan Hari Ini</h6>
                                        <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-white">
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?php echo base_url(); ?>assets/images/performa.png" alt="performa hari ini" height="115" width="110">
                                    </div>
                                    <div class="col-6">
                                        <br>
                                        <h3>80%</h3>
                                        <h6 class="card-title text-black">Performa Hari Ini</h6>
                                        <button type="button" class="btn waves-effect waves-light btn-info">Lihat Lebih</button>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
    <!-- ============================================================== -->
    <!-- FOOTER -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
       Designed with <i class="fas fa-heart" style="color: red"></i> by <a href="https://roof-inno.com" style="color: black">roof-inno</a>
    </footer>
    <!-- ============================================================== -->
    <!-- END FOOTER -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"><i class="fa fa-spin fa-cog"></i></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="mdi mdi-wrench font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="mdi mdi-message-reply font-20"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="mdi mdi-star-circle font-20"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent2">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-15 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="theme-view" id="theme-view">
                            <label class="custom-control-label" for="theme-view">Dark Theme</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a></li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-15 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a></li>
                            <li class="theme-item"><a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a></li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/5.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/6.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/7.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img"> <img src="<?php echo base_url(); ?>assets/image/users/8.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-15" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?php echo base_url(); ?>assets/image/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?php echo base_url(); ?>assets/image/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary"> <i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?php echo base_url(); ?>assets/image/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"> <img class="rounded-circle" alt="user" src="<?php echo base_url(); ?>assets/image/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="<?php echo base_url(); ?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/c3/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/extra-libs/c3/c3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="assets/libs/flot/excanvas.min.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/dist/js/pages/dashboards/dashboard2.js"></script>
    <script src="assets/dist/js/pages/dashboards/dashboard9.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- DASHBOARD 1 -->
    <!-- ============================================================== -->
    <script src="assets/libs/echarts/dist/echarts-en.min.js"></script>
    <script src="assets/dist/js/pages/dashboards/dashboard1monitor.js"></script>
    <script src="assets/dist/js/pages/dashboards/dashboard1mingguan.js"></script>
    <script src="assets/dist/js/pages/dashboards/dashboard1bulanan.js"></script>
    <!-- DATE PICKER -->
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
    // Date Picker
    jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
    </script>
</body>

</html>
