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
        <script src="<?= base_url()?>assets/admin/js/plugins/chart.js/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url()?>assets/admin/js/pages/be_pages_dashboard_v1.min.js"></script>