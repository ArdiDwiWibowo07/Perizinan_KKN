<?php
// Require composer autoload
include "koneksi.php";

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
        <tr>
            <th>No</th>
            <th>Kapanewon</th>
            <th>Kelurahan</th>
            <th>Perguruan Tinggi</th>
        </tr>';


$html .= '</table></body></html>';
$filePath ='ex';
require 'vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
// reference the Dompdf namespace
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portait');

// Render the HTML as PDF
$dompdf->render();

$output = $dompdf->output();
file_put_contents('ex/ex.pdf', $output);