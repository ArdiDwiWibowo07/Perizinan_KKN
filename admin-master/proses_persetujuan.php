<?php
session_start();
if(empty($_SESSION['username']) or empty($_SESSION['level'])) {
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin-master.php">
                <div class="sidebar-brand-icon">
                    <img src="../img/logo.png" width="60" height="60">
                </div>
                <div class="sidebar-brand-text mx-3">Admin Master</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Daftar</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar :</h6>
                        <!-- <a class="collapse-item" href="desa.php">Daftar Desa</a> -->
                        <a class="collapse-item" href="potensi.php">Daftar Potensi</a>
                        <a class="collapse-item" href="kelurahan.php">Daftar Kelurahan</a>
                        <a class="collapse-item" href="kecamatan.php">Daftar Kapanewon</a>
                    </div>
                </div>
            </li>

<!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Perguruan Tinggi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Perguruan Tinggi</h6>
                        <a class="collapse-item" href="univ.php">Daftar Perguruan Tinggi</a>
                        <a class="collapse-item" href="kkn.php">Pendaftaran KKN</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengolahan User 
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Daftar User</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar user:</h6>
                        <a class="collapse-item" href="user.php">Kelurahan</a>
                    </div>
                </div>
            </li>
 -->
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admin-kelurahan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengolahan Admin</span></a>
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
                                <b><?= $_SESSION['nama_user']?> </b>
                                </span>
                                <img src="../img/logo.png" width="40" height="40">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
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
                    <h1 class="h3 mb-3 text-gray-800"><strong>PERSETUJUAN PROGRAM KKN</strong> </h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    </div>
                        <div class="card-body">
                            <div class="table-responsive table-hover table-striped" >
                               

                             

                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="table">
                                            <th>No</th>
                                            <th>Kapanewon</th>
                                            <th>Kelurahan</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>PIC</th>
                                            <th>Tanggal Pendaftaran</th>
                                            <th>Tanggal Awal Pelaksanaan</th>
                                            <th>Tanggal Akhir Pelaksanaan</th>
                                            <th>Jumlah KKN</th>
                                            <th>Capaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    include '../koneksi.php';
                                    $a = 1;
                                    //menentukan variabel
                                    $tglawal = "";
                                    $tglakhir = "";
                                    
                                    if(isset($_GET['tglawal'])){
                                            $tglawal = $_GET['tglawal'];
                                            $tglakhir = $_GET['tglakhir'];
                                            $tampil = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN subpotensi ON kkn.id_subpotensi=subpotensi.id_subpotensi 
                                            LEFT JOIN potensi ON potensi.id_potensi=subpotensi.id_potensi LEFT JOIN kelurahan ON kelurahan.id_kel=potensi.id_kel LEFT JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec LEFT JOIN pg ON pg.id_pg=kkn.id_pg WHERE tanggal BETWEEN '".$tglawal."' and '".$tglakhir."' ORDER BY id_kkn asc");                
                                    }else if(isset($_GET['tahun'])){
                                        $tahun = $_GET['tahun'];
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN subpotensi ON kkn.id_subpotensi=subpotensi.id_subpotensi 
                                            LEFT JOIN potensi ON potensi.id_potensi=subpotensi.id_potensi LEFT JOIN kelurahan ON kelurahan.id_kel=potensi.id_kel LEFT JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec LEFT JOIN pg ON pg.id_pg=kkn.id_pg WHERE YEAR(tanggal) = '$tahun'"); 
                                    }else if(isset($_GET['kelurahan'])){
                                        $kelurahan = $_GET['kelurahan'];
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN subpotensi ON kkn.id_subpotensi=subpotensi.id_subpotensi 
                                            LEFT JOIN potensi ON potensi.id_potensi=subpotensi.id_potensi LEFT JOIN kelurahan ON kelurahan.id_kel=potensi.id_kel LEFT JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec LEFT JOIN pg ON pg.id_pg=kkn.id_pg WHERE nama_kel = '$kelurahan'"); 
                                    }
                                    
                                    else {
                                        $tampil = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN subpotensi ON kkn.id_subpotensi=subpotensi.id_subpotensi 
                                            LEFT JOIN potensi ON potensi.id_potensi=subpotensi.id_potensi LEFT JOIN kelurahan ON kelurahan.id_kel=potensi.id_kel LEFT JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec LEFT JOIN pg ON pg.id_pg=kkn.id_pg where status='Diterima' and proses='Selesai'
                                        ");
                                    }
                                    while ($d = mysqli_fetch_array($tampil)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $a++; ?></th>
                                            <th><?php echo $d['nama_kec']; ?></th>
                                            <th><?php echo $d['nama_kel']; ?></th>
                                            <th><?php echo $d['nama_pg']; ?></th>
                                            <th><?php echo $d['pic_pg']; ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tanggal']));?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_awal']));?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_akhir']));?></th>
                                            <th><?php echo $d['jm_mhs']; ?></th>
                                            <th><?php echo $d['capaian']; ?></th>
                                            <th><a class="btn btn-success" id="tombolDetail" data-toggle="modal" data-target="#detailModal<?php echo $d['id_kkn'];?>"></svg>Detail</button>
                                                </a>

                                                <a class="btn btn-primary" href="proses_persetujuan.php?id_kkn=<?php echo $d['id_kkn'];?>">edit</a>
                                    
                                                <a id="delete" data-id="<?php echo $d['id_kkn']; ?>"  class="btn btn-danger">
                                                </svg> Delete</i></a>
                                            </th>

                                        </tr>
                                        <?php 
                                        }
                                         ?>
                                        
                                </table>
                                
                            </div>
                             
                        </div>
                        <div class="col-lg-3">
                        <a  href="cetak_laporan.php?tglawal=<?php echo $tglawal;?>&&tglakhir=<?php echo $tglakhir;?>" class="btn btn-warning" target="_BLANK">    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                    <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>  
                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>  Print Dokumen 
                                </a>
                        </div><br>             
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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
    <script src="../admin-master.php"></script>
    
    <script src="../vendor/sweetalert2/sweetalert2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>