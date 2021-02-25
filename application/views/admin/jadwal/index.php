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
                        <div class="block-content block-content-full">
                        <div class="block block-rounded">
                                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#btabs-animated-slideup-home">Data Jadwal</a>
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
                                                <th>Tahun</th>
                                                <th>Periode</th>
                                                <th>Tanggal Mulai - Selesai</th>
                                                <th>Pendaftar</th>
                                                <th>Status </th>
                                                <th style="width: 15%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($jadwal as $rjadwal){?>
                                        <tbody>
                                            <tr>
                                                <td class="font-w600 font-size-sm">
                                                    <?= $rjadwal->tahun?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm">
                                                    <?= $rjadwal->periode?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm">
                                                <?= $rjadwal->tgl_mulai .' S/D '. $rjadwal->tgl_selesai?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm">
                                                <?= $rjadwal->tgl_mulai .'-'. $rjadwal->tgl_selesai?>
                                                </td>
                                                <td class="d-none d-sm-table-cell font-size-sm">
                                                <?php if ($rjadwal->status =='0') echo 'Dibuka'; else echo 'Ditutup';?>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?= site_url('Administrator/Jadwal/edit_data/'.$rjadwal->id);?>" type="button" class="btn btn-sm btn-alt-primary"  title="Edit">
                                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                                        </a>
                                                        <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="modal" data-target="#delete<?= $rjadwal->id?>" title="Delete">
                                                            <i class="fa fa-fw fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table> 
                                    </div>
                                    <?php foreach($jadwal as $rjadwal){?>
                                        <div class="modal fade" id="delete<?= $rjadwal->id?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
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
                                                        <form action="<?= site_url('Administrator/Jadwal/Delete_data')?>" method="POST">
                                                            <p>Hapus data <?= 'Tahun' . $rjadwal->tahun.'Periode ke ' . $rjadwal->periode?> ?</p>
                                                            <input type="hidden" name ="id" value="<?= $rjadwal->id?>">
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
                                        <form class="js-validation" action="<?= site_url('Administrator/Jadwal/Save_data');?>" id="multiple_select_form" method="POST" enctype="multipart/form-data">
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
                                                                <input type="number" class="form-control" id="periode" name="periode" placeholder="Periode">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="form-group">
                                                            <label for="judul">Lama Periode <span class="text-danger">*</span></label>
                                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                                    <input type="text" class="form-control" id="example-daterange1" name="tgl_mulai" placeholder="Mulai" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                                    <div class="input-group-prepend input-group-append">
                                                                        <span class="input-group-text font-w600">
                                                                            <i class="fa fa-fw fa-arrow-right"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="example-daterange2" name="tgl_selesai" placeholder="Selesai" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                                </div>
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
            <?php $this->load->view('admin/part/js');?>


    </body>
</html>
