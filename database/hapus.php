<?php

include("koneksi.php");

if( isset($_GET['id_kabupaten']) ){

    // ambil id dari query string
    $id_kabupaten = $_GET['id_kabupaten'];

    // buat query hapus
    $sql = "DELETE FROM kabupaten WHERE id_kabupaten=$id_kabupaten";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list_tabel.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>