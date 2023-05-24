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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                <div class="sidebar-brand-text mx-3">Admin Kelurahan <b><?= $_SESSION['nama_user'] ?> </b></div>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama_user'] ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                    <h1 class="h3 mb-3 text-gray-800">Pemantauan Kegiatan KKN <b>Kelurahan</b> </h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>PIC</th>
                                            <th>Kapanewon</th>
                                            <th>Desa</th>
                                            <th>Potensi</th>
                                            <th>Program Kerja</th>
                                            <th>Tanggal mulai</th>
                                            <th>Tanggal berakhir</th>
                                            <th>Status</th>
                                            <th>Surat</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    include '../koneksi.php';
                                    $a = 1;
                                    $data = $koneksi->query("SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=kelurahan.id_user JOIN proker ON proker.id_proker = kkn.id_proker WHERE user.id_user=" . $_SESSION['id_user'] . " AND app_bappeda='Diterima'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <th><?php echo $a++; ?></th>
                                            <th><?php echo $d['nama_pg']; ?></th>
                                            <th><?php echo $d['pic_pg']; ?></th>
                                            <th><?php echo $d['nama_kec']; ?></th>
                                            <th><?php echo $d['nama_kel']; ?></th>
                                            <th><?php echo $d['nama_potensi']; ?></th>
                                            <th><?php echo $d['nm_proker']; ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_awal'])); ?></th>
                                            <th><?php echo date('d-m-Y', strtotime($d['tgl_akhir'])); ?></th>
                                            <th><?php echo $d['app_bappeda']; ?></th>
                                            <th><a href="../lppm/surat_izin/<?php echo $d['surat']; ?>"><?php echo $d['surat']; ?></a></th>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>


                        <!-- Modal Update -->
                        <!--<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Update Laporan Program KKN</h5>
                            </div>
                            <div class="modal-body" id="modal-edit">
                            <form id="form" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="id_laporan" id="id_laporan">
                                <tr height="46">
                                <td> </td>
                                <td>status</td>
                                <td><select name="status">
                                <option value="-">- Masukkan status -</option>
                                <option value="Menunggu">Menunggu</option>
                                <option value="Diterima">Diterima</option>
                                <option value="Ditolak">Ditolak</option>
                                </select></td>
                                </tr>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="edit" class="btn btn-primary" >Update</button>
                              </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    <script src="../vendor/jquery/jquery.min.js"></script>
                    <script type="text/javascript">
                        $(document).on("click", "#tombolEdit", function(){
                            var id = $(this).data('id_kkn');
                            var nama = $(this).data('status');
                            $("#modal-edit #id_kkn").val(id);
                            $("#modal-edit #status").val(status);


                        });

                        $(document).ready(function(e) {
                            $("#form").on("submit", (function(e){
                                e.preventDefault();
                                $.ajax({
                                    url : 'edit_formMasuk.php',
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
                    </script>-->
                        <!-- /end Proses Modal Update -->

                        <!-- Modal Detail -->
                        <?php
                        foreach ($data as $c) {
                            # code...

                        ?>
                            <div class="modal fade" id="detailModal<?php echo $c['id_kkn']; ?>" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
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
                                                <div class="col-4"> <span><?php echo $c['nama_pg']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">LPPM </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['pic_pg']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Jumlah Mahasiswa </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['jm_mhs']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Tanggal Pendaftaran </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['tanggal']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Tanggal Awal Pelaksanaan </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['tgl_awal']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Tanggal Akhir Pelaksanaan </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['tgl_akhir']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Kapanewon </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['nama_kec']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Kelurahan </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['nama_kel']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Potensi yang Dipilih </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['nama_potensi']; ?></span> </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-4">Status </div>
                                                <div class="col-2"> : </div>
                                                <div class="col-4"> <span><?php echo $c['app_kel']; ?></span> </div>
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
                            var nama_pg = $(this).data('data-nama_pg');
                            var pic_pg = $(this).data('data-pic_pg');
                            var jm_mhs = $(this).data('jm_mhs');
                            var tanggal = $(this).data('tanggal');
                            var tgl_awal = $(this).data('tgl_awal');
                            var tgl_akhir = $(this).data('tgl_akhir');
                            var nama_kec = $(this).data('nama_kec');
                            var nama_kel = $(this).data('nama_kel');
                            var nama_desa = $(this).data('nama_desa');
                            var potensi = $(this).data('potensi');
                            var status = $(this).data('status');
                           
                            // $("#modal-detail #id_kkn").text(id);
                            $("#modal-detail #nama_pg").text(nama_pg);
                            $("#modal-detail #pic_pg").text(pic_pg);
                            $("#modal-detail #jm_mhs").text(jm_mhs);
                            $("#modal-detail #tanggal").text(tanggal);
                            $("#modal-detail #tgl_awal").text(tgl_awal);
                            $("#modal-detail #tgl_akhir").text(tgl_akhir);
                            $("#modal-detail #nama_kec").text(nama_kec);
                            $("#modal-detail #nama_kel").text(nama_kel);
                            $("#modal-detail #nama_desa").text(nama_desa);
                            $("#modal-detail #potensi").text(potensi);
                            $("#modal-detail #status").text(status);
                        });
                    </script> -->
                        <!-- end of Modal Detail -->


                        <!-- /.container-fluid -->

                        <!-- Proses Delete -->
                        <script src="../vendor/jquery/jquery.min.js"></script>
                        <script type="text/javascript">
                            $(document).on('click', '#delete', function(event) {
                                event.preventDefault();
                                const con = confirm("Hapus Data Formulir Ini?");
                                if (con) {
                                    /*confirm*/
                                    const id = $(this).data('id');
                                    if (id) {
                                        $.post('proses_delete_form.php', {
                                            id: id
                                        }, function(resp) {
                                            if (resp) {
                                                alert(resp);
                                                window.location.reload(false); // reload
                                            }
                                        });
                                    }
                                } else {
                                    console.log("Batalkan");
                                }
                            });
                        </script>
                        <!-- end of delete -->

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