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
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Berita</h1>
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
                            <h3 class="block-title">Data <small>Berita</small></h3>
                        </div>
                        <?php foreach($berita as $rberita){?>
                        <form class="js-validation" action="<?= site_url('Administrator/Berita/update_data');?>" method="POST" enctype="multipart/form-data">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    <!-- Regular -->
                                    <div class="row items-push">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="framework">Pilih Kategori<span class="text-danger">*</span></label>
                                                <select class="js-select2 form-control" id="val-select2 framework" name="id_kategori[]" style="width: 100%;" data-live-search="true" multiple>
                                                <?php foreach($kategori as $rkategori){?>
                                                    <option value="<?= $rkategori->id?>"><?= $rkategori->nama?></option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" value="<?= $rberita->tanggal?>">
                                            </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                            <div class="form-group">
                                                <label for="judul">Judul <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="<?= $rberita->judul;?>">
                                                <input type="hidden" class="form-control" id="id" name="id" value=<?= $rberita->id_berita;?>>
                                            </div>
                                            <div class="form-group">
                                                <label>Gambar  <span class="text-danger">*</span>   </label>
                                                <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" name="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="example-file-input-custom">
                                                    <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-12"> 
                                            <div class="form-group">
                                                <label for="isi_berita">Isi Berita <span class="text-danger">*</span></label>
                                                <textarea name="isi_berita" id="isi_berita" class="js-summernote"><?= $rberita->isi_berita?></textarea>
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
