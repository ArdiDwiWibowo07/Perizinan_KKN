<?php 
                         include 'koneksi.php';
                            $a = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM kkn INNER JOIN universitas ON kkn.id_univ = universitas.id_univ INNER JOIN kecamatan ON kkn.id_kec = kecamatan.id__kec INNER JOIN kelurahan ON kkn.id_kel = kelurahan.id_kel INNER JOIN desa ON kkn.id_desa = desa.id_desa INNER JOIN potensi ON kkn.id_potensi = potensi.id_potensi");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>




<?php  
session_start();
if(!isset($_SESSION['masuk'])){
    echo "<script>
        alert('Anda Belum Login');
        document.location.href = 'login.html';
        </script>
        ";
    exit();
}

/*session_start();

$_SESSION['username'] = $username = $_POST['username'];
$_SESSION['password'] = $password = $_POST['pass'];

$query_sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($koneksi, $query_sql);

if (mysqli_num_rows($result) > 0) {
    
    header("Location: dashboard.php");
}else{
    echo "<script>
        alert('Username atau Password Salah');
        document.location.href = 'login.html';
        </script>
        ";
}
*/

// proses jika di klik tombol login
/*if (isset($_POST['masuk'])) {
    include 'koneksi.php';
    $redirect = '';
    $username = $_POST['username'];
    $password = $_POST['password'];
*/
    //query cek username akun
/*  $q = $koneksi->query("SELECT * FROM user WHERE username='$username'");
    $get_data = mysqli_fetch_array($q);
*/
    //jika tidak ditemukan
    // if(empty($get_data)) {
    //  $pesan = 'Username Belum Terdaftar';
    // }else{
        //jika username ditemukan maka akan di cek passwordnya
        //jika password yg diinputkan tidak  sama dengan di DB
/*      if ($password != $get_data['password']) {
            $pesan = 'Username atau Password Salah!';
        }else{
*/          //jika password sama maka akan dibuat session id $ username
/*          session_start();
            $_SESSION['id_user'] = $get_data['id_user'];
            $_SESSION['username'] = $username;
            $pesan = 'Selamat Datang';
            $redirect = 'dashboard.php';
        }
    }

    echo "<script>
        document.location.href = 'dashboard.php';
        </script>
        ";
}
*/

