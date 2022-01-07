<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Hakkımızda</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Hakkımızda</li>
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

                                <form class="form" id="infoUpdateAbout" method="post">
                                    <div class="form-body">
                                        <input type="text" hidden  class="form-control"  name="id" value="<?php echo $about->id; ?>">

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Hakkımızda Yazısı Başlık</label>
                                                <input type="text" name="about_title" class="form-control" value="<?php echo $about->about_title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Hakkımızda Metni</label>
                                                <textarea name="about_text" class="form-control"><?php echo $about->about_text;?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Neden bizi tercih etmelisiniz başlık</label>
                                                <input type="text" name="why_title" class="form-control" value="<?php echo $about->why_title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Neden bizi tercih etmelisiniz alt başlık</label>
                                                <input type="text" name="why_text" class="form-control" value="<?php echo $about->why_text;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Yorumlar Başlık</label>
                                                <input type="text" name="comment_title" class="form-control" value="<?php echo $about->comment_title;?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Yorumlar Alt Başlık</label>
                                                <input type="text" name="comment_text" class="form-control" value="<?php echo $about->comment_text;?>">
                                            </div>
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