<!doctype html>
<html lang="en">
    <head>
    <?php $this->load->view('admin/part/head');?>
    </head>
    <body onLoad="waktu()">
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <main id="main-container">
            <?php $this->load->view('admin/part/navbar');?>
            <?php $this->load->view('admin/part/sidebar');?>
                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('<?= base_url()?>assets/admin/media/photos/photo3@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Syarat</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                <div class="block block-rounded">
                        <div class="block-header">
                            <h3 class="block-title">Data <small>Syarat</small></h3>
                        </div>
                        <?php foreach($syarat as $rsyarat){?>
                        <form class="js-validation" action="<?= site_url('Administrator/Syarat/update_data');?>" method="POST" enctype="multipart/form-data">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <!-- Regular -->
                                    <div class="row items-push">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan <span class="text-danger">*</span></label>
                                                <select class="form-control" id="jurusan" name="jurusan_id">
                                                    <?php foreach ($jurusan as $rjurusan){?>
                                                        <option value="<?= $rjurusan->id;?>"<?php if ($rjurusan->id == $rsyarat->jurusan_id ) echo "selected='selected'"?>><?= $rjurusan->nama;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group">
                                                <input type="hidden" name="id" id="id" value="<?= $rsyarat->id?>">
                                                <label for="keterangan">Keterangan <span class="text-danger">*</span></label>                                                                                                             Syarat <span class="text-danger">*</span></label>
                                                <textarea name="keterangan" id="keterangan" class="js-summernote"><?= $rsyarat->keterangan?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Regular -->
                                    <!-- Submit -->
                                    <div class="row items-push">
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-alt-primary">Ubah</button>
                                        </div>
                                    </div>
                                    <!-- END Submit -->
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
            <?php $this->load->view('admin/part/footer');?>
        </div>
        <!-- END Page Container -->
        <?php $this->load->view('admin/part/js');?>
    </body>
</html>
