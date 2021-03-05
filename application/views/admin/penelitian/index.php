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
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Penelitian</h1>
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
                            <h3 class="block-title">Data <small>Penelitian</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                        <div class="block block-rounded">
                                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-animated-slideup-home">Data Penelitian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#btabs-animated-slideup-profile">Tambah Data</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content overflow-hidden">
                                    <div class="tab-pane fade fade-up show active" id="btabs-animated-slideup-home" role="tabpanel">
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                        <thead>
                                            <tr>
                                                <th>Kategori</th>
                                                <th class="d-none d-sm-table-cell" style="width: 15%;">Tanggal</th>
                                                <th class="d-none d-sm-table-cell" style="width: 30%;">Nama Penelitian</th>
                                                <th style="width: 15%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($penelitian as $rpenelitian){?>
                                        <tbody>
                                            <tr>
                                                <td class="font-w600 font-size-sm">
                                                    <?= $rpenelitian->nama?>
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    <?= $rpenelitian->tanggal?>  
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm">
                                                    <?= $rpenelitian->judul?>  
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?= site_url('Administrator/Penelitian/edit_data/'.$rpenelitian->id)?>" type="button" class="btn btn-sm btn-alt-primary" title="Edit">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#delete<?= $rpenelitian->id?>" title="Delete">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table> 
                                    </div>
                                    <?php foreach($penelitian as $rpenelitian){?>
                                        <div class="modal fade" id="delete<?= $rpenelitian->id?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
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
                                                        <form action="<?= site_url('Administrator/Penelitian/Delete_data')?>" method="POST">
                                                            <p>Hapus data <?= $rpenelitian->keterangan?> ?</p>
                                                            <input type="hidden" name ="id" value="<?= $rpenelitian->id?>">
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
                                    <div class="tab-pane fade fade-up" id="btabs-animated-slideup-profile" role="tabpanel">
                                        <form class="js-validation" action="<?= site_url('Administrator/Penelitian/Save_data');?>" method="POST" enctype="multipart/form-data">
                                            <div class="block block-rounded">
                                                <div class="block-content block-content-full">
                                                    <!-- Regular -->
                                                    <div class="row items-push">
                                                        <div class="col-lg-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                                                <select class="form-control" id="kategori" name="kategori_id">
                                                                    <?php foreach ($kategori as $rkategori){?>
                                                                        <option value="<?= $rkategori->id;?>"><?= $rkategori->nama;?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                                                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Judul File">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="judul">Judul <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul File">
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
                                                                <label for="keterangan">Keterangan <span class="text-danger">*</span></label>
                                                                <textarea name="keterangan" id="keterangan" class="js-summernote"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END Regular -->
                                                    <!-- Submit -->
                                                    <div class="row items-push">
                                                        <div class="col-lg-4">
                                                            <button type="submit" class="btn btn-alt-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                    <!-- END Submit -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </div>
                            </div>
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                        </div>
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
