<?php
// Require composer autoload
include "../koneksi.php";
require_once __DIR__ . '../../vendor/autoload.php';
$id = $_GET['id'];

//format nomor urut
function nomor($nomor){
    $panjangNomor = strlen($nomor);
    if($panjangNomor == 2){
        return '00'.strval($nomor);
    }else  if($panjangNomor == 1){
        return '000'.strval($nomor);
    }else if($panjangNomor == 3){
        return '0'.strval($nomor);
    }
}

//format tanggal indonesai
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

$html = '
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    table, tr, td{
        font-size: 11px;
    }
    *{
        font-family: sans-serif;
        box-sizing: border-box;
      
  
    }
    .daftar{
        vertical-align: top;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }
</style>
<body>
    <center>
        <table border="0">
            <tr>
                <td colspan="2"><img src="bappeda.png" alt="" style="width: 100px; height: auto;"></td>
                <td colspan="3">
                    <center>
                        <font size="3"><b>PEMERINTAHAN KABUPATEN BANTUL</b></font><br>
                        <font size="3"><b>BADAN PERENCANAAN PEMBAGUNAN DAERAH</b></font><br>
                        <img src="aksara.png" alt="aksara" style="width: 400px; height: auto;">
                        <br>
                        <font size="2"><b>Jalan Robert Wolter Monginsidi 1 Bantul 55711, Telp. 36533, Faks, (0274) 367796</b></font><br>
                        <font size="2"><b>Laman: www.bappeda.bantulkab.go.id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ponsel:bappeda@bantulkab.go.id</b></font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="5"><hr style=" border: 2px solid black;"></td>
            </tr>
            
          
            <tr>
                <td colspan="5">
                    <center>
                        <font size="3" style="font-family: serif;"><b style="font-family: serif;">SURAT IZIN KULIAH KERJA NYATA</b></font><br>';
$data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN pg ON kkn.id_pg=pg.id_pg JOIN tingkatan on kkn.id_tingkatan = tingkatan.id_tingkatan WHERE id_kkn = '$id'");
while ($d = mysqli_fetch_array($data)) {
    $html .= ' 
                        <font size="3"><b>Nomor : 070 / Reg / '.nomor($id).' / '.$d['kode_tingkatan'].' / '.date("Y").'</b></font>
                        ';
};
$html .= '</center>
                </td>
            </tr>
        
            <tr class="daftar">
                <td colspan="2">Dasar</td>
                <td style="padding-left : 40px">: </td>
                <td colspan="2">
                    <ol style="margin : 0 0 0 20px; padding : 0;">';
$a = 1;
$data = mysqli_query($koneksi, "SELECT * FROM dasar_perizinan");
while ($d = mysqli_fetch_array($data)) {
    $html .= ' <li>' . $d['dasar'] . '</li>';
};
$html .= '</ol>
                </td>
            </tr>
          
            <tr class="daftar">
                <td colspan="2">Memperhatikan</td>
                <td style="padding-left : 40px">: </td>
                <td colspan="2">';
$data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN pg ON kkn.id_pg=pg.id_pg WHERE id_kkn = '$id'");
while ($d = mysqli_fetch_array($data)) {
    $html .= ' 
                    <ul style="margin:0; list-style:none; padding:0;">
                        <li style="list-style: none;">Surat dari : Lembaga Pengembangan Pendidikan, Penelitian & Masyarakat (LP3M) ' . $d['nama_pg'] . '</li>
                        <li style="list-style: none;">
                        <table style="text-align: left; border-collapse: collapse;">
                            <tr>
                                <td>Nomor</td>
                                <td style="padding-left : 40px">:</td>
                                <td>&nbsp;' . $d['no_surat'] . '</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td style="padding-left : 40px">:</td>
                                <td>&nbsp;' . tgl_indo($d['tgl_surat']) . '</td>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td style="padding-left : 40px">:</td>
                                <td>&nbsp;' . $d['perihal'] . '</td>
                            </tr>
                        </table>
                    </li>';
};
$html .= '</ul>
                </td>
            </tr>
            <tr class="daftar">
                <td colspan="5">Kepala Badan Perencanaan Pembangunan Daerah Kabupaten Bantul, memberikan izin kepada :</td>
            </tr>';
