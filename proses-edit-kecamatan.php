<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Update'])){

    // ambil data dari formulir
    $id_kecamatan       =$_POST ['id_kecamatan'];
    $nama_kecamatan     =$_POST ['nama_kecamatan'];
    $jumlah_desa        =$_POST ['jumlah_desa'];
    $id_kabupaten       =$_POST ['id_kabupaten'];

   
// buat query update
$sql = "UPDATE kecamatan SET nama_kecamatan='$nama_kecamatan',jumlah_desa='$jumlah_desa',id_kabupaten='$id_kabupaten' WHERE id_kecamatan=$id_kecamatan";
$query = mysqli_query($db, $sql);

// apakah query update berhasil?
if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: sukses_edit.html');
} else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
}


} else {
die("Akses dilarang...");
}

?>