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
                            <h3 class="block-title">Data <small>pendaftaran</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                        <div class="block block-rounded">
                                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-animated-slideup-home">Data Pendaftaran</a>
                                    </li>
                                </ul>
                                <div class="block-content tab-content overflow-hidden">
                                    <div class="tab-pane fade fade-up show active" id="btabs-animated-slideup-home" role="tabpanel">
                                    <a type="button" class="btn btn-alt-danger">PDF</a>
                                    <br>
                                    <br>
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
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
                                                            <p>Hapus data <?= $rpendaftaran->pendaftaran?> ?</p>
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
