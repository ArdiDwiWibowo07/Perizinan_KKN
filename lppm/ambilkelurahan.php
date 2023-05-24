<?php
include '../koneksi.php';

$kecamatan = $_GET['id_kec'];
$kelurahan =mysqli_query($koneksi, "SELECT id_kel, nama_kel FROM kelurahan WHERE id_kec='$kecamatan' ORDER BY nama_kel ");

echo "<option>--- Pilih Kalurahan ---</option>";
while ($dt = mysqli_fetch_array($kelurahan)) {
	echo "<option value=\"".$dt['id_kel']."\">".$dt['nama_kel']."</option>\n";
}


?>