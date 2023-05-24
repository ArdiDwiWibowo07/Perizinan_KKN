<?php  
include "../../koneksi.php";
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

    <title>Hasil Laporan KKN</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <link href="../../vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
     <!-- Custom styles for this page -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/kkn_bantul/lppm/daftar_data/data_perg_tinggi.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-columns-reverse" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h2a.5.5 0 0 1 0 1h-2A.5.5 0 0 1 0 .5Zm4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10A.5.5 0 0 1 4 .5Zm-4 2A.5.5 0 0 1 .5 2h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 4h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm-4 2A.5.5 0 0 1 .5 8h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm-4 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Zm4 0a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Z"/>
                    </svg>
                    <span>Data Perguruan Tinggi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kkn_bantul/lppm/daftar_data/data_potensi.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ul" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <span>Data-Data Potensi</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kkn_bantul/lppm/daftar_data/pendaftaran_kkn.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                      <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                    <span>Pendaftaran KKN</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="/kkn_bantul/lppm/hasil_laporan/daftar_program_kkn.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                      <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                      <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                      <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    <span>Daftar Program KKN</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                    <h1 class="h3 mb-4 text-gray-800">Daftar Program KKN</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <h3>Daftar Program KKN</h3>
                        </div><br>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        
                                        <thead>
                                            <tr class="table">
                                                <th>No</th>
                                                <th>Perguruan Tinggi</th>
                                                <th>Jumlah Mahasiswa</th>
                                                <th>Tanggal Pendaftaran</th>
                                                <th>Tanggal Awal Pelaksanaan</th>
                                                <th>Tanggal Akhir Pelaksanaan</th>
                                                <th>Kapanewon</th>
                                                <th>Kelurahan</th>
                                                <th>Desa</th>
                                                <th>Potensi yang Dipilih</th>
                                                <th>File Laporan Akhir KKN</th>
                                                <th>Status</th>
                                                <th>Capaian</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                                            include '../../koneksi.php';
                                            $a = 1; 
                                            $data = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN pg ON kkn.id_pg = pg.id_pg  LEFT JOIN kecamatan ON kkn.id_kec = kecamatan.id_kec LEFT JOIN kelurahan ON kkn.id_kel = kelurahan.id_kel LEFT JOIN desa ON kkn.id_desa = desa.id_desa LEFT JOIN potensi ON kkn.id_potensi = potensi.id_potensi JOIN user on user.id_user=pg.id_user WHERE user.id_user='".$_SESSION['id_user']."'");
                                            $datas = mysqli_query($koneksi, "SELECT kc.id_kec, kc.nama_kec, kl.id_kel, kl.nama_kel, pg.id_pg, pg.nama_pg, d.id_desa, d.nama_desa, pt.id_potensi, pt.nama_potensi, u.id_user, u.username, jm_mhs, tgl_awal, tgl_akhir, tanggal, file, status, capaian FROM kkn JOIN kecamatan as kc on kc.id_kec=kkn.id_kec JOIN kelurahan as kl on kl.id_kel=kkn.id_kel JOIN desa as d on desa.id_desa=kkn.id_desa JOIN potensi as pt on pt.id_potensi=kkn.id_potensi JOIN pg on pg.id_pg=kkn.id_pg JOIN user as u on u.id_user=kkn.id_user");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>

                                            <tr>
                                                    <td><?php echo $a++; ?></td>
                                                    <td><?php echo $d['nama_pg']; ?></td>
                                                    <td><?php echo $d['jm_mhs']; ?></td>
                                                    <td><?php echo $d['tanggal']; ?></td>
                                                    <td><?php echo $d['tgl_awal']; ?></td>
                                                    <td><?php echo $d['tgl_akhir']; ?></td>
                                                    <td><?php echo $d['nama_kec']; ?></td>
                                                    <td><?php echo $d['nama_kel'] ?></td>
                                                    <td><?php echo $d['nama_desa'] ?></td>
                                                    <td><?php echo $d['nama_potensi'] ?></td>
                                                    <td><?php echo $d['file'] ?></td>
                                                    <td><?php echo $d['status'] ?></td>
                                                    <td><?php echo $d['capaian'] ?></td>
                                                    <td>
                                                        
                                                        <div class="col-lg-3">
                                                        <a id="tombolDetail" data-toggle="modal" data-target="#detailModal<?php echo $d['id_kkn'];?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16"><path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/><path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/></svg>Detail</a></div>
                                                        <br>

                                                        <div class="col-lg-3">
                                                        <a id="tombolFile" data-toggle="modal" data-target="#fileModal<?php echo $d['id_kkn']; ?>" data-file="<?php echo $d['file']; ?>" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                                        <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                        </svg>Upload</a></div><br>
                                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-up" viewBox="0 0 16 16">
                                                        <path d="M8.5 11.5a.5.5 0 0 1-1 0V7.707L6.354 8.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 7.707V11.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                        </svg> Upload file</a></div><br> -->

                                                        <div class="col-lg-3">
                                                        <a href="export.php?id_kkn=<?php echo $d['id_kkn'];?>"  class="btn btn-info" target="_BLANK"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                        </svg> Download file</a></div><br>
                                                        

                                                    </td>   
                                            </tr>
                                                <?php 
                                                }
                                                 ?>
                                        </tbody>
                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Detail -->
                    <?php
                        foreach ($data as $c) {
                            
                         # code...

                    ?>
                    <div class="modal fade" id="detailModal<?php echo $c['id_kkn'];?>" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="detailModal">Detail File</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="modal-detail">
                                    
                                    <div class="row justify-content-start">
                                        <div class="col-4">Perguruan Tinggi </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_pg'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Jumlah Mahasiswa </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['jm_mhs'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Pendaftaran </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tanggal'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Awal Pelaksanaan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tgl_awal'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Akhir Pelaksanaan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tgl_akhir'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Kapanewon </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_kec'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Kelurahan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_kel'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Desa </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_desa'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Potensi yang Dipilih </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_potensi'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Status </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['status'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Capaian </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['capaian'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">File </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"><span><?php echo $c['file'];?></span></div>
                                            <iframe src="../files/<?php echo $c['file'];?>" height="450px" width="490px"></iframe>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                </div>
                               </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <!-- <script src="vendor/jquery/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(document).on("click", "#tombolDetail", function(){
                            var id = $(this).data('id');
                            var nama_pg = $(this).data('data-namapg');
                            var jm_mhs = $(this).data('jm_mhs');
                            var tanggal = $(this).data('tanggal');
                            var tgl_awal = $(this).data('tgl_awal');
                            var tgl_akhir = $(this).data('tgl_akhir');
                            var nama_kec = $(this).data('nama_kec');
                            var nama_kel = $(this).data('nama_kel');
                            var nama_desa = $(this).data('nama_desa');
                            var potensi = $(this).data('potensi');
                            var status = $(this).data('status');
                            var capaian = $(this).data('capaian');
                            var file = $(this).data('file');
                            // $("#modal-detail #id_kkn").text(id);
                            $("#modal-detail #nama_pg").text(nama_pg);
                            $("#modal-detail #jm_mhs").text(jm_mhs);
                            $("#modal-detail #tanggal").text(tanggal);
                            $("#modal-detail #tgl_awal").text(tgl_awal);
                            $("#modal-detail #tgl_akhir").text(tgl_akhir);
                            $("#modal-detail #nama_kec").text(nama_kec);
                            $("#modal-detail #nama_kel").text(nama_kel);
                            $("#modal-detail #nama_desa").text(nama_desa);
                            $("#modal-detail #potensi").text(potensi);
                            $("#modal-detail #status").text(status);
                            $("#modal-detail #capaian").text(capaian);
                            $("#modal-detail #pict").attr("src", "file/"+file);

                        });
                    </script> -->
                    <!-- end of Modal Detail -->

                     <?php
                        foreach ($data as $c) {
                        
                    ?>

                    <!-- Upload File -->
                    <div class="modal fade" id="fileModal<?php echo $c['id_kkn']; ?>" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fileModal">Upload File Program KKN</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                
                                <div class="row justify-content-start">
                                        <div class="col-4">Perguruan Tinggi </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_pg'];?></span> </div>
                                        <input type="hidden" name="id_kkn" value="<?php echo $c['id_kkn'];?>">
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Jumlah Mahasiswa </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['jm_mhs'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Pendaftaran </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tanggal'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Awal Pelaksanaan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tgl_awal'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Tanggal Akhir Pelaksanaan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['tgl_akhir'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Kapanewon </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_kec'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Kelurahan </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_kel'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Desa </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_desa'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Potensi yang Dipilih </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['nama_potensi'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Status </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['status'];?></span> </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-4">Capaian </div>
                                        <div class="col-2"> : </div>
                                        <div class="col-4"> <span><?php echo $c['capaian'];?></span> </div>
                                    </div>
                                <div class="form-group">
                                    <label class="control-label" for="file">File</label>
                                    <input type="file" name="file" class="form-control" id="file" required>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button type="submit" name="tbh_file" id="save" class="btn btn-primary" >Simpan</button>
                              </div>
                            </form>
                            <?php 
                            include '../../koneksi.php';
                            if(isset($_POST['tbh_file'])) {
                                $id_kkn = $_POST['id_kkn'];
                                $extensi = explode(".", $_FILES['file']['name']);
                                $file = 'file-'. $id_kkn.".".end($extensi);
                                $sumber = $_FILES['file']['tmp_name'];
                                move_uploaded_file($sumber, "../files/".$file);
                                mysqli_query ($koneksi, "UPDATE kkn SET file= '$file' WHERE id_kkn='$id_kkn'");

                                echo "<script>alert('File Berhasil Dimasukan!')</script> <meta http-equiv='refresh' content='2;url=daftar_program_kkn.php'>";
                                
                                }

                            ?>
                        </div>
                      </div>
                    </div>

                     <?php
                    }
                    
                    ?>
                    <!-- end of Upload file -->


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Sistem Informasi KKN-2022</span>
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
                    <a class="btn btn-danger" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>