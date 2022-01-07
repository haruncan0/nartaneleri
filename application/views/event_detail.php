<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3><?php echo $event->event_name ?></h3>
            <ul class="page_breadcrumb">
                <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                <li><a href="<?php echo site_url('etkinliklerimiz') ?>">Etkinlikler</a></li>
                <li>Etkinlik Detayları</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->

<section class="event-page event-single pt-120">
    <div class="container">
        <div class="event-page-title">
            <h3 class=""><?php echo $event->event_name ?></h3>
        </div>
        <div class="single-post">
            <div class="event-page-image">
                <img src="<?php echo site_url($event->image_path) ?>" alt="<?php echo $event->event_name ?>" class="img-responsive">

            </div>
            <div class="event-page-text">
                <?php echo $event->description ?>
            </div>
        </div>
    </div>
</section>