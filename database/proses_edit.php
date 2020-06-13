<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Update'])){

    // ambil data dari formulir
    $id_kabupaten       =$_POST ['id_kabupaten'];
    $nama_kabupaten     =$_POST ['nama_kabupaten'];
    $ibukota_kabupaten  =$_POST ['ibukota_kabupaten'];
    $luas_wilayah       =$_POST ['luas_wilayah'];

   
// buat query update
$sql = "UPDATE kabupaten SET nama_kabupaten='$nama_kabupaten',ibukota_kabupaten='$ibukota_kabupaten',luas_wilayah='$luas_wilayah' WHERE id_kabupaten=$id_kabupaten";
$query = mysqli_query($db, $sql);

// apakah query update berhasil?
if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: list_tabel.php');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
}


} else {
die("Akses dilarang...");
}

?>