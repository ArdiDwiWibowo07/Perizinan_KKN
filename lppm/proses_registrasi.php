<?php
require '../koneksi.php';

/*$nama = $_POST['nama'];*/
$username = $_POST['username'];
$password = $_POST['pass'];
$password2 = $_POST['re_pass']; //sebelum dienkripsi//
$pic = $_POST['pic'];
$nama_pg = $_POST['nama_pg'];
$alamat_pg = $_POST['alamat_pg'];
$telepon_pic = $_POST['telepon_pic'];
$telepon_pg = $_POST['telepon_pg'];
$email_pic = $_POST['email_pic'];


//enkripsi password//
//$epassword = password_hash($password, PASSWORD_DEFAULT);
//$pass = md5($_POST['pass']);

//$cek_username = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username '$username'"));


$query_sql = "INSERT INTO user (nama_user, username, password) VALUES ('$pic','$username','$password')";

$cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"));

if ($cek > 0) {
    echo "<script>
            alert('Maaf, Username Sudah Terdaftar');
            document.location.href = 'registrasi.html';
            </script> ";
} else {
    if ($password != $password2) {
        echo "<script>
                alert('Konfirmasi Pasword Tidak Sesuai');
                document.location.href = 'registrasi.html';
                </script>
        ";
    } else {
        // Validasi kekuatan password
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        $countWordPassword = strlen($password) >= 8;
        $validasi = $uppercase + $lowercase + $number + $specialChars + $countWordPassword;

        if ($validasi != 5) {
            echo "<script>
            alert(" . $uppercase + $lowercase + $number + $specialChars + $countWordPassword . ");
            document.location.href = 'registrasi.html';
            </script>";
        } else {
            if (mysqli_query($koneksi, $query_sql)) {
                $last_id = mysqli_insert_id($koneksi);
                $query_sql1 = "INSERT INTO pg (id_user, nama_pg, alamat_pg, telepon_pg, pic_pg, telepon_pic, email_pic) VALUES ('$last_id','$nama_pg','$alamat_pg','$telepon_pg','$pic','$telepon_pic','$email_pic')";
                $run = mysqli_query($koneksi, $query_sql1);
                echo "<script>
                alert('Pendaftaran Berhasil!');
                document.location.href = '../index.php';
                </script>
                ";
            } else {
                echo "Pendaftaran Gagal : " . mysqli_error($koneksi);
            }
        }
    }
}


?>