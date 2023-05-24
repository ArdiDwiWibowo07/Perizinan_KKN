<?php
include '../koneksi.php';

$potensi = $_GET['id_potensi'];
$subpotensi =mysqli_query($koneksi, "SELECT * FROM subpotensi WHERE id_potensi='$potensi' ORDER BY nm_subpotensi ");

echo "<option>--- Pilih Subpotensi ---</option>";
while ($dt = mysqli_fetch_array($subpotensi)) {
	echo "<option value=\"".$dt['id_sub']."\">".$dt['nm_subpotensi']."</option>\n";
}


?>