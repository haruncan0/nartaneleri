<!-- Page Header Start here -->
<section class="page-header section-notch">
  <div class="overlay">
    <div class="container">
      <h3><?php echo $select_teacher->name ?></h3>
      <ul class="page_breadcrumb">
        <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
        <li><a href="<?php echo site_url('ogretmenlerimiz') ?>">Öğretmenler</a></li>
        <li>Öğretmen Detayları</li>
      </ul>
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->

<!-- teacher-details start here -->
<section class="teacher-details pt-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12">
        <div class="teacher-image">
          <img src="<?php echo site_url($select_teacher->image_path) ?>" alt="<?php echo $select_teacher->name ?>" class="img-responsive">
        </div>
      </div>
      <div class="col-lg-7 col-xs-12">
        <div class="teacher-content">
          <h4><?php echo $select_teacher->name ?></h4>
          <span><?php echo $select_teacher->profession ?></span>
          <div class="back_biography_text">
            <?php echo $select_teacher->text ?>
          </div>
        </div>
      </div>
    </div><!-- row -->

  </div><!-- container -->
</section><!-- teacher-details -->
<!-- teacher-details end here -->

<?php include "footer.php" ?>