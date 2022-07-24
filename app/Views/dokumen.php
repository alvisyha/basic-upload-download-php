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
  <div class="row mt-3 mb-5">
    <div class="col-lg-12 hero-img mx-auto mt-5" style="width: 600px" data-aos="zoom-out" data-aos-delay="200">
      <img src="<?php echo base_url('assets/img/dokumen.png')?>" class="img-fluid" alt="">
    </div>
  </div>
  <div class="row mb-5">
    <div class="col-lg-12 d-flex flex-column text-center justify-content-center">
      <h1 data-aos="fade-up">Astra International</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Astra International bergerak di berbagai sektor di Indonesia. Unggah produk buatan Astra Internasional yang Anda miliki dan berikan ulasan terbaik Anda disini!</h2>
      <div data-aos="fade-up" data-aos-delay="600"></div>
      <div class="text-center mt-5" data-aos="fade-up">
      <a href="<?= base_url(); ?>/formupload" class="btn btn-primary justify-content" >Unggah</a>
      </div>
      </div>
    </div>
</div>
</section>
<!-- End Hero -->

<!-- Start Form -->
<section>
  <!-- Start Data Produk -->
<div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white text-center fw-bold fs-5">
                Data Produk
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th width="40%">Gambar</th>
                            <th width="35%">Ulasan</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no  = 1;
                        foreach ($dokumen as $row) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/dokumen/" . $row->dokumen; ?>"></td>
                                <td><?= $row->keterangan; ?></td>
                                <td>
                                  <a class="btn btn-primary text-white " href="<?= base_url(); ?>/dokumen/download/<?= $row->id_dokumen; ?>">Download</a>
                                  <a class="btn btn-primary text-white " href="<?= base_url(); ?>/dokumen/delete/<?= $row->id_dokumen; ?>">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->
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

<!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>