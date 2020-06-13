<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kabupaten</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
        <h3> yang sudah terdaftar</h3>
    </header>

    <nav>
        <a href="form_kabupaten.php">[+] Tambah Baru</a>
    </nav>

    <br>
    <div class="kotak">
    <table border="1">
    <thead>
        <tr>
            <th>NAMA KABUPATEN</th>
            <th>IBUKOTA KABUPATEN</th>
            <th>LUAS WILAYAH</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php include("koneksi.php");
        $sql = "SELECT * FROM kabupaten";
        $query = mysqli_query($db, $sql);

        while($kabupaten = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$kabupaten['nama_kabupaten']."</td>";
            echo "<td>".$kabupaten['ibukota_kabupaten']."</td>";
            echo "<td>".$kabupaten['luas_wilayah']."</td>";
           

            echo "<td>";
            echo "<a href='edit.php?id_kabupaten=".$kabupaten['id_kabupaten']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_kabupaten=".$kabupaten['id_kabupaten']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </div>
    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>