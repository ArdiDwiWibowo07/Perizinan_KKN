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

    <title>Data Perguruan Tinggi</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Data Diri Perguruan Tinggi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php
                                    include '../../koneksi.php';
                                    $cek = $koneksi->query("SELECT user.id_user, pg.id_pg, pg.nama_pg, pg.telepon_pg, pg.alamat_pg, pg.pic_pg, pg.telepon_pic, pg.email_pic, user.username FROM (pg LEFT JOIN user ON user.id_user=pg.id_user ) WHERE user.id_user='".$_SESSION['id_user']."'");;
                            if($cek->num_rows == 0){
                            ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-arrow-up"> Lengkapi Data</i></button>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php
                            }else{
                                ?>
                                <button style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-arrow-up"> Lengkapi Data</i></button>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php
                            }
                            ?>
                                
                        </div><br>
                                
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <h4>Detail Perguruan Tinggi dan LPPM</h4>
                                        <br>

                                        <?php
                                        include '../../koneksi.php';
                                    $data = $koneksi->query("SELECT user.id_user, pg.id_pg, pg.nama_pg, pg.telepon_pg, pg.alamat_pg, pg.pic_pg, pg.telepon_pic, pg.email_pic, user.username FROM (pg LEFT JOIN user ON user.id_user=pg.id_user ) WHERE user.id_user='".$_SESSION['id_user']."'");

                                    // $tampil = $data->fetch_array();
                                    while ($tampil= mysqli_fetch_array($data)){
                                        ?> 
                                        <table class="table table-user-information">
                                            <tr>
                                                <td>Nama Perguruan Tinggi</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["nama_pg"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon Perguruan Tinggi</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["telepon_pg"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Perguruan Tinggi</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["alamat_pg"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama LPPM (PIC)</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["pic_pg"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon LPPM (PIC)</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["telepon_pic"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email LPPM (PIC)</td>
                                                <td>:</td>
                                                <td><?php echo $tampil["email_pic"]; ?></td>
                                            </tr>

                                        </table>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubahModal<?php echo $tampil['id_pg'];?>" ><i class="fa fa-edit"></i> Ubah Data Perguruan Tinggi</button>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    </div>
                                </div>                         
                            
                        </div>                       
                    </div>

                <!-- /.container-fluid -->
                <!-- Modal Tambah Data -->
                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModal">Lengkapi Data Perguruan Tinggi dan LPPM</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nama_pg">Nama Perguruan Tinggi</label>
                                        <input type="text" name="nama_pg" class="form-control" id="nama_pg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon_pg">Telepon Perguruan Tinggi</label>
                                        <input type="text" name="telepon_pg" class="form-control" id="telepon_pg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="alamat_pg">Alamat Perguruan Tinggi</label>
                                        <input type="text" name="alamat_pg" class="form-control" id="alamat_pg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="pic_pg">Nama LPPM (PIC)</label>
                                        <input type="text" name="pic_pg" class="form-control" id="pic_pg" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon_pic">Telepon LPPM (PIC)</label>
                                        <input type="text" name="telepon_pic" class="form-control" id="telepon_pic" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email_pic">Email LPPM (PIC)</label>
                                        <input type="text" name="email_pic" class="form-control" id="email_pic" required>
                                    </div>
                                        
                                </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button type="submit" name="tambah" class="btn btn-primary" >Simpan</button>
                              </div>
                            </form>
                            <?php 
                             include '../../koneksi.php';
                            if(isset($_POST['tambah'])) {
                                $nama_pg   = mysqli_real_escape_string($koneksi,$_POST['nama_pg']);
                                $telepon_pg   = mysqli_real_escape_string($koneksi,$_POST['telepon_pg']);
                                $alamat_pg   = mysqli_real_escape_string($koneksi,$_POST['alamat_pg']);
                                $pic_pg   = mysqli_real_escape_string($koneksi,$_POST['pic_pg']);
                                $telepon_pic   = mysqli_real_escape_string($koneksi,$_POST['telepon_pic']);
                                $email_pic   = mysqli_real_escape_string($koneksi,$_POST['email_pic']);
                                
                                mysqli_query ($koneksi, "INSERT INTO pg (id_user, nama_pg, telepon_pg, alamat_pg, pic_pg, telepon_pic, email_pic  ) values
                                    ('".$_SESSION['id_user']."','$nama_pg', '$telepon_pg', '$alamat_pg', '$pic_pg', '$telepon_pic', '$email_pic' )");
                                
                                echo "<script>alert('Data Perguruan Tinggi dan LPPM Berhasil Dimasukan!')</script> <meta http-equiv='refresh' content='2;url=data_perg_tinggi.php'>";
                                }

                            ?>
                        </div>
                      </div>
                    </div>
                    <!-- /end Proses Tambah Modal -->



                    <!-- Modal Update Data Diri -->
                    <?php
                    foreach($data as $pg){
                    ?>
                    
                    <div class="modal fade" id="ubahModal<?php echo $pg['id_pg'];?>" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ubahModal<?php echo $pg['id_pg'];?>">Ubah Data Perguruan Tinggi dan LPPM</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">

                                    <div class="form-group">
                                    <input type="hidden" name="id_pg" value="<?php echo $pg['id_pg'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="nama_pg">Nama Perguruan Tinggi</label>
                                        <input type="text" name="nama_pg" class="form-control" id="nama_pg" req value="<?php echo $pg['nama_pg'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon_pg">Telepon Perguruan Tinggi</label>
                                        <input type="text" name="telepon_pg" class="form-control" id="telepon_pg" value="<?php echo $pg['telepon_pg'];?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="alamat_pg">Alamat Perguruan Tinggi</label>
                                        <input type="text" name="alamat_pg" class="form-control" id="alamat_pg" value="<?php echo $pg['alamat_pg'];?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="pic_pg">Nama LPPM (PIC)</label>
                                        <input type="text" name="pic_pg" class="form-control" id="pic_pg" value="<?php echo $pg['pic_pg'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon_pic">Telepon LPPM (PIC)</label>
                                        <input type="text" name="telepon_pic" class="form-control" id="telepon_pic" value="<?php echo $pg['telepon_pic'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email_pic">Email LPPM (PIC)</label>
                                        <input type="text" name="email_pic" class="form-control" id="email_pic" value="<?php echo $pg['email_pic'];?>">
                                       
                                    </div>
                                        
                                </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button type="submit" name="ubah" class="btn btn-primary" >Ubah</button>
                              </div>
                            </form>
                            
                            <?php 
                            include '../../koneksi.php';
                            if(isset($_POST['ubah'])) {
                                $id   = mysqli_real_escape_string( $koneksi,$_POST['id_pg']);
                                $nama_pg   = mysqli_real_escape_string( $koneksi,$_POST['nama_pg']);
                                $telepon_pg   = mysqli_real_escape_string( $koneksi,$_POST['telepon_pg']);
                                $alamat_pg   = mysqli_real_escape_string( $koneksi,$_POST['alamat_pg']);
                                $pic_pg   = mysqli_real_escape_string( $koneksi,$_POST['pic_pg']);
                                $telepon_pic   = mysqli_real_escape_string( $koneksi,$_POST['telepon_pic']);
                                $email_pic   = mysqli_real_escape_string( $koneksi,$_POST['email_pic']);
                                // $id   = $_POST['id_pg'];
                                // $id_user   = $_POST['id_user'];
                                // $nama_pg   =  $_POST['nama_pg'];
                                // $telepon_pg   =  $_POST['telepon_pg'];
                                // $alamat_pg   =  $_POST['alamat_pg'];
                                // $pic_pg   =  $_POST['pic_pg'];
                                // $telepon_pic   =  $_POST['telepon_pic'];
                                // $email_pic   =  $_POST['email_pic'];
                                
                                // $sql = mysqli_query($con, "UPDATE pg SET (id_pg, nama_pg, telepon_pg, alamat_pg, pic_pg, telepon_pic, email_pic) values
                                //     ('$id','$nama_pg', '$telepon_pg', '$alamat_pg', '$pic_pg', '$telepon_pic', '$email_pic' ) WHERE id_pg='".$id."'");
                                $sql = mysqli_query($koneksi, "UPDATE pg SET nama_pg='$nama_pg', telepon_pg='$telepon_pg', alamat_pg='$alamat_pg', pic_pg = '$pic_pg', telepon_pic = '$telepon_pic', email_pic = '$email_pic' WHERE id_pg='".$id."'");
                                /*mysqli_affected_rows($koneksi);*/
                                /*if($koneksi->query($sql)) {
                                    echo "<script>alert('Data Perguruan Tinggi dan LPPM Berhasil Diubah!')</script> <meta http-equiv='refresh' content='2;url=data_perg_tinggi.php'></script>";
                                }else{
                                    echo "<script>alert('Data Gagal')</script>";
                                }*/
                                if($sql){
                                
                                    echo "<script>alert('Data Perguruan Tinggi dan LPPM Berhasil Diubah!')</script> <meta http-equiv='refresh' content='2;url=data_perg_tinggi.php'></script>";
                                }else{
                                    echo "<script>alert('Data Gagal')</script>";
                                }
                            }
                            

                            ?>
                                
                            
                        </div>
                      </div>
                    </div>
                    <?php 
                            
                            }
                            ?>

                    <!-- end of Modal Update Data Diri -->

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

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

</body>

</html>