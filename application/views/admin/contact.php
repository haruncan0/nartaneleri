<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">İletişim Bilgileri</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">İletişim Bilgileri</li>
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

                                <form class="form" id="infoUpdateContact" method="post">
                                    <div class="form-body">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Açılış Zamanı</label>
                                                <input class="form-control" type="text" name="start_time" value="<?php echo !empty($contact) ? $contact->start_time : "" ?>">
                                            </div>
                                        </div>


                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Adres</label>
                                                <textarea class="form-control" name="address" placeholder="Adres Bilgisi"><?php echo !empty($contact) ? $contact->address : "";?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Telefon Numarası 1</label>
                                                <input type="text" class="form-control" placeholder="Telefon Numarası 1" name="phone1" value="<?php echo !empty($contact) ? $contact->phone1 : "";?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Telefon Numarası 2</label>
                                                <input type="text" class="form-control" placeholder="Telefon Numarası 2" name="phone2" value="<?php echo !empty($contact) ? $contact->phone2 : "";?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>E-posta</label>
                                                <input type="text" id="mail" class="form-control" placeholder="Mail" name="mail" value="<?php echo !empty($contact) ? $contact->mail : "";?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?php echo !empty($contact) ? $contact->facebook : "" ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>İnstagram</label>
                                                <input type="text" class="form-control" name="instagram" placeholder="İnstagram" value="<?php echo !empty($contact) ? $contact->instagram : "" ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?php echo !empty($contact) ? $contact->twitter : "" ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>Konum (iframe)</label>
                                                <textarea class="form-control" name="map" placeholder="Adres Bilgisi"><?php echo !empty($contact) ? $contact->map : "";?></textarea>
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