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
                        <a class="collapse-item" href="desa.php">Daftar Kelurahan</a>
                        <a class="collapse-item" href="potensi.php">Daftar Potensi</a>
                        <a class="collapse-item" href="kelurahan.php">Daftar Kelurahan</a>
                        <a class="collapse-item" href="kecamatan.php">Daftar Kecamatan</a>
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
            <li class="nav-item">
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

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="lap_kkn.php">
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
                    <h1 class="h3 mb-3 text-gray-800"><strong>DAFTAR KELURAHAN</strong> </h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a class="btn btn-primary" id="tombolbidang" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-arrow-down"> Tambah Data Kelurahan </i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="table">
                                            <th>No</th>
                                            <th>Nama Kelurahan</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    include '../koneksi.php';
                                    $a = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM desa WHERE id_desa");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $a++; ?></th>
                                            <th><?php echo $d['nama_desa']; ?></th>
                                            <th><?php echo $d['alamat_desa']; ?></th>
                                            <th><?php echo $d['telepon_desa']; ?></th>
                                            <th>
                                                <a id="tombolEdit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $d['id_desa']; ?>" data-nama="<?php echo $d['nama_desa']; ?>" data-almt="<?php echo $d['alamat_desa']; ?>" data-tlp="<?php echo $d['telepon_desa']; ?>">
                                                    <button class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg> Update</button>
                                                </a>
                                                <a id="delete" data-id="<?php echo $d['id_desa']; ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
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
                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahModal">Form Tambah Data Kelurahan</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="control-label" for="nama_desa">Nama Kelurahan</label>
                                        <input type="text" name="nama_desa" class="form-control" id="nama_desa" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="alamat_desa">Alamat</label>
                                        <input type="text" name="alamat_desa" class="form-control" id="alamat_desa" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="telepon_desa">Telepon</label>
                                        <input type="text" name="telepon_desa" class="form-control" id="telepon_desa" required>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-warning" type="reset">Reset</button>
                                    <button type="submit" name="tambah" class="btn btn-primary" >Simpan</button>
                                </div>
                                </form>
                                <?php
                                include '../koneksi.php';
                                if(isset($_POST['tambah'])) {
                                    $nama_desa   = mysqli_real_escape_string($koneksi,$_POST['nama_desa']);
                                    $alamat_desa   = mysqli_real_escape_string($koneksi,$_POST['alamat_desa']);
                                    $telepon_desa   = mysqli_real_escape_string($koneksi,$_POST['telepon_desa']);

                                    $i= mysqli_query ($koneksi, "INSERT INTO desa (nama_desa, alamat_desa, telepon_desa) values
                                        ('$nama_desa', '$alamat_desa', '$telepon_desa')");
                                    if($i){
                                    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=desa.php'>";
                                    }else{
                                        echo 'Gagal';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        </div>
                        <!-- /end Proses Tambah Modal -->
              
                    <!-- Modal Update -->
                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Edit Data Kelurahan</h5>
                            </div>
                            <div class="modal-body" id="modal-edit">
                            <form id="form" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="id_desa" id="id_desa">

                                <div class="form-group">
                                    <label class="control-label" for="nama_kel">Nama Kelurahan</label>
                                    <input type="text" name="nama_desa" class="form-control" id="nama_desa" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="alamat_desa">Alamat</label>
                                    <input type="text" name="alamat_desa" class="form-control" id="alamat_desa" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="telepon_desa">Telepon</label>
                                    <input type="text" name="telepon_desa" class="form-control" id="telepon_desa" required>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" data-dismiss="modal">Batal</button>
                                <button type="submit" name="edit" class="btn btn-primary" >Edit</button>
                              </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(document).on("click", "#tombolEdit", function(){
                            var id = $(this).data('id');
                            var nama = $(this).data('nama');
                            var almt = $(this).data('almt');
                            var tlp = $(this).data('tlp');
                            $("#modal-edit #id_desa").val(id);
                            $("#modal-edit #nama_desa").val(nama);
                            $("#modal-edit #alamat_desa").val(almt);
                            $("#modal-edit #telepon_desa").val(tlp);

                        });
                        $(document).ready(function(e) {
                            $("#form").on("submit", (function(e){
                                e.preventDefault();
                                $.ajax({
                                    url : 'proses_edit_desa.php',
                                    type : 'POST',
                                    data : new FormData(this),
                                    contentType : false,
                                    cache : false,
                                    processData : false,
                                    success : function(msg) {
                                        $('.table').html(msg);
                                    }
                                });
                            }));
                        });
                    </script>
                    <!-- /end Proses Modal Update -->

                    <!-- Proses Delete -->
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script type="text/javascript">
                        
                    $(document).on('click', '#delete', function(event) {
                            event.preventDefault();
                            const con = confirm("Hapus Data Kelurahan Ini?");
                            if (con) {
                                /*confirm*/
                                const id = $(this).data('id');
                                if (id) {
                                    $.post('proses_delete_desa.php', {id: id}, function(resp) {
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