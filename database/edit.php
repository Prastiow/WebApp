<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id_kabupaten']) ){
    header('Location: list_tabel.php');
}

//ambil id dari query string
$id_kabupaten = $_GET['id_kabupaten'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM kabupaten WHERE id_kabupaten=$id_kabupaten";
$query = mysqli_query($db, $sql);
$kabupaten = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kabupaten</title>
    <h3>Form Edit Kabupaten</h3>
</head>
<body>



<form action="proses_edit.php" method="post">
		
    <fieldset>

        <input type="hidden" name="id_kabupaten" value="<?php echo $kabupaten['id_kabupaten'] ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table width="100%" border="0">
		
         
        <tr>
            <td width="200">Nama Kabupaten </td>
            <td><input type="text"
            name="nama_kabupaten"
            size="40" 
            <?php echo $kabupaten['nama_kabupaten'] ?>/></td>
        </tr>

        <tr>
            <td>Ibukota Kabupaten </td>
            <td><input type="text"
            name="ibukota_kabupaten"
            size="40" 
            <?php echo $kabupaten['ibukota_kabupaten'] ?>/></td>
        </tr>

        <tr>
            <td>Luas Wilayah </td>
            <td><input type="text"
            name="luas_wilayah"
            size="40" 
            <?php echo $kabupaten['luas_wilayah'] ?>/></td>
        </tr>

        <tr>
            <td><input type="hidden" name="id"
            value="0"/>
        </td>
            <td><input type="submit" name="Update"
        value="Update" />
            </td>
        </tr>


    </table>

    

    </fieldset>

</form>

</body>
</html>


