<?php
require "koneksi.php";
$id=$_GET ['id_kabupaten'];

$sql= "SELECT * FROM kabupaten WHERE id_kabupaten=$id_kabupaten";
$hasil=mysql_query($sql);
$jd=mysql_fetch_array($hasil);
?>

<h3> Form Ubah Kabupaten </h3>
<form method= "post" action= "proses_ubah.php">
<table width= "600" border= "0">

<tr>       
    <td width= "157">Nama Kabupaten </td>       
    <td width= "433"><input type= "text"           
        name= "nama_kabupaten" size= "30"           
        value= "<?php 
        echo $data['nama_kabupaten'];?>"/>           
    <td>    
</tr>

<tr>       
    <td>Ibukota Kabupaten </td>       
    <td>          
        <input type="text" name="ibukota_kabupaten"           
        size= "40"           
        value= "<?php echo $data['ibukota_kabupaten'];?>"/>      
    </td>     
</tr> 

<tr>       
    <td>Luas Wilayah </td>       
    <td>          
        <input type="text" name="luas_wilayah" size="20"
        value="<?php echo $data['luas_wilayah'];?>"/>        
    </td>     
</tr>

</table> 
</form> 

