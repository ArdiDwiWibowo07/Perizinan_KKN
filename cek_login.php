<?php

//panggil koneksi db
include "koneksi.php";

//$pass = md5($_POST['password']);

// Getting IP Address
function getIpAddr()
{
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ipAddr = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ipAddr = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ipAddr = $_SERVER['REMOTE_ADDR'];
	}
	return $ipAddr;
}

$ip_address = getIpAddr();
$time = time() - 300;
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and level='$level'");
$user_valid = mysqli_fetch_array($cek_user);
$cek_only_user = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$user_only_valid = mysqli_fetch_array($cek_only_user);
$query = mysqli_query($koneksi, "select count(*) as total_count from loginlogs where TryTime > $time and IpAddress='$ip_address'");
$check_login_row = mysqli_fetch_assoc($query);
$total_count = $check_login_row['total_count'];

if ($total_count == 3) {
	echo "<script>alert('Maaf, tunggu 30 detik, salah ke " . $total_count . "');document.location='index.php'</script>";
} else {
	if ($user_only_valid > 0) {
		if ($user_valid > 0) {
			if ($password == $user_valid['password']) {
				//jika password sesuai
				//buat session
				session_start();
				/*	$_SESSION['masuk']  = true;*/
				$_SESSION['id_user'] = (int) $user_valid['id_user'];
				$idUser = $_SESSION['id_user'];
				$cariKelurahan = mysqli_query($koneksi, "SELECT * FROM kelurahan WHERE id_user = $idUser");
				while ($d = mysqli_fetch_array($cariKelurahan)) {
					$_SESSION['id_kel'] = $d['id_kel'];
				}
				$_SESSION['username'] = $user_valid['username'];
				$_SESSION['nama_user'] = $user_valid['nama_user'];
				$_SESSION['level'] = $user_valid['level'];
				//level user
				if ($level == "LPPM") {
					if ($_SESSION["code"] == $_POST["kodecaptcha"]) {
						header('location: lppm/dashboard.php');
					} else {
						echo "<script>alert('Maaf, captha salah');document.location='index.php'</script>";
						unset($_SESSION['code']);
						session_destroy();
						$try_time = time();
						mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
					}
				} elseif ($level == "Kelurahan") {
					if ($_SESSION["code"] == $_POST["kodecaptcha"]) {
						header('location: kelurahan/index.php');
					} else {
						echo "<script>alert('Maaf, captha salah');document.location='index.php'</script>";
						unset($_SESSION['code']);
						session_destroy();
						$try_time = time();
						mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
					}
				} elseif ($level == "Bappeda") {
					if ($_SESSION["code"] == $_POST["kodecaptcha"]) {
						header('location: admin-master/admin-master.php');
					} else {
						echo "<script>alert('Maaf, captha salah');document.location='index.php'</script>";
						unset($_SESSION['code']);
						session_destroy();
						$try_time = time();
						mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
					}
				} elseif ($level == "Kapanewon") {
					if ($_SESSION["code"] == $_POST["kodecaptcha"]) {
						header('location: kecamatan/index.php');
					} else {
						echo "<script>alert('Maaf, captha salah');document.location='index.php'</script>";
						unset($_SESSION['code']);
						session_destroy();
						$try_time = time();
						mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
					}
				}
			} else {
				echo "<script>alert('Maaf, password salah');document.location='index.php'</script>";
				unset($_SESSION['code']);
				session_destroy();
				$try_time = time();
				mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
			}
		} else {
			echo "<script>alert('Maaf, username dan level salah');document.location='index.php'</script>";
			unset($_SESSION['code']);
			session_destroy();
			$try_time = time();
			mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
		}
	} else {
		echo "<script>alert('Maaf, username gagal');document.location='index.php'</script>";
		unset($_SESSION['code']);
		session_destroy();
		$try_time = time();
		mysqli_query($koneksi, "insert into loginlogs(IpAddress,TryTime) values('$ip_address','$try_time')");
	}
}
?>