<?php
include "../koneksi.php";
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, akses gagal!. Anda harus log in terlebih dahulu');document.location='../index.php'</script>";
}

/*$query1 = $koneksi->query("SELECT * FROM desa");*/
$query2 = $koneksi->query("SELECT * FROM kelurahan WHERE NOT id_kel = 0");
$query3 = $koneksi->query("SELECT * FROM pg");
$query4 = $koneksi->query("SELECT * FROM kecamatan");
$query5 = $koneksi->query("SELECT * FROM subpotensi");
$query6 = $koneksi->query("SELECT * FROM potensi");
$query7 = $koneksi->query("SELECT * FROM kkn");
$query8 = $koneksi->query("SELECT * FROM kkn WHERE proses = 'Sedang Dikerjakan'");

/*$jml_desa = mysqli_num_rows($query1);*/
$jml_kel = mysqli_num_rows($query2);
$jml_univ = mysqli_num_rows($query3);
$jml_kec = mysqli_num_rows($query4);
$jml_sub = mysqli_num_rows($query5);
$jml_pot = mysqli_num_rows($query6);
$jml_kkn = mysqli_num_rows($query7);
$jml_potensi_dikerjakan = mysqli_num_rows($query8);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Bappeda</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <style>
        .black-color {
            color: #000;
        }
    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="../img/logo.png" width="60" height="60">
                </div>
                <div class="sidebar-brand-text mx-3">Admin Bappeda <sup>:)</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin-master.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Daftar</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar :</h6>
                        <!--<a class="collapse-item" href="desa.php">Daftar Desa</a>-->
                        <a class="collapse-item" href="potensi.php">Daftar Potensi</a>
                        <a class="collapse-item" href="kelurahan.php">Daftar Kelurahan</a>
                        <a class="collapse-item" href="kecamatan.php">Daftar Kapanewon</a>
                        <a class="collapse-item" href="program_kerja.php">Daftar Program Kerja</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Perguruan Tinggi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perguruan Tinggi</h6>
                        <a class="collapse-item" href="univ.php">Daftar Perguruan Tinggi</a>
                        <a class="collapse-item" href="kkn.php">Pendaftaran KKN</a>
                        <a class="collapse-item" href="approve_kkn.php">Persetujuan KKN</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTheree" aria-expanded="true" aria-controls="collapseTheree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Template Surat </span>
                </a>
                <div id="collapseTheree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perguruan Tinggi</h6>
                        <a class="collapse-item" href="form_pejabat.php">Form Pejabat</a>
                        <a class="collapse-item" href="tingkatan.php">Tingkatan</a>
                        <a class="collapse-item" href="template_perizinan_dasar.php">Perizinan Dasar</a>
                        <a class="collapse-item" href="template_perizinan_ketentuan.php">Perizinan Ketentuan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="usulan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Usulan</span></a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="aprrove_kkn.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Persetujuan</span></a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="kontak.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kontak</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengolahan User
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTheree">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Pengelolaan Admin </span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin</h6>
                        <a class="collapse-item" href="admin-kecamatan.php">Kecamatan</a>
                        <a class="collapse-item" href="admin-kelurahan.php">Kelurahan</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="lap_kkn.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Program KKN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <b>
                                        <?= $_SESSION['nama_user'] ?>
                                    </b>
                                </span>
                                <img src="../img/logo.png" width="40" height="40">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0  black-color"><b>Selamat Datang Admin Bappeda </b>
                        </h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                JUMLAH DESA </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo number_format($jml_desa, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 bg-warning text-white">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1">
                                                JUMLAH KELURAHAN </div>
                                            <div class="h5 mb-0 font-weight-bold">
                                                <?php echo number_format($jml_kel, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 bg-success text-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                JUMLAH KAPANEWON </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_kec, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-primary text-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1 text-white">
                                                JUMLAH KKN </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_kkn, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 bg-warning">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                JUMLAH SUBPOTENSI </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_sub, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2 bg-success">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                JUMLAH POTENSI </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_pot, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2 bg-primary">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                JUMLAH DAFTAR PERGURUAN TINGGI </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_univ, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2 bg-warning">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                                JUMLAH POTENSI YANG DIKERJAKAN </div>
                                            <div class="h5 mb-0 font-weight-bold text-white">
                                                <?php echo number_format($jml_potensi_dikerjakan, 0, ",", "."); ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="container"></div>
                                        <?php
                                        include '../koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT count(potkel.id_potensi) as jumlah, potensi.nama_potensi from potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi GROUP BY potkel.id_potensi ORDER BY jumlah DESC LIMIT 5");
                                        while ($rowww = $query->fetch_assoc()) {
                                            $tinggi[] = intval($rowww['jumlah']);
                                            $potensiTinggi[] = $rowww['nama_potensi'];
                                        }
                                        ?>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="rendah"></div>
                                        <?php
                                        include '../koneksi.php';
                                        $query = mysqli_query($koneksi, "SELECT count(potkel.id_potensi) as jumlah, potensi.nama_potensi from potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi GROUP BY potkel.id_potensi ORDER BY jumlah ASC LIMIT 5");

                                        while ($rowww = $query->fetch_assoc()) {
                                            $rendah[] = intval($rowww['jumlah']);
                                            $potensi[] = $rowww['nama_potensi'];
                                        }
                                        ?>
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="pie"></div>
                                        <?php
                                        include '../koneksi.php';
                                        $t = $koneksi->query("SELECT * FROM kkn WHERE app_bappeda='Diterima'");
                                        $k = $koneksi->query("SELECT * FROM kkn WHERE app_bappeda='Ditolak'");
                                        $m = $koneksi->query("SELECT * FROM kkn WHERE app_bappeda='Menunggu'");

                                        $diterima = mysqli_num_rows($t);
                                        $ditolak = mysqli_num_rows($k);
                                        $menunggu = mysqli_num_rows($m);

                                        ?>
                                    </figure>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">




                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Sistem Pemantauan KKN-2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin Inging Keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih Logout Untuk Melanjutkan.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-danger" href="../logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/chart-area-demo.js"></script>
        <script src="../js/demo/chart-pie-demo.js"></script>

        <script src="../vendor/sweetalert2/sweetalert2.min.js"></script>

        <script src="../vendor/highcharts/highcharts.js"></script>
        <script src="../vendor/highcharts/exporting.js"></script>
        <script src="../vendor/highcharts/export-data.js"></script>
        <script src="../vendor/highcharts/accessibility.js"></script>
        <script type="text/JavaScript">
            // Build the chart
        Highcharts.chart('pie', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                backgroundColor: '#4e73df',
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Status KKN',
                style: {
                    color: "#fff"
                 }
            },
            subtitle: {
                text: 'Status KKN di Kabupaten Bantul',
                style: {
                    color: "#fff"
                 }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    colors:  ['#1cc88a', '#AA4643', '#f6c23e'], //green, red, yellow,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        distance: -50,
                        filter: {
                            property: 'percentage',
                            operator: '>',
                            value: 4
                        }
                    }
                }
            },
            series: [{
                name: 'Share',
                data: [
                    { name: 'Diterima', y:  <?php echo number_format($diterima, 0, ",", "."); ?>},
                    { name: 'Ditolak', y: <?php echo number_format($ditolak, 0, ",", "."); ?>},
                    { name: 'Menunggu', y: <?php echo number_format($menunggu, 0, ",", "."); ?>}
                ]
            }]
        });
    </script>
        <script type="text/JavaScript">
            Highcharts.chart('container', {
    chart: {
        type: 'column',
    },
    title: {
        text: 'Potensi Tertinggi'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: <?php echo json_encode($potensiTinggi); ?> ,
        tickmarkPlacement: 'on',
        title: {
            enabled: true
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah Potensi Tertinggi'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: false,
        valueSuffix: ''
    },
    colors: [
        '#4572A7', 
        '#AA4643', 
        '#89A54E', 
        '#80699B', 
        '#3D96AE', 
        '#DB843D', 
        '#92A8CD', 
        '#A47D7C', 
        '#B5CA92'
        ],
    plotOptions: {
        column: {
            colorByPoint: true
        }
    },
    series:[{
        name: 'Jumlah',
        data: <?php echo json_encode($tinggi); ?>
        }]
});
    </script>

        <script type="text/JavaScript">
            Highcharts.chart('rendah', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Potensi Terendah'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: <?php echo json_encode($potensi); ?> ,
        tickmarkPlacement: 'on',
        title: {
            enabled: true
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah Potensi Terendah'
        },
        labels: {
            formatter: function () {
                return this.value ;
            }
        }
    },
    tooltip: {
        split: false,
        valueSuffix: ''
    },
    colors: [
        '#4572A7', 
        '#AA4643', 
        '#89A54E', 
        '#80699B', 
        '#3D96AE', 
        '#DB843D', 
        '#92A8CD', 
        '#A47D7C', 
        '#B5CA92'
        ],
    plotOptions: {
        column: {
            colorByPoint: true
        }
    },
    series:[{
        name: 'Jumlah',
        data: <?php echo json_encode($rendah); ?>
        }]
});
    </script>

</body>

</html>