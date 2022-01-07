<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Neden Biz</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Neden Biz</li>
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
                                                <th style="width: 20%;">Başlık</th>
                                                <th style="width: 20%;">Metin</th>
                                                <th style="width: 20%;">İcon</th>
                                                <th style="width: 15%;">Düzenle</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($preference)) { ?>
                                                <?php foreach ($preference as $key => $val) { ?>
                                                    <tr id="delete<?php echo $val->id; ?>">
                                                        <td><?php echo $val->id; ?></td>
                                                        <td><?php echo $val->title; ?></td>
                                                        <td><?php echo $val->text; ?></td>
                                                        <td><img src="<?php echo site_url($val->image_path); ?>"></td>
                                                        <td>
                                                            <button onclick="window.location.href='<?php echo site_url('yonetim-paneli/neden-biz-duzenle/'.$val->id); ?>'" class="w-100 btn btn-warning buttonAnimation" data-animation="pulse"><i class="la la-refresh"></i></button>
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