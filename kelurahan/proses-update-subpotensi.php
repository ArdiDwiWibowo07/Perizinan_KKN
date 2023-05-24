<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_subpotensi = $_POST['id_subpotensi'];
$nama_subpotensi = $_POST['nama_subpotensi'];
$id_potensi = $_POST['id_potensi'];
$keterangan = $_POST['keterangan'];

 
// update data ke database
mysqli_query($koneksi,"update subpotensi set nama_subpotensi='$nama_subpotensi', id_potensi='$id_potensi', keterangan='$keterangan' where id_subpotensi='$id_subpotensi'");

// mengalihkan halaman kembali ke index.php
header("location:subpotensi_kelurahan.php");
 
?>