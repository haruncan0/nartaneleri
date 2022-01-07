<!-- Page Header Start here -->
<section class="page-header section-notch">
  <div class="overlay">
    <div class="container">
      <h3><?php echo $banner ?></h3>
      <ul class="page_breadcrumb">
        <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
        <li>Öğretmenlerimiz</li>
      </ul>
    </div><!-- container -->
  </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->

<?php if(!empty($teacher)) { ?>
<!-- Teachers Start here -->
<section class="teachers teachers-page teachers-area pt-120">
  <div class="container">
    <div class="row">

      <?php foreach ($teacher as $key => $value) { ?>

      <div class="col-lg-4 col-xs-12">
        <div class="teacher-item">
          <div class="teacher-image">
            <img src="<?php echo site_url($value->image_path) ?>">
          </div>
          <div class="teacher-content">
            <h4><?php echo $value->name ?></h4>
            <span>Fen Bilgisi Öğretmeni</span>
            <a href="<?php echo site_url('ogretmen-bilgileri/'.$value->slug) ?>">Detayları Gör</a>
          </div>
        </div><!-- teacher item -->
      </div>

    <?php } ?>

    </div><!-- row -->
  </div><!-- container -->
</section><!-- teacher -->
<!-- Teachers End here -->
<?php } ?>