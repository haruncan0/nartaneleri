<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Sınıf</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Sınıfı Düzenle</li>
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

                                <form class="form" id="infoFormUpdateClass">
                                    <div class="form-body">
                                        <input type="hidden" name="id" value="<?php echo $class->id ?>">

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Sınıf Adı</label>
                                                <input type="text" name="class_name" class="form-control" value="<?php echo $class->name ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Açıklama Yazısı</label>
                                                <textarea class="ckeditor" name="description"><?php echo $class->text ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Öğretmen İsmi</label>
                                                <input type="text" name="teacher_name" class="form-control" value="<?php echo $class->teacher ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Ders Saatleri</label>
                                                <input type="text" name="lesson_hours" class="form-control" value="<?php echo $class->lesson_hours ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Öğrenci Sayısı</label>
                                                <input type="text" name="number_students" class="form-control" value="<?php echo $class->student ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Yaş Aralığı</label>
                                                <input type="text" name="age_range" class="form-control" value="<?php echo $class->age_range ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Eğitim Ücreti</label>
                                                <input type="text" name="price" class="form-control" value="<?php echo $class->price ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Renk Seçiniz</label>
                                                <input type="text" name="color" class="minicolors form-control" value="<?php echo $class->color ?>">
                                            </div>
                                        </div>

                                        <div class="row">
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
                                                            <img src="<?php echo site_url($class->image_path) ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/siniflari-listele'); ?>'">
                                            <i class="ft-x"></i> Çık
                                        </button>
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