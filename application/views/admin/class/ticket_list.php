<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Etiketler</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('yonetim-paneli'); ?>">Anasayfa</a>
                            </li>
                            <li class="breadcrumb-item active">Etiket Listele</li>
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
                                        <form id="add_list_ticket">
                                            <input type="hidden" name="id" value="<?php echo $slug_id ?>">
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <input type="text" name="ticket" class="form-control mb-1" placeholder="Etiket Giriniz">
                                                    <div class="text-right">
                                                        <button class="btn btn-outline-success">Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 20%;">Etiket Adı</th>
                                                <th style="width: 10%;">Düzenle</th>
                                                <th style="width: 10%;">Sil</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(!empty($ticket)) { ?>
                                                <?php foreach ($ticket as $key => $val) { ?>
                                                    <tr id="delete<?php echo $val->ct_id; ?>">
                                                        <td><?php echo $val->ct_id; ?></td>
                                                        <td><?php echo $val->ticket_name ?></td>
                                                        <td>
                                                            <button onclick="window.location.href='<?php echo site_url('yonetim-paneli/etiket-duzenle/'.$val->t_id); ?>'" class="w-100 btn btn-warning buttonAnimation" data-animation="pulse"><i class="la la-refresh"></i></button>
                                                        </td>
                                                        <td>
                                                            <button class="w-100 btn btn-danger buttonAnimation delete-ticket"
                                                                    data-id="<?php echo $val->ct_id; ?>"
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