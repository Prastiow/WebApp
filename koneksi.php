<?php
$server = 'localhost'; // Nama Server
$user = 'tifecom_Triprastio'; // User Server
$password = 'Tiodesune319'; // Password Server
$nama_database = 'tifecom_Prastio'; // Nama Database



$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>