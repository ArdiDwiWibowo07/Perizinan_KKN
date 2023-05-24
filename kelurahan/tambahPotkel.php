<?php
include "../koneksi.php";
session_start();


if(isset($_POST['tambahPotkel']))
{
    $id_potensi = $_POST['id_potensi'];
    // echo $brands;

    foreach($id_potensi as $item)
    {
        // echo $item . "<br>";
       
        $query = "INSERT INTO potkel (id_kel,id_potensi) values('".$_SESSION['id_kel']."','".$item."' )";
        $query_run = mysqli_query($koneksi, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: potensi_kelurahan.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: potensi_kelurahan.php");
    }
}
?>