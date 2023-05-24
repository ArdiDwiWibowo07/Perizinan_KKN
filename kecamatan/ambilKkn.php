<?php
include '../koneksi.php';
echo '  <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr class="table">
        <th>No</th>
        <th>Perguruan Tinggi</th>
        <th>Status Persetujuan Kelurahan</th>
        <th>Status Persetujuan Bappeda</th>
        <th>Jumlah Peserta</th>
        <th>Tanggal Awal</th>
        <th>Tanggal Akhir</th>
    </tr>
</thead>
<tbody>';
$a = 1;
$kelurahan = $_GET['id_kel'];
$data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN subpotensi ON kkn.id_subpotensi=subpotensi.id_subpotensi JOIN potkel ON subpotensi.id_potkel = potkel.id_potkel JOIN potensi ON potkel.id_potensi=potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel=potkel.id_kel JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec JOIN pg ON pg.id_pg=kkn.id_pg WHERE kelurahan.id_kel = '$kelurahan'  ORDER BY app_bappeda DESC;");
while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td>
            <?php echo $a++; ?>
        </td>
        <td>
            <?php echo $d['nama_pg']; ?>
        </td>
        <td>
            <?php if ($d['app_kel'] == 'Menunggu') { ?>
                <span class="badge badge-warning">
                    <?php echo $d['app_kel']; ?>
                </span>
            <?php } elseif ($d['app_kel'] == 'Diterima') { ?>
                <span class="badge badge-success">
                    <?php echo $d['app_kel']; ?>
                </span>
            <?php } else { ?>
                <span class="badge badge-danger">
                    <?php echo $d['app_kel']; ?>
                </span>
            <?php } ?>

        </td>
        <td>
            <?php if ($d['app_bappeda'] == 'Menunggu') { ?>
                <span class="badge badge-warning">
                    <?php echo $d['app_bappeda']; ?>
                </span>
            <?php } elseif ($d['app_bappeda'] == 'Diterima') { ?>
                <span class="badge badge-success">
                    <?php echo $d['app_bappeda']; ?>
                </span>
            <?php } else { ?>
                <span class="badge badge-danger">
                    <?php echo $d['app_bappeda']; ?>
                </span>
            <?php } ?>

        </td>

        <td>
            <?php echo $d['jm_mhs']; ?>
        </td>
        <td>
            <?php echo $d['tgl_awal']; ?>
        </td>
        <td>
            <?php echo $d['tgl_akhir']; ?>
        </td>

    </tr>
    <?php
}
echo '</tbody></table> <!-- Bootstrap core JavaScript-->
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
<script src="../js/demo/datatables-demo.js"></script>';
?>
