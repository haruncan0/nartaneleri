<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p style="font-size: 11px !important;" class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="mr-auto d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://veriweb.com.tr/" target="_blank">VERİWEB</a></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/vendors.min.js'); ?> "></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/charts/chart.min.js'); ?> "></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js'); ?> "></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src='<?php echo site_url('assets/back/app-assets/js/cookie.js'); ?>'></script>
<!-- BEGIN: switch JS-->

<script type="text/javascript" src="<?php echo site_url('assets/back/app-assets/js/jquery.minicolors.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/back/app-assets/js/picker-color.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/back/app-assets/js/spectrum.js') ?>"></script>

<script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/switchery.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/js/scripts/forms/switch.js'); ?>"></script>
<!-- BEGIN: switch JS-->
<script src="<?php echo site_url('assets/back/app-assets/js/core/app.js'); ?> "></script>
<script src="<?php echo site_url('assets/back/app-assets/js/core/app-menu.js'); ?> "></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/editors/summernote/summernote.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/dropzone.min.js'); ?>"></script>

<!-- END: Theme JS-->

<!-- BEGIN: datatable JS-->
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/tables/datatable/datatables.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/js/scripts/tables/datatables/datatable-basic.js'); ?>"></script>
<!-- END: datatable JS-->

<script src="<?php echo site_url('assets/back/app-assets/js/jquery-ui.js'); ?> "></script>

<script src="<?php echo site_url('assets/back/app-assets/vendors/js/animation/jquery.appear.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/js/scripts/animation/animation.js'); ?>"></script>

<script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/transition.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/zoom.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/js/scripts/extensions/toastr.js')?>"></script>
<script src="<?php echo site_url('assets/back/app-assets/vendors/js/extensions/toastr.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/back/jconfirm/jConfirm.min.js');?>" ></script>
<script src="<?php echo site_url('assets/back/assets/js/ajax.js?v='.md5(date('Y-m-d H:i:s'))) ?>"></script>
<script src="<?php echo site_url('assets/back/ckeditor/ckeditor.js'); ?>"></script>

<?php if ($active == 'facility') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/facility.js'); ?>"></script>
<?php } ?>

<?php if ($active == 'gallery') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/gallery.js'); ?>"></script>
<?php } ?>

<?php if ($active == 'class') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/class.js'); ?>"></script>
<?php } ?>

<?php if ($active == 'event') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/event.js'); ?>"></script>
<?php } ?>

<?php if ($active == 'contract') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/contract.js'); ?>"></script>
<?php } ?>

<?php if ($active == 'teacher') { ?>
    <script src="<?php echo site_url('assets/back/assets/js/teacher.js'); ?>"></script>
<?php } ?>


<!-- END: switch JS-->

</body>

<script type="text/javascript">
    $('.summernote').summernote({
        height: 200,
        placeholder: "Metin",

        toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['fontname', ['fontname']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']],
        ],
    });
</script>
<!-- END: Body-->

</html>