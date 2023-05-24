<?php
include '../koneksi.php';

$id_kel = $_POST['id_kel'];
$id_kec   = mysqli_real_escape_string($koneksi,$_POST['id_kec']);
$nama_kel   = mysqli_real_escape_string($koneksi,$_POST['nama_kel']);


$i = mysqli_query($koneksi,"UPDATE kelurahan SET id_kec='$id_kec', nama_kel='$nama_kel'  WHERE id_kel='$id_kel'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=kelurahan.php'>";
} else {
   echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=kelurahan.php'>";
}


?>