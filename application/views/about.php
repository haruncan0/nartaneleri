<!-- Page Header Start here -->
<section class="page-header section-notch">
  <div class="overlay">
    <div class="container">
      <h3><?php echo $banner ?></h3>
      <ul class="page_breadcrumb">
        <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
        <li>Hakkımızda</li>
      </ul>
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<?php if (!empty($facility)) { ?>

<!-- facility Start here -->
<section class="facility padding-120">
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
  <section class="about section-notch">
    <div class="overlay padding-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="about-content">
              <h3 class="clr-fff"><?php echo $about->about_title ?></h3>
              <p class="clr-fff"><?php echo $about->about_text ?></p>
            </div><!-- about content -->
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- overlay -->
  </section><!-- about -->
  <!-- About End here -->


<!-- Features Start here -->
<section class="features padding-120 g-br">
    <div class="container">
        <div class="section-header">
            <h3><?php echo $about->why_title ?></h3>
            <p><?php echo $about->why_text ?></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="features-left">
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[0]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[0]->title ?></h4>
                            <p><?php echo $preference[0]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[2]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[2]->title ?></h4>
                            <p><?php echo $preference[2]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[4]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[4]->title ?></h4>
                            <p><?php echo $preference[4]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                </div><!-- feature left -->
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="feature-image">
                    <img src="<?php echo site_url('assets/images/feature.jpg') ?>" alt="feature image" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="features-right">
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[1]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[1]->title ?></h4>
                            <p><?php echo $preference[1]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[3]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[3]->title ?></h4>
                            <p><?php echo $preference[3]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                    <div class="feature-item">
                        <div class="feature_image">
                            <img src="<?php echo $preference[5]->image_path ?>">
                        </div>
                        <div class="content">
                            <h4><?php echo $preference[5]->title ?></h4>
                            <p><?php echo $preference[5]->text ?></p>
                        </div>
                    </div><!-- feature item -->
                </div><!-- feature left -->
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section><!-- features -->
<!-- Features End here -->

  <!-- Testimonial Start here 
   <section class="testimonial padding-120 ">
    <div class="container">
      <div class="section-header">
        <h3><?php echo $about->comment_title ?></h3>
        <p><?php echo $about->comment_text ?></p>
      </div>
      <div class="testimonial-items">
        <div class="testimonial-slider swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_01.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_01.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_02.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_02.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_03.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_03.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_01.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_01.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_02.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_02.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>
            <div class="testimonial-item swiper-slide">
              <div class="testimonial-details">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi est quisquam laborum debitis delectus adipisci saepe non voluptate?</p>
                <h4>Joly Smith <span>ui/ux Designer</span></h4>
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_icon_03.jpg') ?>" alt="testimonial icon" class="img-responsive">
              </div>
              <div class="testimonial-image">
                <img src="<?php echo site_url('assets/images/testimonial/testimonial_03.jpg') ?>" alt="client image" class="img-responsive">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  -->