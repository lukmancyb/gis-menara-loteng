<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">
  
  <meta name="author" content="themefisher.com">

  <title><?= isset($title) ? $title : "GIS Menara Telekomunkasi";?></title>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Animate Css -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/animate-css/animate.css">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/fonts/Pe-icon-7-stroke.css">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/themify/css/themify-icons.css">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="<?=base_url();?>asset_users/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?=base_url();?>asset_users/css/style.css">

</head>


<body id="top-header">

<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->


<div class="logo-bar d-none d-md-block d-lg-block bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo d-none d-lg-block">
                    <!-- Brand -->
                        <h2>Pengajuan Izin Menara Telekomunikasi </h2>
                </div>
            </div>

            <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                        <i class="ti-mobile"></i>
                    </div>
                    <div class="info-block">
                        <h5 class="font-weight-500">(0721) 481544</h5>
                        <p>Telepon  </p>
                    </div>
                </div>


                <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                        <i class="ti-time"></i>
                    </div>
                    <div class="info-block">
                        <h5 class="font-weight-500">Senin - Jumat (07.00 - 16.00) </h5>
                        <p>Sabtu dan Minggu Libur</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- NAVBAR
================================================= -->
<div class="main-navigation" id="mainmenu-area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

            <a class="navbar-brand d-lg-none d-block" href="">
                <h4>SIPP</h4>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->


            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a href="<?= base_url();?>" class="nav-link js-scroll-trigger">
                            Home
                        </a>

                    </li>



                </ul>

                <ul class="ml-lg-auto list-unstyled m-0">
                    <li><a href="<?= base_url('auth/login');?>"  class="btn btn-white btn-circled">Login</a></li>
                </ul>
            </div> <!-- / .navbar-collapse -->



        </nav>
    </div> <!-- / .container -->
</div>





<!-- Modal -->
<div id="modal-login" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Silahkan Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form method="POST" action="http://localhost/sipp/Login/proses_login">
                <div class="modal-body">
                    <input type="text" name="nik" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="NIK Anda" size="16" maxlength="16">
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password Anda">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-circled btn-xs" >Login</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- End Modal -->

<!-- SECTIONS
  ================================================== -->

<section class="section" id="pricing">
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 text-center">
                <div class="section-heading">
                    <!-- Heading -->
                    <h2 class="section-title">
                        Tata Cara Mengajukan Permohonan
                    </h2>

                    <!-- Subheading -->
                    <p>
                        Silahkan ikuti step by step cara mengajukan permohonan
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>1. Registrasi </h3>

                    <ul class="price-features list-unstyled">
                        <li>Isi NIK </li>
                        <li>Isi Nama </li>
                        <li>Isi Alamat </li>
                        <li>Isi Jenis Kelamin </li>
                        <li>Isi Tanggal Lahir dll </li>

                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>2. Login Ke Sistem   </h3>

                    <ul class="price-features list-unstyled">
                        <li>Isi Username</li>
                        <li>Isi Password</li>
                        <li>Klik Submit</li>
                        <li>Masuk Ke Sistem</li>
                        <li>Logout</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>3. Lihat Syarat</h3>

                    <ul class="price-features list-unstyled">
                        <li>Klik Salah Satu Surat</li>
                        <li>Scan KTP</li>
                        <li>File Proposal</li>
                        <li>Scan KTM</li>
                        <li>Isi Form</li>
                    </ul>

                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>4. Pilih Permohonan <br> &nbsp; </h3>

                    <ul class="price-features list-unstyled">
                        <li>Isi Perihal dan Keperluan</li>
                        <li>Upload Scan KTP</li>
                        <li>Upload File Proposal</li>
                        <li>Upload Scan KTM</li>
                        <li>Upload Surat Pernyataan</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>5. Proses Permohonan  </h3>

                    <ul class="price-features list-unstyled">
                        <li>Lihat Status</li>
                        <li>Tunggu 3 Hari</li>
                        <li>Hingga Status Berubah </li>
                        <li>Status Menjadi Diterima</li>
                        <li>Masuk Ke Hasil</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="pricing-box">
                    <h3>6. Dapatkan Hasil <br> &nbsp; </h3>

                    <ul class="price-features list-unstyled">
                        <li>Buka Permohonan Anda</li>
                        <li>Cek Status</li>
                        <li>Jika Diterima </li>
                        <li>Download Hasil</li>
                        <li>Hasil Berupa Surat (Pdf)</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>








<footer class="section " id="footer">
    <div class="overlay footer-overlay"></div>
    <!--Content -->
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-6 col-sm-12">
                <div class="footer-widget">
                    <!-- Brand -->
                    <a href="#" class="footer-brand text-white">
                        SIPP BKBP
                    </a>
                    <p>Jl. Basuki Rahmat No.21, Gedong Pakuon, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35211.</p>
                </div>
            </div>



            <div class="col-lg-6 col-sm-6">
                <div class="footer-widget">
                    <h3>Kontak Kami</h3>
                    <!-- Links -->
                    <p>No Telp. (0721) 482201 (Call Center 1) <br>
                        No Telp. (0721) 481544 (Call Center 2) <br>
                        Email. sippbkpp@gmail.com <br>
                    </p>
                </div>
            </div>

        </div> <!-- / .row -->


        <div class="row text-right pt-5">
            <div class="col-lg-12">
                <!-- Copyright -->
                <p >
                    &copy; <span class="current-year">Badan Kesatuan Bangsa Dan Politik Provinsi Lampung || 2020</span> .
                </p>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</footer>


<!--  Page Scroll to Top  -->







<!-- Essential Scripts =====================================-->

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>

   


    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="<?=base_url();?>asset_users/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?=base_url();?>asset_users/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url();?>asset_users/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="<?=base_url();?>asset_users/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="<?=base_url();?>asset_users/js/jquery.easing.1.3.js"></script>
    <!-- Map Js -->
    <script src="<?=base_url();?>asset_users/plugins/google-map/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="<?=base_url();?>asset_users/js/form/contact.js"></script>
    <script src="<?=base_url();?>asset_users/js/theme.js"></script>

  </body>
  </html>
   