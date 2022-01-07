<section class="page-header section-notch">
  <div class="overlay">
    <div class="container">
      <h3><?php echo $select_class->name ?></h3>
      <ul class="page_breadcrumb">
        <li><a href="<?php echo site_url() ?>">Ana Sayfa</a></li>
        <li><a href="<?php echo site_url('siniflarimiz') ?>">Sınıflarımız</a></li>
        <li>Sınıf Detayları</li>
      </ul>
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Blog Post Start here -->
<section class="single-class pt-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="single-post">
          <div class="post-image">
            <a data-fancybox="class" href="<?php echo site_url($select_class->image_path) ?>"><img src="<?php echo site_url($select_class->image_path) ?>" alt="Sınıf Resimi" class="img-responsive"></a>
          </div>
          <div class="post-content">
            <h3 style="color: <?php echo $select_class->color ?>;"><?php echo $select_class->name ?></h3>
            <ul class="post-meta">
              <li><span class="icon flaticon-people-1"></span> <a href="#"><?php echo $select_class->teacher ?></a></li>
            </ul>
            <div class="class_detail_text">
              <?php echo $select_class->text ?>
            </div>
          </div>
        </div><!-- single post -->
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="sidebar-item">
            <ul class="class-details">
              <li>
                <div class="name"><i class="flaticon-student"></i>Yaş Aralığı</div>
                <div class="info"><?php echo $select_class->age_range ?></div>
              </li>
              <li>
                <div class="name"><i class="flaticon-symbols"></i>Öğrenci Sayısı</div>
                <div class="info"><?php echo $select_class->student ?></div>
              </li>
              <li>
                <div class="name"><i class="flaticon-alarm-clock"></i>Ders Saati</div>
                <div class="info"><?php echo $select_class->lesson_hours ?></div>
              </li>
              <li>
                <div class="name"><i class="flaticon-money-bag"></i>Eğitim Ücreti</div>
                <div class="info"><?php echo $select_class->price.' TL' ?></div>
              </li>
            </ul>

          </div><!-- sidebar item -->

          <?php if (!empty($ticket)) { ?>

            <div class="sidebar-item">
              <h4 class="sidebar-title">Etiketler</h4>
              <ul class="ticket_area">
              <?php foreach ($ticket as $key => $value) { ?>
                  
                <li><a href="<?php echo site_url('siniflarimiz/'.$value->slug) ?>"><?php echo $value->ticket_name ?></a></li>

              <?php } ?>

              </ul>
            </div>

          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Post End here -->