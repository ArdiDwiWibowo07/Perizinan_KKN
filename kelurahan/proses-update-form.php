<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kkn = $_POST['id_kkn'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update kkn set app_kel='$status' where id_kkn='$id_kkn'");

// mengalihkan halaman kembali ke index.php
header("location:formulir_kelurahan1.php");
 
?>