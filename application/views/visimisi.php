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
                    <div class="col-xl-12">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Visi</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <?php foreach($visi as $rvisi){?>
                            <p class="about-two__text"><?= $rvisi->visi;?></p><!-- /.about-two__text -->
                            <?php } ?>
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Misi</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <hr>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Tujuan</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->


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