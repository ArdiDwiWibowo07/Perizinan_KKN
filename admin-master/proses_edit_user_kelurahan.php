<?php
include '../koneksi.php';

$id_user = $_POST['id_user'];
$username   = mysqli_real_escape_string($koneksi,$_POST['username']);
$password   = mysqli_real_escape_string($koneksi,$_POST['password']);



$update =mysqli_query ($koneksi, "UPDATE user SET username = '$username', password = '$password' WHERE id_user = $id_user");
if($update){
	echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=admin-kelurahan.php'>";
}


?>