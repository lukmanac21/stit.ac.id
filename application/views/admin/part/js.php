        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out <?= base_url()?>assets/admin/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the <?= base_url()?>assets/admin/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            <?= base_url()?>assets/admin/js/core/jquery.min.js
            <?= base_url()?>assets/admin/js/core/bootstrap.bundle.min.js
            <?= base_url()?>assets/admin/js/core/simplebar.min.js
            <?= base_url()?>assets/admin/js/core/jquery-scrollLock.min.js
            <?= base_url()?>assets/admin/js/core/jquery.appear.min.js
            <?= base_url()?>assets/admin/js/core/js.cookie.min.js
        -->
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

        <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
        <script>jQuery(function () {
        One.helpers(['summernote', 'ckeditor', 'simplemde']);});
        </script>