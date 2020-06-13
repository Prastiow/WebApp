<?php

session_start();

include("assets/function/koneksi.php");
include("assets/function/helper.php");

unset($_SESSION['Id_User']);
unset($_SESSION['Nama_User']);
unset($_SESSION['Posisi']);

header("location:".BASE_URL);