<?php
include '../koneksi.php';

$subpotensi   = mysqli_real_escape_string($koneksi,$_POST['id_subpotensi']);
$kkn   = mysqli_real_escape_string($koneksi,$_POST['id_kkn']);



$i = mysqli_query($koneksi,"INSERT INTO detail_pilih_subpotensi(id_kkn, id_subpotensi) VALUES ('$kkn','$subpotensi')");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=pilihSubpotensiKelurahan.php?id=".$kkn."'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=pilihSubpotensiKelurahan.php?id=".$kkn."'>";
}

?>