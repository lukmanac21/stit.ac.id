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
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Jadwal</h1>
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
                            <h3 class="block-title">Data <small>Jadwal</small></h3>
                        </div>
                        <?php foreach($jadwal as $rjadwal){?>
                        <form class="js-validation" action="<?= site_url('Administrator/Jadwal/update_data');?>" method="POST" enctype="multipart/form-data">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <!-- Regular -->
                                    <div class="row items-push">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="framework">Pilih Tahun<span class="text-danger">*</span></label>
                                                <select class="js-select year form-control" id="year" name="tahun" style="width: 100%;" data-live-search="true">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="periode">Periode<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="periode" name="periode" placeholder="Periode" value="<?= $rjadwal->periode?>">
                                                <input type="hidden" name="id" value="<?= $rjadwal->id?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="status">Status<span class="text-danger">*</span></label>
                                                <select class="js-select form-control" id="status" name="status" style="width: 100%;" data-live-search="true">
                                                <option value="0">Dibuka</option>
                                                <option value="1">Ditutup</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="form-group">
                                            <label for="judul">Lama Periode <span class="text-danger">*</span></label>
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <input type="text" class="form-control" id="example-daterange1" name="tgl_mulai" placeholder="Mulai" data-week-start="1" data-autoclose="true" data-today-highlight="true" value="<?= $rjadwal->tgl_mulai?>">
                                                    <div class="input-group-prepend input-group-append">
                                                        <span class="input-group-text font-w600">
                                                            <i class="fa fa-fw fa-arrow-right"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-daterange2" name="tgl_selesai" placeholder="Selesai" data-week-start="1" data-autoclose="true" data-today-highlight="true" value="<?= $rjadwal->tgl_selesai?>">
                                                </div>
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
