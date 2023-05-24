<?php
	include '../koneksi.php';

$id = $_POST['id'];
$modul = $_POST['modul'];

if ($modul == 'Kelurahan') {
	$sql = mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE id_kec='$id' order by name_kel ASC ") or die (mysqli_error($koneksi));
	$kelurahan = '<option>--- Pilih ---</option>';
	while ($data = mysqli_fetch_array($sql)) {
		$kelurahan.='<option value="' .$data['id_kel']. '" >'.$data['nama_kel'].' </option>'; 
	}
	echo $kelurahan;

}
/*elseif ($modul == 'Potensi') {
	$sql = mysqli_query($koneksi, "SELECT * FROM potensi WHERE id_kel='$id' order by nama_potensi ASC ") or die (mysqli_error($koneksi));
	$potensi = '<option>--- Pilih ---</option>';
	while ($data = mysqli_fetch_array($sql)) {
		$potensi.='<option value="' .$data['id_potensi']. '" >'.$data['nama_potensi'].' </option>'; 
	}
	echo $potensi;

}elseif ($modul == 'Subpotensi') {
	$sql = mysqli_query($koneksi, "SELECT * FROM subpotensi WHERE id_potensi='$id' order by nama_subpotensi ASC ") or die (mysqli_error($koneksi));
	$subpotensi = '<option>--- Pilih ---</option>';
	while ($data = mysqli_fetch_array($sql)) {
		$subpotensi.='<option value="' .$data['id_subpotensi']. '" >'.$data['nama_subpotensi'].' </option>'; 
	}
	echo $subpotensi;
	
}*/

?>