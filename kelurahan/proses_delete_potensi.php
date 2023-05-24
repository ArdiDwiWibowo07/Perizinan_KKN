<?php 
	if ($_POST) {
		$kelurahan = $_POST['kelurahan'];
		$potensi = $_POST['potensi'];
		if ($kelurahan) {
			require_once '../koneksi.php';
			try {
				$sql = "DELETE FROM potkel WHERE id_kel = '".$kelurahan."' AND id_potensi = '".$potensi."'";
				if (!$koneksi->query($sql)) {
					echo $koneksi->error;
				}else{
					echo "Berhasil Dihapus";
				}
			} catch (Exception $ex){
				echo $ex;
			}
		}else{
			http_response_code(400); // Bad request
		}
	}else{
		http_response_code(405); // method not allowed
	}
 ?>