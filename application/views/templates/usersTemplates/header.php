<!-- ambil dulu semua data yang diperlukan pada saat menampilkan header dan menu -->

<?php $subMenuWisata = $this->WisataModel->getAllWisata();
      $subMenuPaketWisata = $this->PaketWisataModel->getAllPaketWisata();   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SARUGO | Kabupaten Lima Puluh Kota</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/logo-bulat.png">


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
  <!--<link href="Web_Statis/assets/img/favicon.png" rel="icon">
  <link href="Web_Statis/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>Web_Statis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>Web_Statis/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>Web_Statis/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url()?>web_statis/assets/css/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url()?>Web_Statis/assets/css/font-awesome.min.css">

 
</head>
<body>
    <!-- ======= Header ======= -->
  <!-- headertop -->
  <header id="header" class="fixed-top " style="padding-top: 12px;">
    <div class="header_top">
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
    </div>
    <!-- end headertop -->
    <div class="container d-flex align-items-center" style="padding-left: 5px;">

      <nav class="logo"><a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/publik-sarugo.png" alt="logo" /></a></nav>
     
      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li class=""><a href="<?=base_url()?>">Beranda</a></li>

          <li class=""><a href="<?=base_url("#event")?>">Event</a></li>

          <li class="drop-down"><a href="<?=base_url("wisata")?>">Wisata</a>
            <ul>
            <?php foreach($subMenuWisata as $key => $sub) : ?>
              <li><a href="<?=base_url("wisata/detailwisata?id=$sub->id_wisata")?> "><?=$sub->nama_wisata?></a></li>
            <?php endforeach ?>
            </ul>
          </li>

          <li><a href="<?=base_url("product")?>">Produk</a></li>
          <li class="drop-down"><a href="<?=base_url("paket")?>" >Paket Wisata</a>
            <ul>
              <?php foreach ($subMenuPaketWisata as $key => $paketWisata) : ?>
                <li><a href="<?=base_url("paket/detailpaket?id_paket_wisata=$paketWisata->id_paket_wisata")?> "><?= $paketWisata->nama_paket_wisata ?> </a></li>
              <?php endforeach ?>
            </ul>
          </li>
          <li><a href="<?=base_url("Testimoni")?>">Testimoni</a></li>
          <li><a href="<?=base_url("berita")?> ">Berita</a></li>

          <?php foreach ($menu as $key => $sebuahMenu) : ?>
                <?php $hasChild = false ; $dataSubMenu=[]; ?>

            <?php if($sebuahMenu->status_menu>0) : ?>  <!-- check for status active or not -->
              <?php foreach ($subMenu as $key => $sebuahSubMenu) : ?>
                    <?php if($sebuahSubMenu->id_menu==$sebuahMenu->id){
                      $hasChild =true;
                      array_push($dataSubMenu,$sebuahSubMenu);
                    } ?>
              <?php endforeach ?>
                  
                  <!-- if it has child then use this template -->
                  <?php if($hasChild) : ?>
                    
                    <li class="drop-down">
                      <a >
                          <?= $sebuahMenu->nama_menu?>
                        </a>
                      <ul>

                        <?php foreach ($dataSubMenu as $key => $sebuahDataSubMenu) :?>
                            <li><a href="<?=base_url("menu?judul_hal_statis=$sebuahDataSubMenu->hal_statis&&?id=$sebuahDataSubMenu->id")?> "><?= $sebuahDataSubMenu->nama_sub_menu ?></a></li>
                         <?php endforeach ?>
                      </ul>

                    </li>

                  <?php else : ?>
                      <li>
                        <a href="<?=base_url("menu?judul_hal_statis=$sebuahMenu->link_hal_statis&&?id=$sebuahMenu->id")?> "><?= $sebuahMenu->nama_menu?></a>
                      </li> 
                  <?php endif ?>

            <?php endif ?> <!-- end of check status -->

          <?php endforeach ?>

        </ul>

      </nav>
      <br><br><!-- .nav-menu -->

    </div>
  </header> <br><br>

  <!-- End Header -->

  <script>
  
  
  
  </script>
