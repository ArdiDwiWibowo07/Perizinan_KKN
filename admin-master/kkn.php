<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, akses gagal!. Anda harus log in terlebih dahulu');document.location='../index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Master BAPPEDA</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                                    <b><?= $_SESSION['nama_user'] ?> </b>
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
                    <h1 class="h3 mb-3 text-gray-800"><strong>PENDAFTARAN KKN</strong> </h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive table-hover table-striped">
                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="table">
                                            <th>No</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>Status Persetujuan</th>
                                            <th>Proses</th>
                                            <th>Capaian</th>
                                            <th>Kapanewon</th>
                                            <th>Kalurahan</th>
                                            <th>PIC</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Tanggal Awal Pelaksanaan</th>
                                            <th>Tanggal Akhir Pelaksanaan</th>
                                            <th>Jumlah KKN</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    include '../koneksi.php';
                                    $a = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=pg.id_user");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $a++; ?></th>
                                            <th><?php echo $d['nama_pg']; ?></th>
                                            <th>
                                                <?php if ($d['app_bappeda'] == 'Menunggu') { ?>
                                                    <span class="badge badge-warning"><?php echo $d['app_bappeda']; ?></span>
                                                <?php } elseif ($d['app_bappeda'] == 'Diterima') { ?>
                                                    <span class="badge badge-success"><?php echo $d['app_bappeda']; ?></span>
                                                <?php } else { ?>
                                                    <span class="badge badge-danger"><?php echo $d['app_bappeda']; ?></span>
                                                <?php } ?>

                                            </th>
                                            <th>
                                                <?php if ($d['proses'] == 'Belum ada proses') { ?>
                                                    <span class="badge badge-warning"><?php echo $d['proses']; ?></span>
                                                <?php } elseif ($d['proses'] == 'Selesai') { ?>
                                                    <span class="badge badge-success"><?php echo $d['proses']; ?></span>
                                                <?php } elseif ($d['proses'] == 'Sedang Dikerjakan') { ?>
                                                    <span class="badge badge-primary"><?php echo $d['proses']; ?></span>
                                                <?php } else { ?>
                                                    <span class="badge badge-danger"><?php echo $d['proses']; ?></span>
                                                <?php } ?>

                                            </th>
                                            <th><?php echo $d['capaian']; ?></th>
                                            <th><?php echo $d['nama_kec']; ?></th>
                                            <th><?php echo $d['nama_kel']; ?></th>
                                            <th><?php echo $d['pic_pg']; ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_surat'])); ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_awal'])); ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_akhir'])); ?></th>
                                            <th><?php echo $d['jm_mhs']; ?></th>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
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
        <script src="../admin-master.php"></script>

        <script src="../vendor/sweetalert2/sweetalert2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>