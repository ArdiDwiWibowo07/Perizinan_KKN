<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_user']);
unset($_SESSION['level']);
unset($_SESSION['code']);

session_destroy();
echo "<script>alert('Anda telah keluar');document.location='index.php'</script>";

?>
