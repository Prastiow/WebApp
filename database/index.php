<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri Prastio Nugroho</title>
</head>
<body>

<header>
        <h3>Tabel Kabupaten</h3>
       
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form_kabupaten.php">Daftar Baru</a></li>
            <li><a href="list_tabel.php">Data</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input berhasil!";
            } else {
                echo "Input gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    
</body>
</html>