<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Yeteneklerimiz</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Yetenekleri Düzenle</li>
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
                                <form class="form" id="infoUpdateFacility">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $facility->id; ?>">
                                        <p class="back_title_text">1. Kutu</p>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title1" class="form-control" value="<?php echo $facility->title1;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Metin</label>
                                                <input type="text" name="text1" class="form-control" value="<?php echo $facility->text1;?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
						                                    <span class="m-dropzone__msg-desc">
						                                        Bir Adet Resim Seçiniz.
						                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <p class="back_title_text">2. Kutu</p>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title2" class="form-control" value="<?php echo $facility->title2;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Metin</label>
                                                <input type="text" name="text2" class="form-control" value="<?php echo $facility->text2;?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image-2'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
                                                            <span class="m-dropzone__msg-desc">
                                                                Bir Adet Resim Seçiniz.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <p class="back_title_text">3. Kutu</p>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title3" class="form-control" value="<?php echo $facility->title3;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Metin</label>
                                                <input type="text" name="text3" class="form-control" value="<?php echo $facility->text3;?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image-3'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
                                                            <span class="m-dropzone__msg-desc">
                                                                Bir Adet Resim Seçiniz.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <p class="back_title_text">4. Kutu</p>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Başlık</label>
                                                <input type="text" name="title4" class="form-control" value="<?php echo $facility->title4;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Metin</label>
                                                <input type="text" name="text4" class="form-control" value="<?php echo $facility->text4;?>">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div action="<?php echo site_url('admin/Add_images/add-image-4'); ?>" class="dropzone dropzone-area" id="dpz-single-file">
                                                        <div class="dz-message">
                                                            <span class="m-dropzone__msg-desc">
                                                                Bir Adet Resim Seçiniz.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-outline-warning mr-1" onclick="window.location.href ='<?php echo site_url('yonetim-paneli/yeteneklerimiz'); ?>'">
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