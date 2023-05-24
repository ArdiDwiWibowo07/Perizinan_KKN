<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_potensi = $_POST['id_potensi'];
$id_potensi_baru = $_POST['id_potensi_baru'];
$id_kelurahan = $_POST['id_kel'];


 
// update data ke database
mysqli_query($koneksi,"update potkel set id_potensi='$id_potensi_baru' where id_potensi='$id_potensi' AND id_kel='$id_kel'");

// mengalihkan halaman kembali ke index.php
header("location:potensi_kelurahan.php");
 
?>