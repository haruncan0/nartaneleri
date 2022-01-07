<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Yönetim Paneli">
    <meta name="keywords" content="Yönetim Paneli">
    <meta name="author" content="VERİWEB">
    <title>Veriweb Panel</title>
    <?php echo fav_and_app_icons(); ?>
    <?php //echo fav_and_app_icons();?>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/vendors.min.css'); ?> ">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/bootstrap.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/bootstrap-extended.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/colors.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/components.css'); ?> ">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/menu/menu-types/vertical-menu.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/colors/palette-gradient.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/cryptocoins/cryptocoins.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/charts/apexcharts.css'); ?> ">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/extensions/toastr.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/plugins/extensions/toastr.css')?> ">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/editors/summernote.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/editors/theme/monokai.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/file-uploaders/dropzone.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/plugins/file-uploaders/dropzone.css?v=' . md5(date('Y-m-d : H-i-s'))); ?>">
    <!-- BEGIN: datatables-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/tables/datatable/datatables.min.css'); ?>">
    <!-- END: Page CSS-->


    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/assets/css/style.css?v=' . md5(date('Y-m-d : H-i-s'))); ?>">
    <!-- END: Custom CSS-->

    <!-- COLOR -->

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/jquery.minicolors.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/spectrum.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/colorpicker.css') ?>">

    <!-- BEGIN: switch CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/forms/toggle/switchery.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/plugins/forms/switch.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/fonts/simple-line-icons/style.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/colors/palette-switch.css'); ?>">
    <!-- END: switch CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/jconfirm/jConfirm.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/plugins/animate/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/css/core/colors/palette-callout.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/back/app-assets/vendors/css/extensions/zoom.css'); ?>">


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="<?php echo site_url('yonetim-paneli')?>"><img class="brand-logo" alt="modern admin logo" src=" <?php echo site_url('/assets/back/image/logo.png')?> ">
                        <h3 class="brand-text">Veriweb Panel</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700"><?php echo $this->session->userdata('admin_info')->name_surname; ?></span>
                            <span class="avatar avatar-online">
                                    <img src=" <?php echo site_url($this->session->userdata('admin_info')->profil_photo); ?> " alt="avatar"><i></i>
                                </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?php echo site_url('yonetim-paneli/profil-duzenle');?>"><i class="ft-user"></i> Profili Düzenle</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo site_url('yonetim-paneli/cikis');?>"><i class="ft-power"></i> Çıkış Yap</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" <?php echo $active == "home_page" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli'); ?>"><i class="la la-home"></i><span class="menu-title">Anasayfa</span></a>
            </li>
            <li class="<?php echo $active == "slider" ? "active" : ""; ?> nav-item"><a href="#"><i class="la la-play-circle-o"></i><span class="menu-title">Slider</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/slider-ekle'); ?>"><i></i><span>Ekle</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/slider-listele'); ?>"><i></i><span>Listele</span></a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $active == "teacher" ? "active" : ""; ?> nav-item"><a href="#"><i class="la la-play-circle-o"></i><span class="menu-title">Öğretmenler</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/ogretmen-ekle'); ?>"><i></i><span>Ekle</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/ogretmenleri-listele'); ?>"><i></i><span>Listele</span></a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $active == "gallery" ? "active" : ""; ?> nav-item"><a href="#"><i class="la la-play-circle-o"></i><span class="menu-title">Galeri</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/galeri-ekle'); ?>"><i></i><span>Ekle</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/galeri-listele'); ?>"><i></i><span>Listele</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/galeri-gruplar') ?>">Gruplar</a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $active == "event" ? "active" : ""; ?> nav-item"><a href="#"><i class="la la-play-circle-o"></i><span class="menu-title">Etkinlik</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/etkinlik-ekle'); ?>"><i></i><span>Ekle</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/etkinlikleri-listele'); ?>"><i></i><span>Listele</span></a>
                    </li>
                </ul>
            </li>

            <li class="<?php echo $active == "class" ? "active" : ""; ?> nav-item"><a href="#"><i class="la la-play-circle-o"></i><span class="menu-title">Sınıflar</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/sinif-ekle'); ?>"><i></i><span>Ekle</span></a>
                    </li>
                    <li>
                        <a class="menu-item" href="<?php echo site_url('yonetim-paneli/siniflari-listele'); ?>"><i></i><span>Listele</span></a>
                    </li>
                </ul>
            </li>

            <li class=" <?php echo $active == "contract" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/aydinlatma-metni'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Aydınlatma Metni</span></a>
            </li>

            <li class=" <?php echo $active == "about" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/hakkimizda'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Hakkımızda</span></a>
            </li>


            <li class=" <?php echo $active == "banner" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/banner'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Banner</span></a>
            </li>



            <li class=" <?php echo $active == "preference" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/neden-biz'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Neden Biz</span></a>
            </li>

            <li class=" <?php echo $active == "facility" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/yeteneklerimiz'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Yeteneklerimiz</span></a>
            </li>

            <li class=" <?php echo $active == "messages" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/mesajlar'); ?>"><i class="la la-comment-o"></i><span class="menu-title">Mesajlar</span></a>
            </li>
            <li class=" <?php echo $active == "contact" ? "active" : ""; ?> nav-item"><a href="<?php echo site_url('yonetim-paneli/iletisim'); ?>"><i class="la la-fax"></i><span class="menu-title">İletişim Bilgileri</span></a>
            </li>
        </ul>
    </div>
</div>