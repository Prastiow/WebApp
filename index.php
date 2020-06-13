<?php

session_start();

include("koneksi.php");

$Id_User = isset($_SESSION['Id_User']) ? $_SESSION['Id_User'] : false;

if ($Id_User) {
    header("location: https://triprastion.tif18e.com/index1.php");
}

$notif = isset($_GET['notif']) ? $_GET['notif'] : false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, , shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="Login/assets/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css/"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Login/css/style.css">
    <link rel="icon" href="Login/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Tri Prastio Nugroho</title>
</head>
<body style="background-color: #f8f8f8;" class="light sidebar-mini sidebar-collapse">
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="align responsive-phone">
    <h1 class="judul">Sistem Informasi </h1>
    <div class="card">
        <div class="head" style="background: black">
            <div></div>
            <a id="login" class="selected" href="#login">Masuk</a>
            <a id="register" href="#register">Daftar</a>
            <div></div>
        </div>
        <div class="tabs">
            <form action="<?php echo "https://triprastion.000webhostapp.com/Login/proses-masuk.php"?>" method="POST" class="needs-validation" novalidate>
                <div class="inputs">
                    <div class="input">
                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                        <img src="Login/img/mail.svg">
                        <div class="invalid-feedback">
                            Tolong Masukkan Email.
                        </div>
                    </div>
                    <div class="input">
                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                        <img src="Login/img/pass.svg">
                        <div class="invalid-feedback">
                            Tolong Masukkan Password.
                        </div>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Ingat Saya</span>
                    </label>
                </div>
                <input type="submit" class="button" name="submit" value="Masuk">
            </form>
            <form action="<?php echo "https://triprastion.000webhostapp.com/Login/proses-daftar.php"?>" method="POST" class="needs-validation" novalidate>
                <?php
                $nama = isset($_GET['nama']) ? $_GET['nama'] : false;
                ?>
                <div class="inputs">
                    <div class="input">
                        <?php
                        if ($notif == "email") {
                            echo "
                            <input class='form-control is-invalid' placeholder='Email' type='email' name='email' required>
                            <img src='Login/img/mail.svg'>
                            <div class='invalid-feedback'>Email Sudah Terdaftar.</div>";
                        } else {
                            echo "
                            <input class='form-control' placeholder='Email' type='email' name='email' required>
                            <img src='Login/img/mail.svg'>
                            <div class='invalid-feedback'>Tolong Masukkan Email.</div>";
                        }
                        ?>
                    </div>
                    <div class="input">
                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="nama" value="<?php echo $nama;?>" required>
                        <img src="Login/img/user.svg">
                        <div class="invalid-feedback">
                            Tolong Masukkan Nama Anda.
                        </div>
                    </div>
                    <div class="input">
                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                        <img src="Login/img/pass.svg">
                        <div class="invalid-feedback">
                            Tolong Masukkan Password.
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="button" value="Daftar">
            </form>
        </div>
    </div>

    <?php
    if ($notif == "email") {
        echo "<div class='toast'
                data-title='Pendaftaran Gagal'
                data-message='Email Sudah Digunakan.'
                data-type='error'>
                </div>";
    } elseif ($notif == "success") {
        echo "<div class='toast'
                data-title='Pendaftaran Berhasil'
                data-message='Silahkan Login.'
                data-type='success'>
                </div>";
    } elseif ($notif == "true") {
        echo "<div class='toast'
                data-title='Login Gagal'
                data-message='Email Atau Password Anda Salah.'
                data-type='error'>
                </div>";
    }
    ?>

</div>
<script src="Login/assets/js/app.js"></script>
<script src="Login/js/jquery-3.3.1.min.js"></script>
<script src="Login/js/index.js"></script>
</body>
</html>