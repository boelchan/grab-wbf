<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 3.3.4
Version: 1.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Frontend (Header Fixed)</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url() ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url() ?>/assets/pages/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url() ?>/assets/pages/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/pages/css/slider.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/corporate/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url() ?>/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-envelope-o"></i><span>afryanus01@gmail.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                      <?php if ($this->session->userdata('logged_in')) { ?>
                        <li><a href=" <?php echo site_url('grab') ?>">Admin</a></li>
                        <li><a href=" <?php echo site_url('auth/logout') ?>">Log Out</a></li>
                        
                      <?php } else { ?>
                        <li><a href=" <?php echo site_url('auth') ?>">Log In</a></li>
                      <?php } ?>
                      
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/corporate/img/logos/pbsi_01.jpg" alt="PBSI" height="50px" width="50px"> 
          ATLIT TUNGGAL PUTRA | PERSATUAN BULUTANGKIS SELURUH INDONESIA
        </a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <!--<div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Home 
                
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="index.html">Home Default</a></li>
                <li class="active"><a href="index-header-fix.html">Home with Header Fixed</a></li>
                <li><a href="index-without-topbar.html">Home without Top Bar</a></li>
              </ul>
            </li>

          </ul>
        </div>-->
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->


    <div class="main">
      <div class="container">

        <!-- BEGIN RECENT WORKS -->
        <?php echo $content ?>
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
               
        <!-- END TABS AND TESTIMONIALS -->


      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-6 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Monitoring turnament bulutangkis atlit tunggal putra PBSI dengan memanfaatkan <br><i>web crawler</i> menggunakan teknik <i>grabbing</i></p>

          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-6 col-sm-6">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              KH. Agussalim 5 No. 19
              Pamekasan, Madura<br>
              <i class="fa fa-phone"> </i> 087750428080 | 
              <i class="fa fa-envelope-o"> </i> <a href="mailto:afryanus01@gmail.com">afryanus01@gmail.com</a><br>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->

        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-8 col-sm-8 padding-top-10">
            2016 © Afryan Uswatus Shaleh
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
            <p class="powered">Powered by: <a href="#">KeenThemes</a></p>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?php echo base_url() ?>/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url() ?>/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?php echo base_url() ?>/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <script src="<?php echo base_url() ?>/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
            Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>