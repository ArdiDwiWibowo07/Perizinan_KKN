<?php
include '../koneksi.php';

$id_potensi = $_POST['id_potensi'];
$id_potensi_baru = $_POST['id_potensi_baru'];
$id_kelurahan = $_POST['id_kel'];

$i = mysqli_query($koneksi,"UPDATE potkel SET id_potensi='$id_potensi_baru' WHERE id_potensi='$id_potensi' AND id_kel = '$id_kelurahan'");    
 
if(!$i) {                 
     echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=potensi_kelurahan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=potensi_kelurahan.php'>";
}


?>