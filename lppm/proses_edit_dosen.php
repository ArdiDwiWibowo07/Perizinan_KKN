<?php
include '../koneksi.php';

$id = mysqli_real_escape_string($koneksi,$_POST['id']);
$nama   = mysqli_real_escape_string($koneksi,$_POST['nama']);
$nip   = mysqli_real_escape_string($koneksi,$_POST['nip']);
$telepon   = mysqli_real_escape_string($koneksi,$_POST['telepon']);


$i = mysqli_query($koneksi,"UPDATE dosen SET nama_dosen ='$nama', nip='$nip',
    telepon='$telepon'WHERE id_dosen='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=daftar_dosen_lapangan.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=daftar_dosen_lapangan.php'>";
}

?>