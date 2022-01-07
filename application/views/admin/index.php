<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Anasayfa</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="row">
                <div class="card w-100">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" id="infoUpdateHomepage" method="post">
                                <h4 style="font-weight: 600;">Hakkımızda Kısmı</h4>
                                <div class="row ">
                                    
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" class="form-control"  name="about_title" value="<?php echo $homepage->about_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Metin</label>
                                        <textarea class="form-control" name="about_text"><?php echo $homepage->about_text ?></textarea>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Buton Yazısı</label>
                                        <input type="text" name="about_button" value="<?php echo $homepage->about_button ?>" class="form-control">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div action="<?php echo site_url('admin/Add_images/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                    <div class="dz-message">
                                                        <span class="m-dropzone__msg-desc">
                                                            Bir Adet Resim Seçiniz.
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="database_img">
                                                    <p>Yüklü Resim</p>
                                                    <img src="<?php echo site_url($homepage->about_image) ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="mt-3" style="font-weight: 600;">Galeri Kısmı</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" name="gallery_title" class="form-control" value="<?php echo $homepage->gallery_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Alt Başlık</label>
                                        <input type="text" name="gallery_text" class="form-control" value="<?php echo $homepage->gallery_text ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Buton Yazısı</label>
                                        <input type="text" name="gallery_button" class="form-control" value="<?php echo $homepage->gallery_button ?>">
                                    </div>
                                </div>

                                <h4 class="mt-3" style="font-weight: 600;">Sınıf Kısmı</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" name="class_title" class="form-control" value="<?php echo $homepage->class_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Alt Başlık</label>
                                        <input type="text" name="class_text" class="form-control" value="<?php echo $homepage->class_text ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Buton Yazısı</label>
                                        <input type="text" name="class_button" class="form-control" value="<?php echo $homepage->class_button ?>">
                                    </div>
                                </div>

                                <h4 class="mt-3" style="font-weight: 600;">Öğretmenlerimiz Kısmı</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" name="teacher_title" class="form-control" value="<?php echo $homepage->teacher_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Alt Başlık</label>
                                        <input type="text" name="teacher_text" class="form-control" value="<?php echo $homepage->teacher_text ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Buton Yazısı</label>
                                        <input type="text" name="teacher_button" class="form-control" value="<?php echo $homepage->teacher_button ?>">
                                    </div>
                                </div>

                                <h4 class="mt-3" style="font-weight: 600;">Neden bizi tercih etmelisiniz kısmı</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" name="why_title" class="form-control" value="<?php echo $homepage->why_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Alt Başlık</label>
                                        <input type="text" name="why_text" class="form-control" value="<?php echo $homepage->why_text ?>">
                                    </div>
                                </div>

                                <h4 class="mt-3" style="font-weight: 600;">Etkinliklerimiz Kısmı</h4>
                                <div class="row">
                                    <div class="col-md-12 mt-2">
                                        <label>Başlık</label>
                                        <input type="text" name="event_title" class="form-control" value="<?php echo $homepage->event_title ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Alt Başlık</label>
                                        <input type="text" name="event_text" class="form-control" value="<?php echo $homepage->event_text ?>">
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <label>Buton Yazısı</label>
                                        <input type="text" name="event_button" class="form-control" value="<?php echo $homepage->event_button ?>">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-actions right">
                                        <button type="submit" class="btn btn-outline-success">
                                            <i class="ft-check"></i> Kaydet
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>