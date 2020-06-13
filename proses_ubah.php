<?php 
require "koneksi.php"; 
 
$id=$_POST['id_kabupaten']; 
$nama_kabupaten=$_POST['nama_kabupaten']; 
$ibukota_kabupaten=$_POST['ibukota_kabupaten']; 
$luas_wilayah=$_POST['luas_wilayah'];

$sql = 
    "UPDATE kabupaten SET          
        nama_kabupaten='$nama_kabupaten',         
        ibukota_kabupaten='$ibukota_kabupaten',         
        luas_wilayah='$luas_wilayah'         
        WHERE id_kabupaten ='$id'";

$hasil=mysql_query($sql);

if ($hasil) {    
    echo "<script language='javascript'>              
    alert('Proses Ubah Data Berhasil');   

    window.open('sukses_edit.html','_top')          
    </script>"; 
 
}else{    
    echo "<script language='javascript'>             
    alert('Proses Ubah Data Gagal'); 

    window.open('list_tabel.php','_top')          
    </script>"; } 
?> 