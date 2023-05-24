<?php 
	if ($_POST) {
		$id = $_POST['id'];
		if ($id) {
			require_once '../koneksi.php';
			try {
				$sql = "DELETE FROM tingkatan WHERE id_tingkatan = '$id'";
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