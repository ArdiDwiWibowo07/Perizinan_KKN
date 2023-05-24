<?php

include '../koneksi.php';
$id = $_GET['id'];


mysqli_query($koneksi, "UPDATE kkn SET app_bappeda = 'Ditolak' WHERE id_kkn='$id'");

header("location:approve_kkn.php");
?>