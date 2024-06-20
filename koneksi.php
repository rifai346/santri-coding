<?php


$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "db_sekolah";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if($connection){
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal! :". mysqli_connect_error();
}
?>