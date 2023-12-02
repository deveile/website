<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Alat RAVEN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/raven_logo.png" rel="icon">
  <link href="assets/img/raven_logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body bg-dark>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#">RAVEN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-success fw-semibold" type="submit" name="btn_search">CARI</button>
      </form>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto " href="alat.php">Alat</a></li>
          <li><a class="nav-link scrollto " href="anggota.php">Anggota</a></li>
          <li><a class="nav-link scrollto active" href="peminjaman.php">Peminjaman</a></li>
          <li><a class="getstarted scrollto" href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 
	<center><h2>PEMINJAMAN ALAT TAEKWONDO RAVEN</h2></center>

	<br/>
<a href="tambah_peminjaman.php"type="button" class="btn btn-dark">+ TAMBAH DATA</a> 				
	<br/>
	<br/>
	<div class="table-responsive"> 
	<table class ="table table-hover table-bordered table-dark">
		<tr>
			<th style = "background-color:#000; color; #fff">No</th>
			<th style = "background-color:#000; color; #fff">id_peminjaman</th>
			<th style = "background-color:#000; color; #fff">Id_Anggota</th>
			<th style = "background-color:#000; color; #fff">Id_Alat</th>
			<th style = "background-color:#000; color; #fff">Tanggal_peminjaman</th>
      <th style = "background-color:#000; color; #fff">Tanggal_pengembalian</th>
		</tr>
		<?php 
		include 'koneksi.php';
		// Proses pencarian
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysqli_query($koneksi, "SELECT * FROM peminjaman2 WHERE id_peminjaman LIKE '%$cari%' OR id_anggota LIKE '%$cari%' OR id_alat LIKE '%$cari%' OR tanggal_peminjaman LIKE '%$cari%' OR tanggal_pengembalian LIKE '%$cari%'");
		  } else {
			$data = mysqli_query($koneksi, "SELECT * FROM peminjaman2");
		  }
	  
		  $no = 1;
		  while ($d = mysqli_fetch_array($data)){
			?>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_peminjaman']; ?></td>
				<td><?php echo $d['id_anggota']; ?></td>
				<td><?php echo $d['id_alat']; ?></td>
				<td><?php echo $d['tanggal_peminjaman']; ?></td>
        <td><?php echo $d['tanggal_pengembalian']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
   


	
    <!-- ======= Frequently Asked Questions Section ======= -->
   

	</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>RAVEN</h3>
              <p>
                Jl. Raya Padalarang No.451, Kertajaya, Kec. Padalarang,<br>
                Kabubapten Bandung Barat, Jawa Barat 40553, Indonesia.<br><br>
                <strong>Phone:</strong> +62 821-1719-2655(Mia)<br>
               <strong>Phone:</strong> +62 831-3713-3210(Alif)<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://instagram.com/taekwondosmkn4pdl?igshid=OGQ5ZDc2ODk2ZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
              
            
          </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link yang mungkin berguna</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="alat.php">Alat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="anggota.php">Anggota</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="peminjaman.php">Peminjaman</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Deva Nur M</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
      <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>