<?php
include '../koneksi.php';

$kalurahan = $_GET['id_kel'];
$potensi =mysqli_query($koneksi, "SELECT potkel.id_potkel, nama_potensi FROM potensi INNER JOIN potkel ON potensi.id_potensi = potkel.id_potensi WHERE id_kel='$kalurahan' ORDER BY nama_potensi");

echo "<option>--- Pilih Potensi---</option>";
while ($dt = mysqli_fetch_array($potensi)) {
	echo "<option value=\"".$dt['id_potkel']."\">".$dt['nama_potensi']."</option>\n";
}


?>