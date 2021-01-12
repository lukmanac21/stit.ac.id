    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>STITTA - ADMIN</title>

    <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="<?= base_url()?>assets/admin/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url()?>assets/admin/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url()?>assets/admin/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="<?= base_url()?>assets/admin/css/oneui.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="<?= base_url()?>assets/admin/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
    <script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
    </script>
    <style>
        #jam-digital{overflow:hidden; width:350px}
        #hours{float:left; width:100px; height:50px;}
        #minute{float:left; width:100px; height:50px;}
        #second{float:left; width:100px; height:50px;}
        #jam-digital p{color:#FFF; font-size:30px; text-align:center; margin-top:0px}
    </style>
