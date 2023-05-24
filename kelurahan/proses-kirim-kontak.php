<?php
    include '../koneksi.php';
    session_start();
    
    $user = $_SESSION['id_user'];
    $telepon   = mysqli_real_escape_string($koneksi,$_POST['telepon']);
    $sosial   = mysqli_real_escape_string($koneksi,$_POST['sosial']);


    $i = mysqli_query($koneksi,"INSERT INTO kontak (id_user, telepon, sosial_media ) values 
    ('$user','$telepon','$sosial' )");
    
    if(!$i) {                 
        echo "<script>alert('Data Gagal Diubah!')</script><meta http-equiv='refresh' content='2;url=kontak.php'>";
    } else {
        echo "<script>alert('Usulan Berhasil Ditambah!')</script><meta http-equiv='refresh' content='2;url=kontak.php'>";
    }


?>