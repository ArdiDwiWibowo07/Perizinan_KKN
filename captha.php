<?php
session_start();
function acakCaptcha() {

   //untuk menyatakan $pass sebagai array
    $capthaArray = array(); 
 
   //masukkan -2 dalam string length
   for($i=0;$i<=5;$i++) {
	// jumlah karakter
	$angka=rand(0, 9);
    array_push($capthaArray,$angka);
   }
 
   //ubah array menjadi string
    return implode($capthaArray); 
}
 
 // untuk mengacak captcha
$code = acakCaptcha();
$_SESSION["code"] = $code;
 
//lebar dan tinggi captcha
$wh = imagecreatetruecolor(173, 50);
 
//background color biru
$bgc = imagecolorallocate($wh, 22, 86, 165);
 
//text color abu-abu
$fc = imagecolorallocate($wh, 223, 230, 233);
imagefill($wh, 0, 0, $bgc);
 
//( $image , $fontsize , $string , $fontcolor )
imagestring($wh, 10, 50, 15,  $code, $fc);
 
//buat gambar
header('content-type: image/jpg');
imagejpeg($wh);
imagedestroy($wh);
?>