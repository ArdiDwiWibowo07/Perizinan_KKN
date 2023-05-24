<?php
include "../koneksi.php";
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
                <div class="sidebar-brand-text mx-3">Admin Kelurahan <b><?= $_SESSION['nama_user']?> </b></div>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama_user']?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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

                 <!-- Begin Page Content -->
                 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800">Subotensi Program Kerja di <b>Kelurahan</b> </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                         <div class="card-header py-3">
                            <a class="btn btn-primary" id="tombolbidang" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-arrow-down"> Tambah Data Subpotensi </i></a>
                        </div>
                         <div class="card-body">
                         <div class="table-responsive">
                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                         <thead>
                            <tr class="table">
                                <th>No</th>
                                <th>Subpotensi</th>
                                <th>Potensi</th>
                                <th>keterangan</th>
                                <th>Aksi</th>
                            </tr>
                         </thead>
                        <?php 
                         include '../koneksi.php';
                            $a = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM potkel JOIN potensi ON potensi.id_potensi = potkel.id_potensi JOIN kelurahan ON potkel.id_kel = kelurahan.id_kel JOIN user on user.id_user= kelurahan.id_user JOIN subpotensi ON subpotensi.id_potkel = potkel.id_potkel WHERE potensi.id_potensi != 0 and user.id_user='".$_SESSION['id_user']."'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                          <tr>
                                <th><?php echo $a++; ?></th>
                                <th><?php echo $d['nama_subpotensi']; ?></th>
                                <th><?php echo $d['nama_potensi']; ?></th>
                                <th><?php echo $d['keterangan']; ?></th>
                                <th>

                                    <a class="btn btn-primary" href="form-update-subpotensi.php?id_potensi=<?php echo $d['id_potkel'];?>&id_subpotensi=<?php echo $d['id_subpotensi'];?>">edit</a>

                                    <a id="delete" data-subpotensi="<?php echo $d['id_subpotensi']; ?>"
                                        class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg> Delete</i></a>
                                </th>
                            </tr>
                        <?php 
                        }
                        ?>
                    </table>
             </div>
         </div>

         <!-- Button trigger modal -->

                    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambahModal">Form Tambah Potensi Kelurahan</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                              <div class="modal-body">
                                    <!-- Tambah Data KKN -->
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label" for="id_potensi">Potensi</label>
                                            <select name="id_potensi" id="id_potensi" class=" form-control" tabindex="" required>
                                            <option value="">--- Pilih Potensi ---</option>
                                            
                                            <?php
                                            /*mengambil nama-nama kecamatan*/
                                                include "../koneksi.php";
                                                $query = mysqli_query($koneksi, "SELECT * FROM potkel JOIN potensi ON potensi.id_potensi = potkel.id_potensi JOIN kelurahan ON potkel.id_kel = kelurahan.id_kel JOIN user on user.id_user= kelurahan.id_user WHERE potensi.id_potensi != 0 and user.id_user='".$_SESSION['id_user']."'");
                                                while ($data = mysqli_fetch_array($query)) {
                                                    echo "<option value=\"$data[id_potensi]\" >$data[nama_potensi]</option>\n";
                                                }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="id_potensi">Nama Subpotensi</label>
                                            <input type="text" name="nama_subpotensi" id="nama_subpotensi" class="form-control" placeholder="Nama Subpotensi">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="keterangan">Keterangan</label>
                                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan">
                                        </div>
                                </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" type="reset">Reset</button>
                                <button type="submit" name="tambah" class="btn btn-primary" >Simpan</button>
                              </div>
                            </form>

                           <?php 
                            // if(isset($_POST['tambah'])) {
                               // mysqli_query($koneksi, "insert into potensi set 
                                   // nama_potensi = '$_POST[nama_potensi]',
                                   // id_subpotensi = '$_POST[id_subpotensi]'") or die(mysqli_error($koneksi));
                                    
                               // echo "<script>alert('Potensi Baru Berhasil Dimasukan!')</script>";
                                //} 

                            if(isset($_POST['tambah'])) {
                              $potensi  = mysqli_real_escape_string($koneksi,$_POST['id_potensi']);
                              $nama_subpotensi = mysqli_real_escape_string($koneksi,$_POST['nama_subpotensi']);
                              $keterangan = mysqli_real_escape_string($koneksi,$_POST['keterangan']);

                               mysqli_query ($koneksi, "INSERT INTO subpotensi (id_potensi, nama_subpotensi, keterangan) values
                                  ('".$potensi."','".$nama_subpotensi."', '".$keterangan."')");
                                
                                echo "<script>alert('Potensi Baru Berhasil Dimasukan!')</script> <meta http-equiv='refresh' content='2;url=subpotensi_kelurahan.php'>";
                               }   
                            ?>
                        </div>
                      </div>
                    </div>

                    


                    <!-- Proses Delete -->
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script type="text/javascript">
                        
                    $(document).on('click', '#delete', function(event) {
                            event.preventDefault();
                            const con = confirm("Hapus Data Potensi Ini?");
                            if (con) {
                                /*confirm*/
                                const id = $(this).data('subpotensi');
                                if (id) {
                                    $.post('proses_delete_subpotensi.php', { id : id}, function(resp) {
                                        if (resp) {
                                            alert(resp);
                                            window.location.reload(false); // reload
                                        }
                                    });
                                }
                            }else{
                                console.log("Batalkan");
                            }
                        });
                    </script>
                    <!-- end of delete -->

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
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
    <script src="../js/sb-admin-2.min.js"></script>

    <script src="../vendor/jquery/jquery.js"></script>
    <script type="text/javascript">
        var htmlobjek;
        $(document).ready(function() {
            // apabila terjadi event on change di id_potensi
            $("#id_potensi").change(function(){
            var id_potensi = $("#id_potensi").val();
            $.ajax({
                url: "ambilsubpotensi.php",
                data: "id_potensi="+id_potensi,
                cache: false,
                success: function(msg){
                //jika data sukses diambil dari server kita tampilkan
                //di <select id_subpotensi>
                $("#id_subpotensi").html(msg);
                }
                });
            });



        });

    </script>

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