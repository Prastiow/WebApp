<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Tri Prastio Nugroho</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="plugins/counto/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="plugins/animated-text/animated-text.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg  main-nav " id="navbar">
	<div class="container">
	  <a class="navbar-brand" href="index1.php">
	  	Tri Prastio Nugroho
	  </a>

	  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-align-justify"></span>
	  </button>
  
		  <div class="collapse navbar-collapse" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item  active"><a class="nav-link" href="index1.php">Home</a></li>

			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Master</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown01">
						<li><a class="dropdown-item" href="list_tabel.php">Kabupaten</a></li>
						<li><a class="dropdown-item" href="form-input-kecamatan.php">Kecamatan</a></li>
						<li><a class="dropdown-item" href="list-kelurahan.php">Desa / Kelurahan</a></li>
					</ul>
			  </li>

			  <li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pencatatan Sipil</a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="belom_jadi.html">Pengurusan Domisili</a></li>
						<li><a class="dropdown-item" href="belom_jadi.html">Pengurusan KTP</a></li>
						<li><a class="dropdown-item" href="belom_jadi.html">Pengurusan Surat Jalan</a></li>
						<li><a class="dropdown-item" href="belom_jadi.html">Portfolio Details</a></li>
					</ul>
			  </li>
				<li class="nav-item"><a class="nav-link" href="belom_jadi.html">Laporan</a></li>
			   <li class="nav-item"><a class="nav-link" href="index.php">Keluar</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Header Close --> 


<section class="page-title section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-0 text-lg">ISI FORM</h1>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- free block -->

<section class="buy-pro" style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				

<fieldset>

<h2>Form Input Kecamatan</h2><br>
    <form method="POST" action="proses-pendaftaran-kecamatan.php">
        <table width="100%" border="0">
            <tr>
                <td width="150">
                    <h5>Nama Kecamatan </h5>
                </td>
                <td><input type="text" name="nama_kecamatan" size="30" /></td>
            </tr>
            <tr>
                <td>
                    <h5>Jumlah Desa </h5>
                </td>
                <td><input type="text" name="jumlah_desa" size="30" /></td>
            </tr>
            <tr>
                <td>
                    <h5>Kabupaten </h5>
                <select name="id_kabupaten">
           <?php
            include "koneksi.php";
            $sql="select * from kabupaten";

            $query=mysqli_query($db,$sql);
            $no=0;
            while ($kabupaten = mysqli_fetch_array($query)) {
            $no++;

            $ket="";
            if (isset($_GET['kecamatan'])) {
                $kabupaten = trim($_GET['kabupaten']);

                if ($kabupaten==$kabupaten['id_kabupaten'])
                {
                    $ket="selected";
                }
            }
            ?>
            <option <?php echo $ket; ?> value="<?php echo $kabupaten['id_kabupaten'];?>"><?php echo $kabupaten['nama_kabupaten'];?></option>
            <?php
	}
  ?>
        </select>
                    </tr>
                    <tr>
                        <td><input type="hidden" name="id_kecamatan" value="0" />
                        </td>
                        <td><input class="genric-btn primary small" type="submit" name="simpan" value="Simpan" /></td>
                    </tr>
                </table>
            </form>

</fieldset>


			</div>
		</div>
	</div>
</section>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/aos/aos.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="plugins/animated-text/animated-text.js"></script>
<script src="plugins/counto/apear.js"></script>
<script src="plugins/counto/counTo.js"></script>

 <!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script> 
<!-- Main Script -->
<script src="js/script.js"></script>

</html>


