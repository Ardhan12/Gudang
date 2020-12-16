<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/sarugo-logo-mob.png">


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

    <!-- Main CSS-->
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition" >
    <div class="page-wrapper" style="padding-bottom: 0px; ";>
        <div class="page-content--bge5" style="background-image: url('assets/images/6.png')">
            <div class="container">
                <div class="login-wrap" style="padding-top: 100px;">
                    <?php

                    if ($this->session->flashdata('message_name')) {
                        $message = $this->session->flashdata('message_name');
                    ?>
                        <div class="alert alert-danger"><?php echo $message; ?>

                        </div>
                    <?php
                    }
                    ?>
                    
                    <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="<?= base_url() ?>assets/images/sarugo-logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                        <div class="login-form">
                            <form action="<?= base_url("admin/login/signin") ?>" method="post" class="text-center">
                                <div class="form-group">
                                   <!-- <label>Username</label> -->
                                   <i class="fas fa-user mr-2"></i>
                                    <input required class="au-input au-input" type="text" name="username" placeholder="Admin">
                                </div>
                                <div class="form-group">
                                   <!-- <label>Password</label> -->
                                   <i class="fas fa-lock mr-2"></i>
                                    <input required class="au-input au-input" type="password" name="password" placeholder="***">
                                </div>

                                <button class="au-btn  au-btn--green m-b-20" type="submit">sign in</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url() ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>