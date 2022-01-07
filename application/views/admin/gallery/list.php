<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Slider </h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Slider Listele</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">

            <!-- Zero configuration table -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 20%;">Resim</th>
                                                <th style="width: 15%;">Sitede Göster</th>
                                                <th style="width: 15%;">Düzenle</th>
                                                <th style="width: 15%;">Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($gallery)) { ?>
                                                <?php foreach ($gallery as $key => $val) { ?>
                                                    <tr id="delete<?php echo $val->g_id; ?>">
                                                        <td><?php echo $val->g_id; ?></td>
                                                        <td><img src="<?php echo site_url($val->image_path) ?>"></td>
                                                       
                                                        <td>
                                                            <input type="checkbox" class="switch gallery-status"
                                                                   data-id="<?php echo $val->g_id; ?>"
                                                                   id="switch1" <?php echo $val->status == 1 ? "checked " :""; ?> />
                                                        </td>
                                                        <td>
                                                            <button onclick="window.location.href='<?php echo site_url('yonetim-paneli/galeri-duzenle/'.$val->g_id); ?>'" class="w-100 btn btn-warning buttonAnimation" data-animation="pulse"><i class="la la-refresh"></i></button>
                                                        </td>
                                                        <td>
                                                            <button class="w-100 btn btn-danger buttonAnimation delete-gallery"
                                                                    data-id="<?php echo $val->g_id; ?>"
                                                                    data-animation="bounce"><i class=" la la-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Zero configuration table -->
        </div>
    </div>
</div>