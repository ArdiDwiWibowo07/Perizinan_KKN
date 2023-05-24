<?php
include '../koneksi.php';

$id = $_POST['id'];
$dasar_perizinan   = mysqli_real_escape_string($koneksi,$_POST['dasar_perizinan']);


$i = mysqli_query($koneksi,"UPDATE dasar_perizinan SET dasar='$dasar_perizinan' WHERE id='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=template_perizinan_dasar.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=template_perizinan_dasar.php'>";
}

?>