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


  <!-- Maps -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>
<style>
    #hero .container h1{
    font-size: 32px;
    margin-top: 50px;
    }

    .container img{
        margin-top: 40px;
    }
    .hero {
    width: 100%;
    height: 200vh;
    background: url(/assets/img/hero-bg.png)? top center no-repeat;
    background-size: cover;
    }
    .title-maps h2{
        font-weight:800;
        color: #012970;
        margin-top:50px
    }

    #maps {
        margin-left:345px;
        margin-top:30px;
    }

    .alamat h5{
        margin-top: 30px;
        color: #012970;
    }
  </style>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>Astra International</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link ms-auto  active" href="<?php echo base_url('home')?>">Home</a></li>
          <li><a class="nav-link ms-auto " href="<?php echo base_url('dokumen')?>">Dokumen</a></li>
          <li><a class="nav-link ms-auto" href="<?php echo base_url('informasipublik')?>">Informasi Publik</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 hero-img">
                <img src="<?php echo base_url('assets/img/astra-banner.png')?>" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <h1 class="text-center" data-aos="fade-up">Astra International</h1>
          <p class="mt-3 text-justify" data-aos="fade-up" data-aos-delay="400">PT Astra International Tbk didirikan di Jakarta pada tahun 1957 sebagai sebuah perusahaan perdagangan umum dengan nama Astra International Inc. Pada tahun 1990, telah dilakukan perubahan nama menjadi PT Astra International Tbk, dalam rangka penawaran umum perdana saham Perseroan kepada masyarakat, yang dilanjutkan dengan pencatatan saham Perseroan di Bursa Efek Indonesia dengan menggunakan ticker ASII. Nilai kapitalisasi pasar Astra pada akhir tahun 2020 adalah sebesar Rp244 triliun.</p>
          <p class="mt-3 text-justify" data-aos="fade-up" data-aos-delay="400">
          Dengan bisnis yang beragam, Astra telah menyentuh berbagai aspek kehidupan bangsa melalui produk dan layanan yang dihasilkan. Dalam keseharian hidup, masyarakat Indonesia menggunakan sepeda motor dan mobil, jalan tol, printer, hingga layanan pembiayaan, perbankan dan asuransi milik Astra. Pelaku bisnis bermitra dengan Astra memanfaatkan berbagai kendaraan komersial, alat berat, layanan logistik, sistem teknologi informasi dan jasa pertambangan dari Astra. Berbagai produk yang dihasilkan, antara lain minyak kelapa sawit, batu bara dan kendaraan bermotor, senantiasa diekspor sehingga Astra dapat berkontribusi dalam menyumbangkan devisa bagi negara.
          </p>
          <div data-aos="fade-up" data-aos-delay="600">
          </div>
        </div>
         <!-- Start Maps -->

    <div class="title-maps text-center">
        <h2>Temukan Kami!</h2>
    </div>
  
  <div id="maps" data-aos="fade-up" data-aos-delay="600" class="maps me-5 justify-content">
  <div id="map" style="width: 600px; height: 400px;"></div>
<script>

	var map = L.map('map').setView([-6.207188, 106.821749], 13);

	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);

	var marker = L.marker([-6.207188, 106.821749]).addTo(map)
		.bindPopup('<b>Astra International</b><br />Jakarta., Indonesia').openPopup();
</script>
  </div>

  <div data-aos="fade-up" data-aos-delay="600" class="alamat text-center">
    <h5>Menara Astra, Jl. Jenderal Sudirman No.Kav. 5, RT.10/RW.11, 
        <br>Karet Tengsin, Tanah Abang, Central Jakarta City, Jakarta 10220</h5>
  </div>

  <!-- End Maps !-->

      </div>
    </div>
  </section><!-- End Hero -->
 
 
  
      <!-- Vendor JS Files -->
<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js')?>"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
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
</html>