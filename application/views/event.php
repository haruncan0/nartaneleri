<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3><?php echo $banner ?></h3>
            <ul class="page_breadcrumb">
                <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                <li>Etkinliklerimiz</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->

<?php if(!empty($event)) { ?>

<!-- Event Start here -->
<section class="event event-two pt-120">
    <div class="container">
        <div class="event-items">
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
                
            </div><!-- row -->
        </div><!-- event items -->
    </div><!-- container -->
</section><!-- event blog -->
<!-- event End here -->
<?php } ?>