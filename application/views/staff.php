<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="team-one team-page">
            <div class="container">
                <div class="row">
                    <?php foreach($staff as $rstaff){?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="team-one__single">
                            <div class="team-one__image">
                                <img src="<?= base_url();?>assets/images/staff/<?= $rstaff->img?>" alt="" width="90%">
                            </div><!-- /.team-one__image -->
                            <div class="team-one__content">
                                <h2 class="team-one__name"><a href="#"><?= $rstaff->nama?></a></h2>
                                <!-- /.team-one__name -->
                                <p class="team-one__designation"><?= $rstaff->jabatan?></p><!-- /.team-one__designation -->
                                <!-- /.team-one__text -->
                            </div><!-- /.team-one__content -->
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-one__social -->
                        </div><!-- /.team-one__single -->
                    </div><!-- /.col-lg-3 -->
                        <?php } ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.team-one team-page -->
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