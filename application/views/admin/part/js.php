<script src="<?= base_url()?>assets/admin/js/oneui.core.min.js"></script>
        <script src="<?= base_url()?>assets/admin/js/oneui.app.min.js"></script>
        <script src="<?= base_url()?>assets/admin/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="<?= base_url()?>assets/admin/js/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="<?= base_url()?>assets/admin/js/plugins/jquery-validation/additional-methods.js"></script>
        <script>jQuery(function () { One.helpers('select2'); });</script>
        <script src="<?= base_url()?>assets/admin/js/pages/be_forms_validation.min.js"></script>
        <script src="<?= base_url()?>assets/admin/js/oneui.core.min.js"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at <?= base_url()?>assets/admin/_js/main/app.js
-->
<script src="<?= base_url()?>assets/admin/js/oneui.app.min.js"></script>

<!-- Page JS Plugins -->      
<script src="<?= base_url()?>assets/admin/js/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/jquery-validation/additional-methods.js"></script>

<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function () { One.helpers('select2'); });</script>

<!-- Page JS Code -->
<script src="<?= base_url()?>assets/admin/js/pages/be_forms_validation.min.js"></script>

<script src="<?= base_url()?>assets/admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/buttons/buttons.print.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Page JS Code -->
<script src="<?= base_url()?>assets/admin/js/pages/be_pages_dashboard_v1.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/pages/be_tables_datatables.min.js"></script>
<!-- Page JS Plugins -->
<script src="<?= base_url()?>assets/admin/js/plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/ckeditor/ckeditor.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/simplemde/simplemde.min.js"></script>
<script src="<?= base_url()?>assets/admin/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
<script>jQuery(function () {
One.helpers(['summernote', 'ckeditor', 'simplemde']);});
</script>
<!-- Page JS Code -->
<script src="<?= base_url()?>assets/admin/js/pages/be_forms_validation.min.js"></script>
        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
<script>jQuery(function () {
    One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
});</script>
<script>
    var start = 2020;
    var end = new Date().getFullYear();
    var options = "";
    for(var year = start ; year <=end; year++){
    options += "<option>"+ year +"</option>";
    }
    document.getElementById("year").innerHTML = options;
</script>