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
                    <?php foreach($kolom as $rkolom){?>
                    <div class="col-lg-4">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?= base_url()?>assets/images/berita/<?= $rkolom->images?>" width="370px" height="307px" alt="">
                                <a class="blog-one__plus" href="<?= site_url('LPPM/detail_kolom/').$rkolom->id_berita;?>"><i class="kipso-icon-plus-symbol"></i>
                                    <!-- /.kipso-icon-plus-symbol --></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <h2 class="blog-one__title"><a href="<?= site_url('LPPM/detail_kolom/').$rkolom->id_berita;?>"><?= $rkolom->judul?></a>
                                </h2><!-- /.blog-one__title -->
                                <a href="<?= site_url('LPPM/detail_kolom/').$rkolom->id_berita;?>" class="blog-one__link">Read More</a><!-- /.blog-one__link -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <?php } ?>
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