$data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN pg ON kkn.id_pg=pg.id_pg JOIN dosen ON pg.id_pg = dosen.id_pg WHERE id_kkn = '$id'");
while ($d = mysqli_fetch_array($data)) {

    $html .= '<tr>
                <td>1</td>
                <td> Nama</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">' . $d['nama_dosen'] . '</td>
            </tr>
            <tr class="daftar">
                <td>2</td>
                <td>NIP/NIM/No.KTP</td>
                <td style="padding-left : 40px">: </td>
                <td colspan="2">' . $d['telepon'] . '</td>
            </tr>
            <tr>
                <td>3</td>
                <td>No. Telp/ Hp</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">0881223819</td>
            </tr>
           
            <tr>
                <td colspan="5">Untuk melaksanakan izin KKN dengan rincian sebagai berikut :</td>
            </tr>
            <tr>
                <td>a.</td>
                <td>Judul</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">KKN BERBASIS PEMBERDAYAAN MASYARAKAT DAN UMKM </td>
            </tr>
            <tr class="daftar">
                <td>b.</td>
                <td>Lokasi</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">';
    $a = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN detail_pilih_subpotensi ON kkn.id_kkn = detail_pilih_subpotensi.id_kkn JOIN subpotensi ON detail_pilih_subpotensi.id_subpotensi=subpotensi.id_subpotensi JOIN potkel ON subpotensi.id_potkel = potkel.id_potkel JOIN potensi ON potkel.id_potensi=potensi.id_potensi JOIN kelurahan ON kelurahan.id_kel=potkel.id_kel JOIN kecamatan ON kecamatan.id_kec=kelurahan.id_kec JOIN pg ON pg.id_pg=kkn.id_pg WHERE kkn.id_kkn = '$id'");
    while ($d = mysqli_fetch_array($data)) {
        $html .= strtoupper($d['nama_kel'] . ' ' . $d['nama_kec'] . ', ');
    };
};

$data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN pg ON kkn.id_pg=pg.id_pg WHERE id_kkn = '$id'");
while ($d = mysqli_fetch_array($data)) {

    $html .= '</td>
            </tr>
            <tr>
                <td>c.</td>
                <td>Waktu</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">' . tgl_indo($d['tgl_awal']) . ' s/d ' . tgl_indo($d['tgl_akhir']) . '</td>
            </tr>
            <tr>
                <td>d.</td>
                <td>Jumlah Peserta</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">' . $d['jm_mhs'] . ' Orang</td>
            </tr>
            <tr>
                <td>e.</td>
                <td>Nama Lembaga</td>
                <td style="padding-left : 40px">:</td>
                <td colspan="2">Lembaga Pengembangan Pendidikan, Penelitian & Masyarakat (LP3M) ' . $d['nama_pg'] . '</td>
            </tr>

           
            <tr>
                <td colspan="5">Ketentuan yang harus ditaat :</td>
            </tr>';
};
$a = 1;
$data = mysqli_query($koneksi, "SELECT * FROM ketentuan");
while ($d = mysqli_fetch_array($data)) {
    $html .= ' <tr class="daftar">
                <td>' . $a . '</td>
                <td colspan="4">' . $d['ketentuan'] . '</td>
            </tr>';
    $a++;
};
$html .= '</ol>
           
        </table>
    </center>
    <br/>
    <div style="display: flex;
    justify-content: flex-end; float:right;">
    <table border="0">
        <tr>
            <td> &ensp; Dikeluarkan di</td>
            <td>:</td>
            <td colspan="2">Bantul</td>
        </tr>';
        $data = mysqli_query($koneksi, "SELECT * FROM kkn JOIN pg ON kkn.id_pg=pg.id_pg WHERE id_kkn = '$id'");
        while ($d = mysqli_fetch_array($data)) {
            $html .= '
        <tr style="border-bottom: 1px solid black">
            <td>Pada tanggal</td>
            <td>:</td>
            <td colspan="2">'. tgl_indo($d['tgl_dikeluarkan']).'</td>
        </tr>';
        };
        $html .='
        <tr>
            <td colspan="4">
                <hr>
            </td>
         </tr>
        <tr>
            <td colspan="4"><br></td>
        </tr>';
$a = 1;
$data = mysqli_query($koneksi, "SELECT * FROM pejabat");
while ($d = mysqli_fetch_array($data)) {
    $html .= '
        <tr>
            <td colspan="4"><center style="max-width: 200px;">' . $d['jabatan'] . '</center> </td>
        </tr>
        <tr><td colspan="4"><br></td></tr>
        <tr><td colspan="4"><br></td></tr>
        <tr><td colspan="4"><br></td></tr>
        <tr><td colspan="4"><center style="max-width: 200px;"><b><u>' . $d['nama'] . '</u></b></center></td></tr>
        <tr><td colspan="4"><center style="max-width: 200px;">NIP : ' . $d['nip'] . '</center></td></tr>';
};
$html .= '</table>
</div>
<div class="clearfix"></div>
<br>
<div style="display: flex;
    justify-content: flex-end; float:left;">
    <table border="0">
        <tr>
            <td colspan=""><b><u>Tembusan disampaikan Kepada Yth.</u></b>
                <ol style="margin : 0 0 0 20px; padding : 0;">
                    <li>Bupati Bantul (sebagai laporan)</li>
                    <li>Ka. Badan Kesatuan Bangsa dan Politik Kab. Bantul</li>
                    <li>Ka. LPPM Universitas Sanata Dharama</li>
                    <li>Yang Bersangkutan Permohonan</li>
                </ol>
            </td>
        </tr>  
     </table>
</div>
    
</body>
</html>
';
// var_dump($html);
require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('chroot', realpath(''));
$dompdf = new Dompdf($options);
// reference the Dompdf namespace
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portait');

// Render the HTML as PDF
$dompdf->render(); 

$output = $dompdf->output();
file_put_contents('../lppm/surat_izin/surat-izin-'.$id.'.pdf', $output);
echo "<script>alert('Surat Berhasil Diperbarui')</script><meta http-equiv='refresh' content='2;url=approve_kkn.php'>";