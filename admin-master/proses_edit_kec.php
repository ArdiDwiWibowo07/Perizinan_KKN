<?php
include '../koneksi.php';

$id_kec = $_POST['id_kec'];
$nama_kec   = mysqli_real_escape_string($koneksi,$_POST['nama_kec']);
$alamat_kec   = mysqli_real_escape_string($koneksi,$_POST['alamat_kec']);
$telepon_kec   = mysqli_real_escape_string($koneksi,$_POST['telepon_kec']);


$i = mysqli_query($koneksi,"UPDATE kecamatan SET nama_kec='$nama_kec', alamat_kec='$alamat_kec',
    telepon_kec='$telepon_kec'WHERE id_kec='$id_kec'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=kecamatan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=kecamatan.php'>";
}

?>