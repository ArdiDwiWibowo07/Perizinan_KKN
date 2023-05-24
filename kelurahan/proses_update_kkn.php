<?php
	session_start();

	$koneksi = mysqli_connect("localhost","root","","db_bappeda");
	if(isset($_POST['update']))
    {
    $id_kkn			 = mysqli_real_escape_string($koneksi,$_POST['id_kkn']);
    $nama_kajian   	 = mysqli_real_escape_string($koneksi,$_POST['nama_pg']);
    $tipe_kegiatan   = mysqli_real_escape_string($koneksi,$_POST['nama_potensi']);
    $nama_subpotensi   = mysqli_real_escape_string($koneksi,$_POST['nama_subpotensi']);
    $status           = mysqli_real_escape_string($koneksi,$_POST['status']);
	
	mysqli_query ($koneksi, "UPDATE INTO kkn (id_kkn, nama_pg, nama_potensi, nama_subpotensi, status, file) values
                            ( '$id_kkn','$nama_pg', '$nama_potensi', '$nama_subpotensi', '$status', '$file' )");
	echo "<Center><h2><br>Terima Kasih<br>Data Kajian Telah Diperbarui</h2></center>
                          <meta http-equiv='refresh' content='2;url=../datakajianblp.php'>";
                      }
	?>