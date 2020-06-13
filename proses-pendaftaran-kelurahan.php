<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama_kelurahan = $_POST['nama_kelurahan'];
    $id_kecamatan = $_POST['id_kecamatan'];
    
    // buat query
    $sql = "INSERT INTO kelurahan (nama_kelurahan, id_kecamatan) VALUE ('$nama_kelurahan', '$id_kecamatan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "<script language='javascript'>
 alert('Proses simpan data Berhasil');
 window.open('list-kelurahan.php','_top')
 </script>";
 
    } else {
        echo "<script language='javascript'>
 alert('data tidak lengkap');
 window.open('form-input-kelurahan.php','_top')
 </script>";
 
    }


} else {
    die("Akses dilarang...");
}

?>