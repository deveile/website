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
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#">RAVEN</a></h1>

    </div>
  </header><!-- End Header -->


    <div class="row justify-content-center">
    <h1 class="text-center mt-5 mb-4">FORM LOGIN</h1>
        <div class="col-lg-6" style="border: 1px solid; padding: 30px;">
            <form method="post" action="login-aksi.php">
                <div>
                    <p class="mt-3 mb-1 fw-semibold">USERNAME :</p>
                    <input class="form-control" type="text" name="username">
                </div>
                <div>
                    <p class="mt-3 mb-1 fw-semibold">PASSWORD :</p>
                    <input class="form-control" type="password" name="password">
                </div>
                <?php
                session_start();

                if (isset($_SESSION['error'])) {
                    echo '<p class="text-danger text-center mt-4 mb-2">' . $_SESSION['error'] . '</p>';
                    unset($_SESSION['error']);
                }
                ?>
                <div class="text-center mt-4">
                    <button class="btn fw-semibold btn-dark me-2" style="padding: 5px 50px 5px 50px;" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    </body>

</html>