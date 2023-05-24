<?php
include '../koneksi.php';

$id_potensi = $_POST['id_potensi'];
$nama_potensi   = mysqli_real_escape_string($koneksi,$_POST['nama_potensi']);
$id_subpotensi   = mysqli_real_escape_string($koneksi,$_POST['id_subpotensi']);

$i = mysqli_query($koneksi,"UPDATE potensi SET nama_potensi='$nama_potensi',  id_subpotensi='$id_subpotensi'
WHERE id_potensi='$id_potensi'");    
 
if(!$i) {                 
     echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=potensi.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=potensi.php'>";
}


?>