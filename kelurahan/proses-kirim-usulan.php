<?php
include '../koneksi.php';
session_start();

$id_kelurahan = null;
$data = mysqli_query($koneksi, "SELECT * FROM potkel JOIN potensi ON potensi.id_potensi = potkel.id_potensi JOIN kelurahan ON potkel.id_kel = kelurahan.id_kel JOIN user on user.id_user= kelurahan.id_user WHERE potensi.id_potensi != 0 and user.id_user='".$_SESSION['id_user']."' LIMIT 1");
while ($d = mysqli_fetch_array($data)) {
    $id_kelurahan = $d['id_kel'];
}


//$id_subpotensi = $_POST['id_subpotensi'];
//$id_potensi = $_POST['id_potensi'];
$usulan   = mysqli_real_escape_string($koneksi,$_POST['usulan']);


$i = mysqli_query($koneksi,"INSERT INTO usulan (id_kel, usulan ) values 
('$id_kelurahan','$usulan' )");
 
if(!$i) {                 
    echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=kebutuhan_kelurahan.php'>";
} else {
    echo "<script>alert('Usulan Berhasil Ditambah!')</script><meta http-equiv='refresh' content='2;url=kebutuhan_kelurahan.php'>";
}


?>