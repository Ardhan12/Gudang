<?php
$userData;
// var_dump($this->session->userdata);die();
// check admin
if (isset($this->session->spradmin)) {
    $userData = $this->session->spradmin;
} else if (!isset($this->session->admin)) {
    redirect(base_url("admin"));
} else {
    $userData = $this->session->admin;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/logo-bulat.png">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Title Page-->
    <title>SARUGO | Kabupaten Lima Puluh Kota</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url() ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url() ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url() ?>assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body class="animation">
    <div class="page-wrapper">
                <!-- HEADER MOBILE-->
                <header class="header-mobile d-block d-lg-none">
                    <div class="header-mobile__bar">
                        <div class="container-fluid">
                            <div class="header-mobile-inner">
                                <a class="logo" href="home_page">
                            <img style="width: 150px; position:left;" src="<?= base_url() ?>assets/images/publik-sarugo.png" alt="CoolAdmin" />
                        </a>
                                <button class="hamburger hamburger--slider" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <nav class="navbar-mobile">
                            <div class="container-fluid">
                                <?php if (isset($this->session->spradmin)) : ?>
                                    <ul class="navbar-mobile__list list-unstyled">
                                        <li>
                                            <a class="js-arrow" href="<?= base_url("spradm_sarugo/home_page") ?>">
                                                <i class="fas fa-home"></i>Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url("spradm_sarugo/akun_create") ?>">
                                                <i class="fas fa-group"></i>Data Akun Admin</a>
                                        </li>
                                    </ul>
                                <?php else : ?>

                                    <ul class="navbar-mobile__list list-unstyled">
                                        <li>
                                            <a class="js-arrow" href="<?= base_url("admin/home") ?>">
                                                <i class="fas fa-home"></i>Home
                                            </a>
                                        </li>
                                        <?php if (isset($this->session->admin->hal_statis) && $this->session->admin->hal_statis) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/statis") ?>">
                                                    <i class="fas fa-chart-bar"></i>Halaman Statis</a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->event) && $this->session->admin->event) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/event") ?>">
                                                    <i class="fas fa-calendar"></i>Event</a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->menu) && $this->session->admin->menu) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/menu") ?>">
                                                    <i class="fas fa-bars"></i>Menu</a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->sub_menu) && $this->session->admin->sub_menu) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/submenu") ?>">
                                                    <i class="fas fa-indent"></i>Sub Menu
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->banner) && $this->session->admin->banner) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/banner") ?>">
                                                    <i class="fas fa-picture-o"></i>Banner/Slider
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->wisata) && $this->session->admin->wisata) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/wisata") ?>">
                                                    <i class="fas fa-location-arrow"></i>Wisata
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->produk) && $this->session->admin->produk) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/produk") ?>">
                                                    <i class="fas fa-tag"></i>Produk
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->paket_wisata) && $this->session->admin->paket_wisata) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/paketwisata") ?>">
                                                    <i class="fas fa-bookmark"></i>Paket Wisata
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (isset($this->session->admin->testimoni) && $this->session->admin->testimoni) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/testimoni") ?>">
                                                    <i class="fas fa-comment"></i>Testimoni
                                                </a>
                                            </li>
                                        <?php endif ?>
                                        <?php if (!isset($this->session->admin->berita) || $this->session->admin->berita) : ?>
                                            <li>
                                                <a href="<?= base_url("admin/berita") ?>">
                                                    <i class="fas fa-desktop"></i>Berita
                                                </a>
                                            </li>
                                        <?php endif ?>
                                    </ul>
                                <?php endif ?>
                            </div>
                        </nav>
                    </div>
                </header>
                <!-- END HEADER MOBILE-->

                <!-- PAGE CONTAINER-->
                <div class="page-container">
                    <!-- HEADER DESKTOP-->
                    <header class="header-desktop">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                                <div class="header-wrap">
                                    <h5>WEBSITE RESMI KAMPUNG WISATA SARIBU GONJONG</h5>
                                    <div class="header-button">
                                        <div class="account-wrap">
                                            <div class="account-item clearfix js-item-menu">
                                                <div class="content">
                                                    <a class="js-acc-btn" href="#"><?= $userData->username_admin ?></a>
                                                </div>
                                                <div class="account-dropdown js-dropdown">
                                                    <div class="info clearfix">
                                                        <div class="content">
                                                            <h5 class="name">
                                                                <a href="#"><?= $userData->username_admin ?></a>
                                                            </h5>
                                                            <span class="email"><?= $userData->email_admin ?></span>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>-->
                                                    <div class="account-dropdown__footer">
                                                        <a href="<?= base_url("admin/login/logout") ?>">
                                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                    </header>
       
                                
                    <!-- HEADER DESKTOP-->
                    