<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Astra International</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/astra.png')?>" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('/assets/vendor/aos/aos.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/vendor/bootstrap/css/bootstrap.min.css')?> " rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Astra International</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link ms-auto " href="<?php echo base_url('home')?>">Home</a></li>
          <li><a class="nav-link ms-auto active" href="<?php echo base_url('dokumen')?>">Dokumen</a></li>
          <li><a class="nav-link ms-auto" href="<?php echo base_url('informasipublik')?>">Informasi Publik</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

<div class="container">
 <!-- Start Form -->
<div class="row mt-5">
      <!-- Start Form -->
<div class="container" data-aos="fade-down" data-aos-delay="200">
        <div class="card mx-auto" style="width: 1000px;">
            <div class="card-header bg-primary text-center text-white">
                <h3 class="fw-bold" >
                Form Unggah Produk
                </h3>
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('/formupload/save'); ?>" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="berkas" class="form-label">Produk</label>
                        <input type="file" class="form-control" id="dokumen" name="dokumen">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Ulasan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= old('keterangan'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary " value="Kirim" />
                        <a href="<?= base_url('/dokumen'); ?>" class="btn btn-primary role="button" aria-pressed="true">Kembali</a>
                        </div
                </form>
            </div>
        </div>
    </div>
<!-- End Form -->
</div>
</section>
<!-- End Hero -->
<footer>
  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"  >
    
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">Astra International
          </h6>
          <p>
          PT Astra International Tbk 
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="https://www.astra.co.id/Business/Automotive" class="text-reset">Otomotif</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/Business/Financial-Services" class="text-reset">Jasa Keungan</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/Business/Information-Technology" class="text-reset">Teknologi Informasi</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/Business/Agribusiness" class="text-reset">Agribisnis</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links
          </h6>
          <p>
            <a href="https://www.astra.co.id/" class="text-reset">Harga</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/" class="text-reset">Pengaturan</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/" class="text-reset">Pesan</a>
          </p>
          <p>
            <a href="https://www.astra.co.id/Contact-Us" class="text-reset">Bantuan</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p>Menara Astra, Jl. Jenderal Sudirman No.Kav. 5, RT.10/RW.11,
Karet Tengsin, Tanah Abang, Central Jakarta City, Jakarta 10220</p>
          <p>
           
            corcomm@ai.astra.co.id
          </p>
          <p> (021) 5084 3888</p>
          <p> (021) 6530 4957</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="/">Astra International</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>


 <!-- End News Section -->
      <!-- Vendor JS Files -->
      -->
  <script src="<?php echo base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

                </body>
                </html>