<?php if (!empty($slider)) { ?>
<section class="banner">
    <div class="banner-slider swiper-container">
        <div class="swiper-wrapper">

            <?php foreach ($slider as $key => $value) { ?>
            <div class="banner-item slide-one swiper-slide"
                style="background-image: url(<?php echo site_url($value->image_path) ?>)">
                <div class="banner-overlay"></div>
                <div class="container">
                    <div class="banner-content">
                        <h2><?php echo $value->text1 ?></h2>
                        <h3><?php echo $value->text2 ?></h3>
                        <p><?php echo $value->text3 ?></p>
                    </div><!-- banner-content -->
                </div><!-- container -->
            </div><!-- slide item -->
            <?php } ?>

        </div><!-- swiper-wrapper -->
        <div class="swiper-pagination"></div>
    </div><!-- swiper-container -->
</section><!-- banner -->
<?php } ?>

<?php if (!empty($facility)) { ?>


<!-- facility Start here -->
<section class="facility">
    <div class="container">
        <div class="facility-items">
            <div class="facility-item">
                <div class="front-part">
                    <img src="<?php echo site_url($facility->image_path1) ?>">
                    <h4><?php echo $facility->title1 ?></h4>
                </div>
                <div class="back-part">
                    <img src="<?php echo site_url($facility->image_path1) ?>">
                    <h4><?php echo $facility->title1 ?></h4>
                    <p><?php echo $facility->text1 ?></p>
                </div>
            </div><!-- facility item -->
            <div class="facility-item">
                <div class="front-part">
                    <img src="<?php echo site_url($facility->image_path2) ?>">
                    <h4><?php echo $facility->title2 ?></h4>
                </div>
                <div class="back-part">
                    <img src="<?php echo site_url($facility->image_path2) ?>">
                    <h4><?php echo $facility->title2 ?></h4>
                    <p><?php echo $facility->text2 ?></p>
                </div>
            </div><!-- facility item -->
            <div class="facility-item">
                <div class="front-part">
                    <img src="<?php echo site_url($facility->image_path3) ?>">
                    <h4><?php echo $facility->title3 ?></h4>
                </div>
                <div class="back-part">
                    <img src="<?php echo site_url($facility->image_path3) ?>">
                    <h4><?php echo $facility->title3 ?></h4>
                    <p><?php echo $facility->text3 ?></p>
                </div>
            </div><!-- facility item -->
            <div class="facility-item">
                <div class="front-part">
                    <img src="<?php echo site_url($facility->image_path4) ?>">
                    <h4><?php echo $facility->title4 ?></h4>
                </div>
                <div class="back-part">
                    <img src="<?php echo site_url($facility->image_path4) ?>">
                    <h4><?php echo $facility->title4 ?></h4>
                    <p><?php echo $facility->text4 ?></p>
                </div>
            </div><!-- facility item -->
        </div><!-- facility items -->
    </div><!-- container -->
</section><!-- facility -->
<!-- facility End here -->

<?php } ?>


<!-- About Start here -->
<section class="about padding-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="<?php echo site_url($homepage->a_image) ?>" alt="about image" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h3><?php echo $homepage->a_title ?></h3>
                    <p><?php echo $homepage->a_text ?></p>
                    <a href="<?php echo site_url('hakkimizda') ?>"
                        class="button-default"><?php echo $homepage->a_button ?></a>
                </div><!-- about content -->
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section><!-- about -->
<!-- About End here -->

<?php if (!empty($gallery)) { ?>

<!-- Gallery Start here -->
<section class="gallery nt-global">
    <div class="overlay padding-120">
        <div class="section-header bg">
            <h3><?php echo $homepage->g_title ?></h3>
            <p><?php echo $homepage->g_text ?></p>
        </div>
        <div class="gallery-slider swiper-container">
            <div class="swiper-wrapper">
            <?php foreach ($gallery as $key => $value) { ?>
                    
                <div class="gallery-item gl-item-hover swiper-slide">
                    <div class="nt-slider-image">
                        <img src="<?php echo site_url($value->image_path) ?>" alt="image" class="img-responsive">
                        <div class="slider-content">
                            <a class="my-gallery"
                                data-thumb="<?php echo site_url($value->image_path) ?>"
                                href="<?php echo site_url($value->image_path) ?>"
                                data-fancybox="gallery"><i class="icon flaticon-expand"></i></a>
                        </div>
                    </div>
                </div>

            <?php } ?>
                
                
            </div>
            <!-- gallery item -->
        </div><!-- gallery items -->
        <div class="nt-global-button"><a href="<?php echo site_url('galeri') ?>"
                class="button-default"><?php echo $homepage->g_button ?></a></div>
    </div><!-- overlay -->
</section><!-- gallery -->
<!-- Gallery End here -->

<?php } ?>

