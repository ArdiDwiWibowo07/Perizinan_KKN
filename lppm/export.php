<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cetak</title>
</head>
<body>
    <h2><center>Data Program KKN</center></h2>
    <table border="1" style="width: 100%">
        <tr>
            <th width="3%">Perguruan Tinggi</th>
            <th width="3%">Jumlah Mahasiswa</th>
            <th width="3%">Tanggal Pendaftaran</th>
            <th width="3%">Tanggal Awal Pelaksanaan</th>
            <th width="3%">Tanggal Akhir Pelaksanaan</th>
            <th width="3%">Kapanewon</th>
            <th width="3%">Kelurahan</th>
            <th width="3%">Potensi yang Dipilih</th>
            <th width="3%">Status</th>
            <th width="3%">Capaian</th>
        </tr>

        <?php
        $id_kkn  =   $_GET['id_kkn'];
            $data = mysqli_query($koneksi, "SELECT * FROM kkn LEFT JOIN pg ON kkn.id_pg = pg.id_pg LEFT JOIN subpotensi ON subpotensi.id_subpotensi = kkn.id_subpotensi LEFT JOIN potensi ON potensi.id_potensi = subpotensi.id_potensi LEFT JOIN kelurahan ON kelurahan.id_kel = potensi.id_kel LEFT JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec WHERE kkn.id_kkn='$id_kkn'");
            while ($d = mysqli_fetch_array($data)) {
        ?>
        
        <tr>
            <td><?php echo $d['nama_pg']; ?></td>
            <td><?php echo $d['jm_mhs']; ?></td>
            <td><?php echo date('d-m-Y', strtotime($d['tanggal'])) ; ?></td>
            <td><?php echo date('d-m-Y', strtotime($d['tgl_awal'])) ; ?></td>
            <td><?php echo date('d-m-Y', strtotime($d['tgl_akhir'])) ; ?></td>
            <td><?php echo $d['nama_kec']; ?></td>
            <td><?php echo $d['nama_kel'] ?></td>
            <td><?php echo $d['nama_potensi'] ?></td>
            <td><?php echo $d['status'] ?></td>
            <td><?php echo $d['capaian'] ?></td>
        </tr>
        <?php
        } 
        ?>

    </table>

    <script>
        window.print()
    </script>

</body>
</html>

