<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SOP PT. RMI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('ssets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
 <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  
  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Register Geser <span>Dibawah Ini</span></h1>
            <h2>Dept Technology Information</h2>

          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="<?= base_url('assets/img/register.png') ?>"class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>
  </section><!-- End Hero -->
  <main id="main">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-4 mt-5 pt-3 pb-3 bg-white form-wrapper">
      <div class="container">
               <h3>Register</h3>

<?php 
$authConfig = config('Auth'); // ambil config Auth.php
if ($authConfig->allowRegister !== false) : 
    $validation = \Config\Services::validation(); 
?>
    <form class="" action="register" method="post">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
            <?php if ($validation->getError('firstname')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('firstname'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
            <?php if ($validation->getError('lastname')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('lastname'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            <?php if ($validation->getError('email')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('email'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
            <?php if ($validation->getError('password')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('password'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm">
            <?php if ($validation->getError('password_confirm')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('password_confirm'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
            <div class="col-12 col-sm-8 text-right">
                <a href="/login">Login</a>
            </div>
        </div>
    </form>
<?php else: ?>
    <p class="alert alert-primary mt-5">
        We are sorry. We are not accepting any new registrations at the moment.
    </p>
<?php endif; ?>
            </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>



      </div>
    </div>

  </div>
</section><!-- End About Section -->



</main><!-- End #main -->


 

  <!-- Vendor JS Files -->
 <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
 <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
 <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>

    