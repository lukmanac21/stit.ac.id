<nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <span class="smini-visible">
                            <i class="fa fa-circle-notch text-primary"></i>
                        </span>
                        <span class="smini-hide font-size-h5 tracking-wider">
                            One<span class="font-w400">UI</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Extra -->
                    <div>
                        <!-- Options -->
                        <div class="dropdown d-inline-block ml-2">
                            <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="<?= base_url()?>assets/admin/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="<?= base_url()?>assets/admin/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="<?= base_url()?>assets/admin/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="<?= base_url()?>assets/admin/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="<?= base_url()?>assets/admin/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Options -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Extra -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">
                        <ul class="nav-main">
                            <li class="nav-main-heading">Dashboard</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Dashboard');?>">
                                    <i class="nav-main-link-icon si si-speedometer"></i>
                                    <span class="nav-main-link-name">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Home</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Slider/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-photo-video"></i>
                                    <span class="nav-main-link-name">Slider</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Berita/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-newspaper"></i>
                                    <span class="nav-main-link-name">Berita</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Profile</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-1x fa-envelope-open-text"></i>
                                    <span class="nav-main-link-name">Visi dan Misi</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Visi/index');?>">
                                            <span class="nav-main-link-name">Visi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Misi/index');?>">
                                            <span class="nav-main-link-name">Misi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Tujuan/index');?>">
                                            <span class="nav-main-link-name">Tujuan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Lambang/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-image"></i>
                                    <span class="nav-main-link-name">Lambang</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-1x fa-user"></i>
                                    <span class="nav-main-link-name">Rektorat dan Staff</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Strukturorg/index');?>">
                                            <span class="nav-main-link-name">Struktur Organisasi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Dosen/index');?>">
                                            <span class="nav-main-link-name">Direktori Dosen</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="<?= site_url('Administrator/Staff/index');?>">
                                            <span class="nav-main-link-name">Direkstori Staff</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading">Akademik</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Jurusan/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-columns"></i>
                                    <span class="nav-main-link-name">Jurusan</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Pstudi/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-book"></i>
                                    <span class="nav-main-link-name">Program Studi</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Pesantren/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-mosque"></i>
                                    <span class="nav-main-link-name">Pesantren</span>
                                </a>
                            </li>

                            <li class="nav-main-heading">LP2M</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Penelitian/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-map-pin"></i>
                                    <span class="nav-main-link-name">Penelitian</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Jurnal/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-journal-whills"></i>
                                    <span class="nav-main-link-name">E-Journal</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">PMB</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Jadwal/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-calendar"></i>
                                    <span class="nav-main-link-name">Jadwal</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Syarat/index');?>">
                                    <i class="nav-main-link-icon fa fa-1x fa-list"></i>
                                    <span class="nav-main-link-name">Syarat</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="<?= site_url('Administrator/Pendaftaran');?>">
                                    <i class="nav-main-link-icon si si-note"></i>
                                    <span class="nav-main-link-name">Pendaftaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>