<!-- Page Header Start here -->
<section class="page-header section-notch">
    <div class="overlay">
        <div class="container">
            <h3><?php echo $banner ?></h3>
            <ul class="page_breadcrumb">
                <li><a href="<?php echo site_url() ?>">Anasayfa</a></li>
                <li>İletişim</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->


<!-- Contact Start here -->
<section class="contact contact-page">
    <div class="contact-details padding-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <ul>
                        <li class="contact-item">
                            <span class="icon flaticon-signs"></span>
                            <div class="content">
                                <h4>Konumumuz</h4>
                                <a target="_blank"
                                href="#"><?php echo empty($contact->address) ? "" : $contact->address ?></a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <span class="icon flaticon-smartphone"></span>
                            <div class="content">
                                <h4>İletişim Numaralarımız</h4>
                                <a href="tel:<?php echo empty($contact->phone1) ? "" : $contact->phone1 ?>"><?php echo empty($contact->phone1) ? "" : $contact->phone1 ?></a>
                                <a href="te:<?php echo empty($contact->phone2) ? "" : $contact->phone2 ?>"><?php echo empty($contact->phone2) ? "" : $contact->phone2 ?></a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <span class="icon flaticon-message"></span>
                            <div class="content">
                                <h4>Mail Adresimiz</h4>
                                <a href="mailto:<?php echo empty($contact->mail) ? "" : $contact->mail ?>"><?php echo empty($contact->mail) ? "" : $contact->mail ?></a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <span class="icon fab fa-facebook"></span>
                            <div class="content">
                                <h4>Facebook</h4>
                                <a target="_blank"
                                href="<?php echo empty($contact->facebook) ? "" : $contact->facebook ?>"><?php echo empty($contact->facebook) ? "" : $contact->facebook ?></a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <span class="icon fab fa-instagram"></span>
                            <div class="content">
                                <h4>İnstagram</h4>
                                <a target="_blank"
                                href="<?php echo empty($contact->instagram) ? "" : $contact->instagram ?>"><?php echo empty($contact->instagram) ? "" : $contact->instagram ?></a>
                            </div>
                        </li>
                        <li class="contact-item">
                            <span class="icon fab fa-twitter-square"></span>
                            <div class="content">
                                <h4>Twitter</h4>
                                <a target="_blank" href="<?php echo empty($contact->twitter) ? "" : $contact->twitter ?>"><?php echo empty($contact->twitter) ? "" : $contact->twitter ?></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-6 col-xs-12">
                    <form id="contact_form" class="contact-form">
                        <div class="form-row">
                            <div class="col-xl-6">
                                <input type="text" name="name" placeholder="Ad Soyad" class="contact-input">
                            </div>
                            <div class="col-xl-6">
                                <input type="email" name="email" placeholder="Mail Adresi" class="contact-input">
                            </div>
                            <div class="col-12">
                                <textarea rows="5" name="message" class="contact-input" placeholder="Mesajınız"></textarea>
                            </div>
                        </div>
                        

                        <div class="col-xl-12">
                            <div class="promise-box x_11_page_promise">
                                <input class="inp-cbx" id="cbx" type="checkbox" value="1" style="display: none;"
                                name="confirm">
                                <label class="cbx" for="cbx">
                                    <span>
                                        <svg width="12px" height="9px" viewBox="0 0 12 9">
                                            <polyline points="1 5 4 8 11 1"></polyline>
                                        </svg>
                                    </span>
                                </label>
                                <button type="button" class="btn btn-primary modal-button get_contract"
                                data-toggle="modal" data-target="#exampleModal">
                                <strong>Aydınlatma Metni</strong>'ni okudum.
                            </button>
                        </div>
                    </div>

                    <input type="submit" name="submit" value="Gönder" class="contact-button">
                </form>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</div><!-- contact-details -->
<div class="map">
    <iframe
    src="<?php echo empty($contact->map) ? "" : $contact->map  ?>"
    width="100%" height="450" allowfullscreen="" loading="lazy"></iframe>
</div>
</section>
<!-- Contact End here -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aydınlatma Metni</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php echo $lighting->text ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
        </div>
    </div>
</div>
</div>