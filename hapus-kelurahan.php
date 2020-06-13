<?php

include("koneksi.php");

if( isset($_GET['id_kelurahan']) ){

    // ambil id dari query string
    $id_kelurahan = $_GET['id_kelurahan'];

    // buat query hapus
    $sql = "DELETE FROM kelurahan WHERE id_kelurahan=$id_kelurahan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-kelurahan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>