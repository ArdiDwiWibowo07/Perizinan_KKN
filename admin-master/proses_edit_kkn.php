<?php
include '../koneksi.php';

$id = mysqli_real_escape_string($koneksi,$_POST['id']);
$tgl_keluar   = mysqli_real_escape_string($koneksi,$_POST['tgl_keluar']);

$i = mysqli_query($koneksi,"UPDATE kkn SET tgl_dikeluarkan='$tgl_keluar' WHERE id_kkn='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=kecamatan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=file-surat.php?id=".$id."'>";
}

?>