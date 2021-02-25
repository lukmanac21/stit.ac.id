<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
		<?php $this->load->view('_partials/navbar');?>
        <div class="banner-wrapper">
            <?php foreach($slider as $rslider){?>
            <section class="banner-one banner-carousel__one no-dots owl-theme owl-carousel">
                <div class="banner-one__slide banner-one__slide-one" style="background-image: url('<?= base_url()?>/assets/images/slider/<?= $rslider->nama?>'); height:1000px;" >
                    <div class="container"> 
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <h3 class="banner-one__title banner-one__light-color"><br>
                                    </h3><!-- /.banner-one__title -->
                            </div><!-- /.col-xl-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.banner-one__slide -->
            </section><!-- /.banner-one -->
            <?php } ?>
            <div class="banner-carousel-btn">
                <a href="#" class="banner-carousel-btn__left-btn"><i class="kipso-icon-left-arrow"></i></a>
                <a href="#" class="banner-carousel-btn__right-btn"><i class="kipso-icon-right-arrow"></i></a>
            </div><!-- /.banner-carousel-btn -->
        </div><!-- /.banner-wrapper -->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="about-two__content">
                            <div class="block-title text-left">
                                <h2 class="block-title__title">Selamat Datang Website STIT</h2><!-- /.block-title__title -->
                            </div><!-- /.block-title -->
                            <p class="about-two__text">Sekolah Tinggi Ilmu Tarbiyah  (STIT) adalah sebuah Lembaga  Penyelenggaraan Pendidikan Tinggi yang mengkaji dan dan mengembangkan ilmu agama islam, khususnya ilmu ketarbiyahan.</p><!-- /.about-two__text -->
                            <div class="about-two__single-wrap">
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-professor"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Belajar dari Dosen Profesional</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                                <div class="about-two__single">
                                    <div class="about-two__single-icon">
                                        <i class="kipso-icon-knowledge"></i><!-- /.kipso-icon-professor -->
                                    </div><!-- /.about-two__single-icon -->
                                    <div class="about-two__single-content">
                                        <p class="about-two__single-text">Meningkatkan keimanan</p><!-- /.about-two__single-text -->
                                    </div><!-- /.about-two__single-content -->
                                </div><!-- /.about-two__single -->
                            </div><!-- /.about-two__single-wrap -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->
        <section class="thm-gray-bg course-category-one">
            <div class="container-fluid text-center">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Mata Kuliah <br>
                        Unggulan Kami</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="course-category-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="course-category-one__single color-1">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">IT & Software</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-2">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Development</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-3">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-music-player"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Music</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-4">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-camera"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Photography</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-5">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-targeting"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Marketing</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-6">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-health"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Health & Fitness</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-1">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-desktop"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">IT & Software</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-2">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-web-programming"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Development</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-3">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-music-player"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Music</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="course-category-one__single color-4">
                            <div class="course-category-one__icon">
                                <i class="kipso-icon-camera"></i><!-- /.kipso-icon-camera -->
                            </div><!-- /.course-category-one__icon -->
                            <h3 class="course-category-one__title"><a href="#">Photography</a></h3>
                            <!-- /.course-category-one__title -->
                        </div><!-- /.course-category-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.course-category-one__carousel owl-carousel owl-theme -->
            </div><!-- /.container-fluid -->
        </section><!-- /.thm-gray-bg course-category-one -->
        <section class="blog-two">
            <div class="container">
                <div class="block-title text-center">
                    <h2 class="block-title__title">Berita<br>
                    Terbaru</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="blog-two__carousel owl-carousel owl-theme">
                    <?php foreach($berita as $rberita){?>
                        <div class="item">
                            <div class="blog-two__single" style="background-image: url(<?= base_url()?>assets/images/berita/<?= $rberita->images?>);">
                                <div class="blog-two__inner">
                                    <a href="<?= site_url('Home/detail_berita/').$rberita->id_berita?>" class="blog-two__date">
                                        <span><?= $rberita->tanggal?></span>
                                    </a><!-- /.blog-two__date -->
                                    <h3 class="blog-two__title">
                                        <a href="<?= site_url('Home/detail_berita/').$rberita->id_berita?>"><?= $rberita->judul?></a>
                                    </h3><!-- /.blog-two__title -->
                                </div><!-- /.blog-two__inner -->
                            </div><!-- /.blog-two__single -->
                        </div><!-- /.item -->
                    <?php }?>
                </div><!-- /.blog-two__carousel owl-carousel owl-theme -->

            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
        <section class="cta-four">
            <img src="<?= base_url()?>assets/images/circle-stripe-1.png" class="cta-four__stripe" alt="">
            <img src="<?= base_url()?>assets/images/line-stripe-1.png" class="cta-four__line" alt="">
            <div class="container text-center">
                <div class="block-title">
                    <h2 class="block-title__title">We’ve best teachers <br>
                        in every subject</h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <p class="cta-four__text">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis
                    bibendum auci elit <br> consequat is simply free text available in the psutis sem nibh id eis sed odio sit
                    amet.</p><!-- /.cta-four__text -->
            </div><!-- /.container text-center -->
        </section><!-- /.cta-four -->
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