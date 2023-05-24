<?php
include '../koneksi.php';

$id = $_POST['id_proker'];
$nama   = mysqli_real_escape_string($koneksi,$_POST['nm_proker']);


$i = mysqli_query($koneksi,"UPDATE proker SET id_proker='$id', nm_proker='$nama' WHERE id_proker='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=program_kerja.php'>";
} else {
   echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=program_kerja.php'>";
}


?>