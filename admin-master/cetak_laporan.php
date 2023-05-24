<?php
// Require composer autoload
include "../koneksi.php";
require_once __DIR__ . '../../vendor/autoload.php';
$html = '
 
<style type="text/css">
td,
table tr th {
    font-size: 12px;
    text-align: center;
}
</style>
<link href="../css/sb-admin-2.min.css" rel="stylesheet">
<h5>
        <center>LAPORAN PROGRAM KKN</center>
    </h5>
    <table border="1" >
    <tr class="table">
        <th>No</th>
        <th>Lokasi</th>
        <th>Perguruan Tinggi</th>
        <th>PIC</th>
        <th>Tanggal Pendaftaran</th>
        <th>Waktu</th>
        <th>Jumlah KKN</th>
        <th>Capaian</th>
    </tr>';

$a = 1;
//menentukan variabel
$tglawal = "";
$tglakhir = "";



if (isset($_GET['tglakhir'])) {
    $tglawal = $_GET['tglawal'];
    $tglakhir = $_GET['tglakhir'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=pg.id_user WHERE tgl_awal >= '" . $tglawal . "' AND tgl_akhir <= '" . $tglakhir . "'  GROUP BY no_surat ORDER BY kkn.id_kkn asc");
} else if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=pg.id_user WHERE YEAR(tgl) = '$tahun'  GROUP BY no_surat ");
} else if (isset($_GET['kelurahan'])) {
    $kelurahan = $_GET['kelurahan'];
    $tampil = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=pg.id_user WHERE nama_kel = '$kelurahan'");
} else {
    $tampil = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON detail_pilih_subpotensi.id_kkn = kkn.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi = subpotensi.id_subpotensi JOIN potkel ON potkel.id_potkel = subpotensi.id_potkel JOIN potensi ON potkel.id_potensi = potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel = potkel.id_kel JOIN kecamatan ON kecamatan.id_kec = kelurahan.id_kec JOIN pg ON kkn.id_pg = pg.id_pg JOIN user ON user.id_user=pg.id_user  GROUP BY no_surat");//selesai proses
}
while ($d = mysqli_fetch_array($tampil)) {
    $html .=  '
            <tr>
                <td>' . $a . '</td>
                <td>';
                    $dataLokasi = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON kkn.id_kkn = detail_pilih_subpotensi.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi=subpotensi.id_subpotensi JOIN potkel ON subpotensi.id_potkel = potkel.id_potkel JOIN potensi ON potkel.id_potensi=potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel=potkel.id_kel JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec JOIN pg ON pg.id_pg=kkn.id_pg WHERE kkn.id_kkn = " . $d['id_kkn'] . "");
                            while ($l = mysqli_fetch_array($dataLokasi)) {
                                $html .= strtoupper($l['nama_kel'] . ' ' . $l['nama_kec'] . ', ');
                            };
                $html .= '
                </td>
                <td>' . $d['nama_pg'] . ' </td>
                <td>' . $d['pic_pg'] . '</td>
                <td>' . date('d-m-Y', strtotime($d['tgl'])) . '</td>
                <td>' .$d['tgl_awal'].' s/d '.$d['tgl_akhir'].' </td>
                <td>' . $d['jm_mhs'] . '</td>
                <td>' . $d['capaian'] . '</td>
            </tr>
        ';
    $a++;
}
$html .= '</body></html>';
require '../vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
// reference the Dompdf namespace
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("laporan.pdf", array("Attachment" => 0));