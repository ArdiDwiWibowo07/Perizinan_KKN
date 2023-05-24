<?php
include '../koneksi.php';

$id = $_POST['id'];
$nama   = mysqli_real_escape_string($koneksi,$_POST['nama']);
$jabatan   = mysqli_real_escape_string($koneksi,$_POST['jabatan']);
$nip   = mysqli_real_escape_string($koneksi,$_POST['nip']);


$i = mysqli_query($koneksi,"UPDATE pejabat SET nama='$nama', jabatan='$jabatan',
    nip='$nip'WHERE id='$id'");    
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=form_pejabat.php'>";
} else {
    echo "<script>alert('Data Berhasil Diubah!')</script><meta http-equiv='refresh' content='2;url=form_pejabat.php'>";
}

?>