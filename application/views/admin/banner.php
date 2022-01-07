<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Banner</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Banner</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content collpase show">
                            <div class="card-body">

                                <form class="form" id="infoUpdateBanner">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $banner->id; ?>">

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Hakkımızda Başlık</label>
                                                <input type="text" name="about_banner" class="form-control" value="<?php echo $banner->about_banner;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Sınıflar Başlık</label>
                                                <input type="text" name="class_banner" class="form-control" value="<?php echo $banner->class_banner;?>">
                                            </div>
                                        </div>


                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Etkinliklerimiz Başlık</label>
                                                <input type="text" name="event_banner" class="form-control" value="<?php echo $banner->event_banner;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Öğretmenlerimiz Başlık</label>
                                                <input type="text" name="teacher_banner" class="form-control" value="<?php echo $banner->teacher_banner;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Galeri Başlık</label>
                                                <input type="text" name="gallery_banner" class="form-control" value="<?php echo $banner->gallery_banner;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>İletişim Başlık</label>
                                                <input type="text" name="contact_banner" class="form-control" value="<?php echo $banner->contact_banner;?>">
                                            </div>
                                        </div>

                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-outline-success">
                                            <i class="ft-check"></i> Kaydet
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>