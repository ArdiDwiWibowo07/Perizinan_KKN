<?php
include '../koneksi.php';

$id_subpotensi = $_POST['id_subpotensi'];
$nama_subpotensi   = mysqli_real_escape_string($koneksi,$_POST['nama_subpotensi']);
$keterangan   = mysqli_real_escape_string($koneksi,$_POST['keterangan']);

$i = mysqli_query($koneksi,"UPDATE subpotensi SET nama_subpotensi='$nama_subpotensi', keterangan='$keterangan' WHERE id_subpotensi='$id_subpotensi'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=subpotensi.php'>";
} else {
   echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=subpotensi.php'>";
}


?>