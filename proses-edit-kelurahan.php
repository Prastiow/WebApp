<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['Update'])){

    // ambil data dari formulir
    $id_kelurahan      =$_POST ['id_kelurahan'];
    $nama_kelurahan     =$_POST ['nama_kelurahan'];
    $id_kecamatan       =$_POST ['id_kecamatan'];

   
// buat query update
$sql = "UPDATE kelurahan SET id_kecamatan='$id_kecamatan', nama_kelurahan='$nama_kelurahan' WHERE id_kelurahan=$id_kelurahan";
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