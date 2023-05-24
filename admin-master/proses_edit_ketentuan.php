<?php
include '../koneksi.php';

$id = $_POST['id'];
$ketentuan   = mysqli_real_escape_string($koneksi,$_POST['ketentuan']);


$i = mysqli_query($koneksi,"UPDATE ketentuan SET ketentuan='$ketentuan' WHERE id='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=template_perizinan_ketentuan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=template_perizinan_ketentuan.php'>";
}

?>