<?php if(!empty($class)) { ?>

<!-- Classes Start here -->
<section class="classes padding-120">
    <div class="container">
        <div class="section-header">
            <h3><?php echo $homepage->c_title ?></h3>
            <p><?php echo $homepage->c_text ?></p>
        </div>
        <div class="row">
        <?php foreach ($class as $key => $value) { ?>
                
            <div class="col-lg-4 col-sm-6 col-xs-12">
                <div class="class-item">
                    <div class="image">
                        <img src="<?php echo site_url($value->image_path) ?>" alt="<?php echo $value->name ?>"
                            class="img-responsive">
                    </div>
                    <ul class="schedule">
                        <li>
                            <span>Öğrenci Sayısı</span>
                            <span><?php echo $value->student ?></span>
                        </li>
                        <li>
                            <span>Yaş Aralığı</span>
                            <span><?php echo $value->age_range ?></span>
                        </li>
                        <li>
                            <span>Öğrenim Ücreti</span>
                            <span><?php echo $value->price ?></span>
                        </li>
                    </ul>
                    <div class="content">
                        <h4><a style="color: <?php echo $value->color ?>;" href="<?php echo site_url('sinif-detaylari/'.$value->slug) ?>"><?php echo $value->name ?></a></h4>
                        <p><span style="color: <?php echo $value->color; ?>;">Ders Saati: </span><?php echo $value->lesson_hours ?></p>
                    </div>
                </div><!-- class item -->
            </div>

        <?php } ?>
            
        </div><!-- row -->
        <div class="class-button">
            <a href="<?php echo site_url('siniflarimiz') ?>"
                class="button-default"><?php echo $homepage->c_button ?></a>
        </div>
    </div><!-- container -->
</section><!-- classes -->
<!-- Classes End here -->

<?php } ?>

<?php if(!empty($teacher)) { ?>
<!-- Teachers Start here -->
<section class="teachers ">
    <div class="overlay padding-120">
        <div class="container">
            <div class="section-header bg">
                <h3><?php echo $homepage->t_title ?></h3>
                <p><?php echo $homepage->t_text ?></p>
            </div>
            <div class="teacher-items">
                <div class="teacher-slider swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach ($teacher as $key => $value) { ?>

                        <div class="teacher-item swiper-slide">
                            <div class="teacher-image">
                                <img src="<?php echo site_url($value->image_path) ?>"
                                    alt="<?php echo $value->name ?>" class="img-responsive">
                            </div>
                            <div class="teacher-content">
                                <h4><a href="<?php echo site_url('ogretmen-bilgileri') ?>"><?php echo $value->name ?></a></h4>
                                <span><?php echo $value->profession ?></span>
                            </div>
                        </div><!-- teacher-item -->

                    <?php } ?>
                                                
                    </div><!-- swiper-wrapper -->
                </div><!-- swiper-container -->
            </div><!-- partner-items -->
            <div class="teachers-button">
                <a class="button-default"
                    href="<?php echo site_url('ogretmenlerimiz') ?>"><?php echo $homepage->t_button ?></a>
            </div>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- teacher -->
<!-- Teachers End here -->
<?php } ?>

<?php if(!empty($event)) { ?>
<section class="dx-event nt-global g-br">
    <div class="overlay padding-120">
        <div class="section-header">
            <h3><?php echo $homepage->e_title ?></h3>
            <p><?php echo $homepage->e_text ?></p>
        </div>
            
            <div class="container">
                <div class="row">
                    <?php foreach ($event as $key => $value) { ?>
                        
                <div class="col-lg-4 col-sm-6 col-xs-12">
                    <div class="event-item">
                        <div class="event-image">
                            <a href="<?php echo site_url($value->image_path) ?>" data-fancybox="event"><img src="<?php echo site_url($value->image_path) ?>" alt="<?php echo $value->event_name ?>" class="img-responsive"></a>
                        </div>
                        <div class="event-content">
                            <h4 style="color: <?php echo $value->color ?>;"><?php echo $value->event_name ?></h4>
                            <div class="event_desc">
                                <?php echo $value->description ?>
                            </div>
                            <a style="background-color: <?php echo $value->color ?>;" href="<?php echo site_url("etkinlik-detaylari/".$value->slug) ?>" class="event_button">İncele</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            </div>
        <div class="nt-global-button"><a href="<?php echo site_url('etkinliklerimiz') ?>"
                class="button-default"><?php echo $homepage->e_button ?></a></div>
    </div>
</section>
<?php } ?>
