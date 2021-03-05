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
                                    <h1 class="font-w600 text-white mb-0 inpendaftaranble" data-toggle="appear">Pendaftaran</h1>
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
                            <h3 class="block-title">Data <small>Pendaftaran</small></h3>
                        </div>
                        <br>
                        <form class="form-inline" action="<?= site_url('Administrator/Pendaftaran/Cari');?>" id="multiple_select_form" method="POST" enctype="multipart/form-data">
                                <div style="padding-left:20px;" class="col-lg-6 col-xl-6">
                                    <div class="form-group">
                                        <label for="jadwal">Pilih Periode <span class="text-danger">*</span></label>
                                        <select class="js-select2 form-control" id="jadwal" name="jadwal" style="width: 100%;" data-placeholder="Choose one..">
                                            <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                            <?php foreach($jadwal as $rjadwal){ ?>
                                            <option value="<?= $rjadwal->id?>"><?= "Tahun " . $rjadwal->tahun . ' Periode ' . $rjadwal->periode?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <button style="margin-top:22px;" type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        <div class="block-content block-content-full">

                            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Program Studi</th>
                                        <th style="width: 15%;">Aksi</th>
                                    </tr>
                                </thead>
                                <?php $no=1; foreach($pendaftaran as $rpendaftaran){?>
                                        <tbody>
                                            <tr>
                                            <td class="font-w600 font-size-sm">
                                                    <?= $no;?>
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    <?= $rpendaftaran->nama?>
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    <?= $rpendaftaran->program_studi?>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal tooltip" data-target="#modal-block-fadein" title="Edit">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#delete<?= $rpendaftaran->id?>" title="Delete">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php $no++; }?>
                            </table>
                        </div>
                        <?php foreach($pendaftaran as $rpendaftaran){?>
                                        <div class="modal fade" id="delete<?= $rpendaftaran->id?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="block block-rounded block-themed block-transparent mb-0">
                                                        <div class="block-header bg-primary-dark">
                                                            <h3 class="block-title">Hapus Data</h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-fw fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content font-size-sm">
                                                        <form action="<?= site_url('Administrator/pendaftaran/Delete_data')?>" method="POST">
                                                            <p>Hapus data <?= $rpendaftaran->nama?> ?</p>
                                                            <input type="hidden" name ="id" value="<?= $rpendaftaran->id?>">
                                                        </div>
                                                        <div class="block-content block-content-full text-right border-top">
                                                            <button type="button" class="btn btn-alt-primary mr-1" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
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
