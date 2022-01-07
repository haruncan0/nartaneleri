<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3><?php echo $banner ?></h3>
            <ul class="page_breadcrumb">
                <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                <li>Galeri</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->

<?php if (!empty($group) && !empty($gallery)) { ?>

<!-- Gallery Start here -->
<section class="gallery pt-120 bg-white">
    <div class="container">
        <ul class="gallery-menu">
            <li class="active" data-filter="*">Tüm Resimler</li>

        <?php foreach ($group as $key => $value) { ?>        
            <li data-filter=".default<?php echo $value->id ?>"><?php echo $value->name ?></li>
        <?php } ?>

        </ul>

        <div class="gallery-items gallery-page nt-global">

        <?php foreach ($gallery as $key => $value) { ?>
            
            <div class="gl-item-hover gallery-item default<?php echo $value->gg_id ?> ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url($value->image_path) ?>" alt="image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="default<?php echo $value->gg_id ?>" href="<?php echo site_url($value->image_path) ?>"
                            data-thumb="<?php echo site_url($value->image_path) ?>"><i class="icon flaticon-expand"></i></a>
                    </div>
                </div>
            </div><!-- gallery item -->


        <?php } ?>


            <!-- <div class="gl-item-hover gallery-item development photography">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_02.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_02.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_02.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item branding packing ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_03.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_03.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_03.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item development photography">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item branding packing ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item branding packing ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item development photography">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_04.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item branding packing ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_05.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div>
            <div class="gl-item-hover gallery-item branding packing ">
                <div class="nt-slider-image">
                    <img src="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>" alt="gallery image" class="img-responsive">

                    <div class="slider-content">
                        <a class="my-gallery" data-fancybox="gallery" href="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>"
                            data-thumb="<?php echo site_url('assets/images/gallery/gallery_06.jpg') ?>"><i class="icon flaticon-expand"></i></a>

                    </div>
                </div>
            </div> -->

        </div><!-- gallery items -->
    </div><!-- container -->
</section><!-- gallery -->
<!-- Gallery End here -->

<?php } ?>