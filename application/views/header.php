<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nar Taneleri</title>

    <link href="<?php echo site_url('assets/images/favicon.png') ?>" rel="shortcut icon"
        type="image/vnd.microsoft.icon">

    <link href="<?php echo site_url('assets/front/css/font.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/all.min.css') ?>" rel="stylesheet">

    <?php if(current_url() == site_url('iletisim')) { ?>
        <link href="<?php echo site_url('assets/front/css/toastr.css') ?>" rel="stylesheet">
        <link href="<?php echo site_url('assets/front/css/slick.css') ?>" rel="stylesheet">
    <?php } ?>

    <link href="<?php echo site_url('assets/front/flaticon/flaticon.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/fancybox.min.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/swiper.min.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/jquery.nstSlider.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/flexslider.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/rtl.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/main.css?v='.md5(date('Y-m-d H:i:s'))) ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/front/css/responsive.css') ?>" rel="stylesheet">

</head>

<body id="scroll-top">

    <!-- Preloader start here -->

    <!-- <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div> -->

    <!-- Preloader end here -->

    <!-- mobile menu start here -->
    <div class="mobile-menu-area">
        <div class="logo-area">
            <a class="logo" href="<?php echo site_url() ?>"></a>
            <button type="button" class="navbar-toggle collapsed d-lg-none" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="mobile-menu">
            <ul class="m-menu">
                <li>
                    <a href="<?php echo site_url() ?>">Anasayfa</a>
                </li>
                <li>
                    <a href="<?php echo site_url('hakkimizda') ?>">Hakkımızda</a>
                </li>
                <li>
                    <a href="<?php echo site_url('siniflarimiz') ?>">Sınıflar</a>
                </li>
                <li>
                    <a href="<?php echo site_url('siniflarimiz') ?>">Etkinliklerimiz</a>
                </li>
                <li>
                    <a href="<?php echo site_url('siniflarimiz') ?>">Öğretmenlerimiz</a>
                </li>
                <li>
                    <a href="<?php echo site_url('siniflarimiz') ?>">Galeri</a>
                </li>
                <li>
                    <a href="<?php echo site_url('siniflarimiz') ?>">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- mobile menu ending here -->

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="logo" href="<?php echo site_url() ?>"><img
                                src="<?php echo site_url('assets/images/logo.png') ?>" alt="logo"
                                class="img-responsive"></a>
                    </div>
                    <div class="col-md-9">
                        <ul class="top-contents">
                            <li>
                                <i class="icon flaticon-phone-call"></i>
                                <div class="content">
                                    <p>İletişim Numarası</p>
                                    <a href="tel:<?php echo $contact->phone1 ?>"><?php echo $contact->phone1 ?></a>
                                </div>
                            </li>
                            <li>
                                <i class="icon flaticon-alarm-clock"></i>
                                <div class="content">
                                    <p>Açılış zamanı</p>
                                    <span><?php echo empty($contact->start_time) ? "" : $contact->start_time ?></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- row -->
            </div><!-- container -->
        </div><!-- header top -->


        <div class="main-menu">
            <div class="container">
                <div class="row no-gutters">
                    <nav class="main-menu-area w-100">
                        <div class="logo-area d-lg-none">
                            <a class="" href="<?php echo site_url() ?>"><img
                                    src="<?php echo site_url('assets/images/logo.png') ?>" alt="logo"
                                    class="img-responsive"></a>
                            <button type="button" class="navbar-toggle collapsed d-lg-none" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="menu-area">
                            <ul class="menu">
                                <li>
                                    <a href="<?php echo site_url() ?>">Anasayfa</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('hakkimizda') ?>">Hakkımızda</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('siniflarimiz') ?>">Sınıflar</a>
                                </li>
                                <li><a href="<?php echo site_url('etkinliklerimiz') ?>">Etkinliklerimiz</a></li>
                                <li>
                                    <a href="<?php echo site_url('ogretmenlerimiz') ?>">Öğretmenlerimiz</a>
                                </li>
                                <li><a href="<?php echo site_url('galeri') ?>">Galeri</a></li>
                                <li><a href="<?php echo site_url('iletisim') ?>">İletişim</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="nar-taneleri-back"></div>
