<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="about-two">
            <div class="container">
                <div class="row">
                <?php foreach($syarat as $rsyarat){?>
                    <div class="col-xl-12">
                        <div class="about-two__content">
                        <div class="block-title text-left">
                            <h1 class="block-title__title"><?= $rsyarat->nama ?></h1>
                            </div><!-- /.block-title -->
                                <p class="about-two__text">
                                <?= $rsyarat->keterangan;?> 
                                </p><!-- /.about-two__text -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                    <?php } ?>
                </div>
            </div><!-- /.container -->
        </section><!-- /.about-two -->
        <?php $this->load->view('_partials/footer');?>

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->

<?php $this->load->view('_partials/js');?>
</body>

</html>