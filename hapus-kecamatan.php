<?php

include("koneksi.php");

if( isset($_GET['id_kecamatan']) ){

    // ambil id dari query string
    $id_kecamatan = $_GET['id_kecamatan'];

    // buat query hapus
    $sql = "DELETE FROM kecamatan WHERE id_kecamatan=$id_kecamatan";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: list-kecamatan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>