<?php
include '../koneksi.php';

$id_desa = $_POST['id_desa'];
$nama_desa   = mysqli_real_escape_string($koneksi,$_POST['nama_desa']);
$alamat_desa   = mysqli_real_escape_string($koneksi,$_POST['alamat_desa']);
$telepon_desa   = mysqli_real_escape_string($koneksi,$_POST['telepon_desa']);


$i = mysqli_query($koneksi,"UPDATE desa SET nama_desa='$nama_desa', alamat_desa='$alamat_desa',
    telepon_desa='$telepon_desa'WHERE id_desa='$id_desa'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=desa.php'>";
} else {
   echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=desa.php'>";
}


?>