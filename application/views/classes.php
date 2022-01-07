<section class="page-header section-notch">
<div class="overlay">
  <div class="container">
    <h3><?php echo $banner ?></h3>
    <ul class="page_breadcrumb">
      <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
      <li>Sınıflarımız</li>
    </ul>
  </div><!-- container -->
</div><!-- overlay -->
</section><!-- page header -->


<?php if(!empty($select_ticket)) { ?>

  <div class="ticket_head">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4>Etiket: <span>#<?php echo $select_ticket->ticket_name ?></span></h4>
        </div>
      </div>
    </div>
  </div>

<?php } ?>


<?php if(!empty($class)) { ?>

<!-- Classes Start here -->
<section class="classes pt-120 ">
<div class="container">
  <div class="row">
<?php foreach ($class as $key => $value) { ?>
  
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <a data-fancybox="class" href="<?php echo site_url($value->image_path) ?>"><img src="<?php echo site_url($value->image_path) ?>" alt="<?php echo $value->name ?>" class="img-responsive"></a>
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
            <span>Eğitim Ücreti</span>
            <span><?php echo $value->price.' TL' ?></span>
          </li>
        </ul>
        <div class="content">
          <h4><a style="color: <?php echo $value->color ?>;" href="<?php echo site_url('sinif-detaylari/'.$value->slug) ?>"><?php echo $value->name ?></a></h4>
          <p><span style="color: <?php echo $value->color ?>;">Ders saati: </span><?php echo $value->lesson_hours ?></p>
          <!-- <p></p> -->
        </div>
      </div>
    </div>

<?php } ?>

    <!-- <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_02.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Dahiler Yeşil</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_03.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Dahiler Pembe</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_04.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Nar Çiçekleri Turuncu</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_05.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Nar Çiçekleri Mavi</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_06.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Tatlı Narlar Lila</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_07.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Tatlı Narlar Mor</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_08.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Dahiler Sınıfı 1</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="class-item">
        <div class="image">
          <img src="images/classes/class_09.jpg" alt="class image" class="img-responsive">
        </div>
        <ul class="schedule">
          <li>
            <span>Öğrenci Sayısı</span>
            <span>30 - 40</span>
          </li>
          <li>
            <span>Öğrenci Sayısı</span>
            <span>5 - 6</span>
          </li>
          <li>
            <span>Eğitim Ücreti</span>
            <span>1500 tl</span>
          </li>
        </ul>
        <div class="content">
          <h4><a href="class-single.php">Dahiler Sınıfı 2</a></h4>
          <p><span>Ders saati</span> : 08:00 - 10:00</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, iusto.</p>
        </div>
      </div>
    </div> -->
  </div><!-- row -->
</div><!-- container -->
</section><!-- classes -->

<?php } ?>