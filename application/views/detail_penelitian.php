<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="blog-details">
            <div class="container">
                <?php foreach($penelitian as $rpenelitian){?>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="<?= base_url()?>assets/images/penelitian/<?= $rpenelitian->file?>"  width="370px" height="680px" alt="">
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                                <h2 class="blog-one__title"><?= $rpenelitian->judul?>

                                </h2><!-- /.blog-one__title -->
                                <p><?= $rpenelitian->keterangan?></p>
                            </div><!-- /.blog-one__content -->
                            <div class="share-block">
                                <div class="left-block">
                                    <p>Create By: Admin@stitta.ac.id</p>
                                </div><!-- /.left-block -->
                                <div class="right-block">
                                    <p>Post On: <?= $rpenelitian->tanggal;?></p>
                                </div><!-- /.left-block -->
                            </div>
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Kategori</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list">
                                    <?php foreach($kategori as $rkategori){?>
                                    <li class="sidebar__category-list-item"><a href="#"><?= $rkategori->nama?></a></li>
                                    <?php } ?>
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
                <?php }?>
            </div><!-- /.container -->
        </section><!-- /.blog-details -->
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