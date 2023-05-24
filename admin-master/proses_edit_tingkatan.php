<?php
include '../koneksi.php';

$id   = mysqli_real_escape_string($koneksi,$_POST['id']);
$nama_tingkatan   = mysqli_real_escape_string($koneksi,$_POST['nama_tingkatan']);
$kode_tingkatan   = mysqli_real_escape_string($koneksi,$_POST['kode_tingkatan']);


$i = mysqli_query($koneksi,"UPDATE tingkatan SET nama_tingkatan='$nama_tingkatan', kode_tingkatan='$kode_tingkatan' WHERE id_tingkatan='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=tingkatan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=tingkatan.php'>";
}

?>