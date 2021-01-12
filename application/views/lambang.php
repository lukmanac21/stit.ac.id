<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="team-details">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="team-details__content">
                            <h2 class="team-details__title">Arti Lambang</h2><!-- /.team-details__title -->
                            <p class="team-details__text">Lorem Ipsum is simply dummy text of the printing and type industry.
                                Lorem Ipsum has been the standard dummy text ever since the when an unknown was popularised. It
                                has survived not only five centuries, but also the leap into electronic typesetting remaining
                                unchanged.</p><!-- /.team-details__text -->
                        </div><!-- /.team-details__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="<?= base_url();?>assets/images/team-d-1.jpg" alt="">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="team-details.html">Lambang STIT</a></h2>
                                <!-- /.team-one__name -->
                            </div><!-- /.team-one__content -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-details -->
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