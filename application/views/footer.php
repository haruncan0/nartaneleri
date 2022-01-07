  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="footer-item text-left">
              <div class="title"><a class="logo" href="<?php echo site_url() ?>"><img src="<?php echo site_url('assets/images/logo.png') ?>" alt="logo" class="img-responsive"></a></div>
              <div class="footer-about">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus numquam, praesentium perferendis quisquam nulla illo aliquid atque autem? Facilis, doloribus?</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="footer-item">
              <div class="footer-center-item">
                <h3>Kurumsal</h3>
                <ul class="ft-hover-border">
                  <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                  <li><a href="<?php echo site_url('hakkimizda') ?>">Hakkımızda</a></li>
                  <li><a href="<?php echo site_url('siniflarimiz') ?>">Sınıflar</a></li>
                  <li><a href="<?php echo site_url('etkinliklerimiz') ?>">Etkinliklerimiz</a></li>
                  <li><a href="<?php echo site_url('ogretmenlerimiz') ?>">Öğretmenlerimiz</a></li>
                  <li><a href="<?php echo site_url('galeri') ?>">Galeri</a></li>
                  <li><a href="<?php echo site_url('iletisim') ?>">İletişim</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="footer-item">
              <div class="footer-center-item">
                <div class="footer-about">
                  <h3>Bize Ulaşın</h3>
                  <ul>
                    <li><a target="_blank" href="#"><span><i class="fa fa-home" aria-hidden="true"></i></span><?php echo empty($contact->address) ? "" : $contact->address ?></a></li>
                    <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><div><a href="tel:<?php echo empty($contact->phone1) ? "" : $contact->phone1 ?>"><?php echo empty($contact->phone1) ? "" : $contact->phone1 ?></a><a href="tel:<?php echo empty($contact->phone1) ? "" : $contact->phone1 ?>"><?php echo empty($contact->phone2) ? "" : $contact->phone2 ?></a></div></li>
                    <li><a href="mailto:<?php echo empty($contact->mail) ? "" : $contact->mail ?>"><span><i class="far fa-envelope"></i></span><?php echo empty($contact->mail) ? "" : $contact->mail ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer top -->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <ul class="social-default">
              <li><a target="_blank" href="<?php echo empty($contact->facebook) ? "" : $contact->facebook ?>"><i class="fab fa-facebook-f"></i></a></li>
              <li><a target="_blank" href="<?php echo empty($contact->instagram) ? "" : $contact->instagram ?>"><i class="fab fa-instagram"></i></a></li>
              <li><a target="_blank" href="<?php echo empty($contact->twitter) ? "" : $contact->twitter ?>"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- footer bottom -->
  </footer>
  <a class="page-scroll scroll-top" href="#scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
  <!-- Footer End here -->


  <script src="<?php echo site_url('assets/front/js/jquery-1.12.4.min.js') ?>"></script>

  <?php if(current_url() == site_url('iletisim')) { ?>
      <script src="<?php echo site_url('assets/front/js/cookie.js') ?>"></script>
      <script src="<?php echo site_url('assets/front/js/toastr.min.js') ?>"></script>
      <script src="<?php echo site_url('assets/front/js/ajax.js') ?>"></script>
  <?php } ?>

  <script src="<?php echo site_url('assets/front/js/bootstrap.min.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/isotope.min.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/jquery.easing.min.js') ?>"></script>
  
  <script src="<?php echo site_url('assets/front/js/fancybox.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/swiper.jquery.min.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/jquery.nstSlider.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/flexslider-min.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/jquery.easing.min.js') ?>"></script>

  <script src="<?php echo site_url('assets/front/js/main.js') ?>"></script>


</body>

</html>