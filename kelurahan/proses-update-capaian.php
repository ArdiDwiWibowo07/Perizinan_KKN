<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kkn = $_POST['id_kkn'];
$capaian = $_POST['capaian'];
 
// update data ke database
mysqli_query($koneksi,"update kkn set capaian='$capaian' where id_kkn='$id_kkn'");

// mengalihkan halaman kembali ke index.php
header("location:laporan_kelurahan.php");
 
?>