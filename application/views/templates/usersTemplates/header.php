<!-- ambil dulu semua data yang diperlukan pada saat menampilkan header dan menu -->

<?php $subMenuWisata = $this->WisataModel->getAllWisata();
      $subMenuPaketWisata = $this->PaketWisataModel->getAllPaketWisata();   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GOODANG | Your Product Inventory Solution</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/Logo2.png">


  <!-- Menyisipkan library Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>

  <script>
      // fungsi initialize untuk mempersiapkan peta
      function initialize() {
      var propertiPeta = {
          center:new google.maps.LatLng(-0.0222384,100.3494011),
          zoom:17,
          mapTypeId:google.maps.MapTypeId.ROADMAP
      };
      
      var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
      }

      // event jendela di-load  
      google.maps.event.addDomListener(window, 'load', initialize);
  </script>
  <!-- end maps -->


  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- rating -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Favicons -->
  <!--<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">

 
</head>
<body>
    <!-- ======= Header ======= -->
  <!-- headertop -->
  <header id="header" class="fixed-top " style="padding-top: 12px;">
    <!-- <div class="header_top">
      <div id="topheader" class="container">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-8">
            <div class="full">
              <div class="topbar-left">
                <ul class="list-inline">
                  <li>  <span class="topbar-hightlight">Website Resmi Kampung Wisata Saribu Gonjong</span> </li>
                </ul>
              </div>
            </div>
          </div>
          <div style="padding-left: 25%;">
            <div class="topbar-right">
              <div class="social_icon">
                <ul class="list-inline">
                  <div class="social-links mt-3">
                    <a href="https://www.facebook.com/kampung.wisata.sarugo" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://wa.me/6282285046121" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="https://www.instagram.com/kampung.wisata.sarugo/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div> -->
    <!-- end headertop -->
    <div class="container d-flex align-items-center" style="padding-left: 5px;">

      <nav class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/GOODANG.png" alt="logo" /></a></nav>
     
      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class="drop-down"><a href="<?=base_url("wisata")?>">Kategori</a>
            <ul>
            <?php foreach($subMenuWisata as $key => $sub) : ?>
              <li><a href="<?=base_url("wisata/detailwisata?id=$sub->id_wisata")?> "><?=$sub->nama_wisata?></a></li>
            <?php endforeach ?>
            </ul>
          </li>

          <li><a href="<?=base_url("product")?>">Produk</a></li>
           
          <li class="" style="margin-left:700px"><a href="<?=base_url("admin")?>">Masuk</a>
           
          </li>
        </ul>

      </nav>
      <br><br><!-- .nav-menu -->

    </div>
  </header> <br><br>

  <!-- End Header -->

  <script>
  
  
  
  </script>
