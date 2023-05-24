<?php
include "../koneksi.php";
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

    <title>Admin Kelurahan</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                <div class="sidebar-brand-text mx-3">Admin Kelurahan <b>
                        <?= $_SESSION['nama_user'] ?>
                    </b></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
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

            <!-- Nav Item - Tables 
            <li class="nav-item">
                <a class="nav-link" href="Halaman_Desa.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Desa</span></a>
            </li> -->

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

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="formulir_kelurahan1.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Formulir Masuk</span></a>
            </li>

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
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="laporan_kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Laporan Hasil KKN</span></a>
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

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?= $_SESSION['nama_user'] ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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

                <div class="container-fluid">

                    <h3>Edit PENERIMAAN FORMULIR</h3>

                    <?php
                    include '../koneksi.php';
                    $id_kkn = $_GET['id_kkn'];
                    $data = mysqli_query($koneksi, "SELECT * FROM kkn inner join pg on kkn.id_pg = pg.id_pg inner join subpotensi on kkn.id_subpotensi = subpotensi.id_subpotensi inner join potkel on subpotensi.id_potkel = potkel.id_potkel inner JOIN potensi on potensi.id_potensi = potkel.id_potensi inner join kelurahan on potkel.id_kel = kelurahan.id_kel inner join kecamatan on kelurahan.id_kec = kecamatan.id_kec JOIN user on user.id_user= kelurahan.id_user  where kkn.id_kkn='$id_kkn'");
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <form method="post" action="proses-update-form.php">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>
                                        <input type="hidden" name="id_kkn" value="<?php echo $d['id_kkn']; ?>">
                                        <input type="text" name="nama_pg" value="<?php echo $d['nama_pg']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama PIC</td>
                                    <td><input type="text" name="pic_pg" value="<?php echo $d['pic_pg']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kapanewon</td>
                                    <td><input type="text" name="nama_kec" value="<?php echo $d['nama_kec']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Kelurahan</td>
                                    <td><input type="text" name="nama_kel" value="<?php echo $d['nama_kel']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Potensi</td>
                                    <td><input type="text" name="nama_potensi" value="<?php echo $d['nama_potensi']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Subpotensi</td>
                                    <td><input type="text" name="nama_subpotensi"
                                            value="<?php echo $d['nama_subpotensi']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Awal</td>
                                    <td><input type="text" name="tgl_awal" value="<?php echo $d['tgl_awal']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Akhir</td>
                                    <td><input type="text" name="tgl_akhir" value="<?php echo $d['tgl_akhir']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><select class="form-control" name="status">
                                            <option value="">-Pilih-</option>
                                            <option value="Diterima">Diterima</option>
                                            <option value="DItolak">Ditolak</option>
                                            <option value="Menunggu">Menunggu</option>
                                        </select>
                                    <td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="SIMPAN"></td>
                                </tr>
                            </table>
                        </form>
                    <?php
                    }
                    ?>

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
            <script src="../vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/chart-area-demo.js"></script>
            <script src="../js/demo/chart-pie-demo.js"></script>

            <!-- Page level plugins -->
            <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>