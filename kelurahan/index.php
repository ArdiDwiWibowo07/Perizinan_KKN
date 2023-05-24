<?php
include "../koneksi.php";
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, akses gagal!. Anda harus log in terlebih dahulu');document.location='../index.php'</script>";
}

$query1 = $koneksi->query("SELECT * FROM potensi JOIN potkel ON potensi.id_potensi = potkel.id_potensi JOIN kelurahan ON potkel.id_kel = kelurahan.id_kel JOIN user on user.id_user= kelurahan.id_user WHERE potensi.id_potensi != 0 and user.id_user='" . $_SESSION['id_user'] . "'");
$query2 = $koneksi->query("SELECT * FROM kkn");
$query3 = $koneksi->query("SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=kelurahan.id_user WHERE user.id_user=" . $_SESSION['id_user'] . "");

$potensi = mysqli_num_rows($query1);
$kkn = mysqli_num_rows($query2);
$kkn = mysqli_num_rows($query3);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Kelurahan</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <!-- custom style for chart 
    <script type="text/javascript" src="chartjs/Chart.js"></script>-->


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Kelurahan <b><?= $_SESSION['nama_user'] ?> </b></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Daftar Data
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="potensi_kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Potensi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="subpotensi_kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Subpotensi</span></a>
            </li>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="formulir_kelurahan1.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Formulir Masuk</span></a>
            </li>

            <!-- Nav Item - Tables -->



            <li class="nav-item">
                <a class="nav-link" href="kebutuhan_kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kebutuhan</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="kontak.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kontak</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="laporan_kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Hasil KKN</span></a>
            </li>

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
                                            <button class="btn btn-danger" type="button">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?= $_SESSION['nama_user'] ?> </b></span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin Kelurahan!</h1>
                    <h5>Sistem Informasi Kegiatan KKN</h5>
                    <br>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example 
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Data Desa</div>
                                              <?php echo number_format($desa, 0, ",", "."); ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary bg-primary shadow h-100 py-2 text-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Data Potensi</div>
                                            <?php echo number_format($potensi, 0, ",", "."); ?>
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
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Data Formulir Masuk</div>
                                            <?php echo number_format($kkn, 0, ",", "."); ?>
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
                            <div class="card border-left-danger shadow h-100 py-2 bg-danger text-white">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold  text-uppercase mb-1">
                                                Data Laporan KKN</div>
                                            <?php echo number_format($kkn, 0, ",", "."); ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>





                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <div class="card-body">
                                <figure class="highcharts-figure">
                                    <div id="pie"></div>
                                    <?php
                                    include '../koneksi.php';
                                    $t = $koneksi->query("SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=kelurahan.id_user WHERE user.id_user=" . $_SESSION['id_user'] . " AND app_bappeda='Diterima'");
                                    $k = $koneksi->query("SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=kelurahan.id_user WHERE user.id_user=" . $_SESSION['id_user'] . " AND app_bappeda='Ditolak'");
                                    $m = $koneksi->query("SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=kelurahan.id_user WHERE user.id_user=" . $_SESSION['id_user'] . " AND app_bappeda='Menunggu'");

                                    $diterima  = mysqli_num_rows($t);
                                    $ditolak = mysqli_num_rows($k);
                                    $menunggu  = mysqli_num_rows($m);

                                    ?>
                                </figure>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->
                    <!-- pie chart

                <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->

                </div>
            </div>
        </div>

        <!-- pie chart selesai -->

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
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="../index.php">Logout</a>
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
        // Create the chart

    </script>

</body>

</html>