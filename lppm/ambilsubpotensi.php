<?php
include '../koneksi.php';

$potensi = $_GET['id_potensi'];
$subpotensi =mysqli_query($koneksi, "SELECT id_subpotensi, nama_subpotensi FROM subpotensi WHERE id_potkel='$potensi' ORDER BY nama_subpotensi ");

echo "<option>--- Pilih Subpotensi---</option>";
while ($dt = mysqli_fetch_array($subpotensi)) {
	echo "<option value=\"".$dt['id_subpotensi']."\">".$dt['nama_subpotensi']."</option>\n";
}


?>