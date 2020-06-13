<?php
$server = 'localhost'; // Nama Server
$user = 'id13530425_kependudukan'; // User Server
$password = 'Itadakimasu319,'; // Password Server
$nama_database = 'id13530425_kependudukan_db'; // Nama Database



$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>