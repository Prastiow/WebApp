<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kabupaten</title>
    <h3>Form Input Kabupaten</h3>
</head>
<body>



<form action="simpan_kabupaten.php" method="POST">

    <fieldset>

    <table width="100%" border="0">
        
        <tr>
            <td width="200">Nama Kabupaten </td>
            <td><input type="text"
            name="nama_kabupaten"
            size="40" /></td>
        </tr>

        <tr>
            <td>Ibukota Kabupaten </td>
            <td><input type="text"
            name="ibukota_kabupaten"
            size="40" /></td>
        </tr>

        <tr>
            <td>Luas Wilayah </td>
            <td><input type="text"
            name="luas_wilayah"
            size="40" /></td>
        </tr>

        <tr>
            <td><input type="hidden" name="id"
            value="0"/>
        </td>
            <td><input type="submit" name="Simpan"
        value="Simpan" />
            </td>
        </tr>

    </table>

    </fieldset>

</form>

</body>
</html>