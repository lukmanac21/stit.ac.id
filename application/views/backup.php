<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="contact-info-one">
            <div class="container">
            <h2 class="contact-one__title text-center">FORMULIR <br>
                    PENDAFTARAN</h2><!-- /.contact-one__title -->
            <form action="<?= site_url('PMB/Simpan');?>" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">PROGRAM STUDI</label>
                <select class="form-control" id="exampleFormControlSelect1" name="program_studi">
                <option value="MAI">PAI</option>
                <option value="MAI">MAI</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">NAMA</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="NAMA LENGKAP" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Tempat">TEMPAT</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="Tempat" placeholder="TEMPAT">
                </div>
                <div class="form-group col-md-6">
                    <label for="Tgllahir">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" id="Tgllahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                <option value="L">LAKI-LAKI</option>
                <option value="P">PEREMPUAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Alamat">ALAMAT</label>
                <input type="text" class="form-control" name="alamat_siswa" id="Alamat" placeholder="ALAMAT">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Kota">KOTA</label>
                    <input type="text" class="form-control" name="kota" id="Kota" placeholder="KOTA">
                </div>
                <div class="form-group col-md-4">
                    <label for="Kabupaten">KABUPATEN</label>
                    <input type="text" class="form-control" name="kabupaten" id="Kabupaten" placeholder="KABUPATEN">
                </div>
                <div class="form-group col-md-4">
                    <label for="Kodepos">KODE POS</label>
                    <input type="number" class="form-control" name="kode_pos" id="Kodepos" placeholder="KODE POS">
                </div>
            </div>
            <div class="form-group">
                <label for="Asalsekolah">ASAL SEKOLAH</label>
                <input type="text" class="form-control"  name="asal_sekolah" id="Asalsekolah" placeholder="ASAL SEKOLAH">
            </div>
            <div class="form-group">
                <label for="Alamatsekolah">ALAMAT</label>
                <input type="text" class="form-control" name="alamat_sekolah" id="Alamatsekolah" placeholder="ALAMAT">
            </div>
            <div class="form-group">
                <label for="Jurusan">JURUSAN</label>
                <input type="text" class="form-control" name="jurusan" id="Jurusan" placeholder="JURUSAN">
            </div>
            <div class="form-group">
                <label for="Nisn">NISN</label>
                <input type="number" class="form-control" name="nisn" id="Nisn" placeholder="NISN">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Noijasah">NO IJASAH</label>
                    <input type="text" class="form-control" name="no_ijasah" id="Noijasah" placeholder="NO IJASAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="Tglijasah">TANGGAL IJASAH</label>
                    <input type="date" class="form-control" name="tgl_ijasah" id="Tglijasah" placeholder="TANGGAL IJASAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="NilaiUN">NILAI UN</label>
                    <input type="text" class="form-control" name="nilai_un" id="NilaiUN" placeholder="NILAI UN">
                </div>
            </div>
            <div class="form-group">
                <label for="Namaayah">NAMA AYAH</label>
                <input type="text" class="form-control" name="nama_ayah" id="Namaayah" placeholder="NAMA AYAH">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Pkjnayah">PEKERJAAN AYAH</label>
                    <input type="text" class="form-control" name="pekerjaan_ayah" id="Pkjnayah" placeholder="PEKERJAAN AYAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="PpbAyah">PENGHASILAN PER BULAN</label>
                    <select class="form-control" id="PpbAyah" name="penghasilan_ayah">
                        <option value="< 1.0000.000">< 1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="3.000.000 - 4.000.000">3.000.000 - 4.000.000</option>
                        <option value="> 5.000.000">> 5.000.000</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="Pendayah">PENDIDIKAN AYAH</label>
                    <select class="form-control" id="Pendayah" name="pendidikan_ayah">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="Namaibu">NAMA IBU</label>
                <input type="text" class="form-control" name="nama_ibu" id="Namaibu" placeholder="NAMA IBU">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Pkjnibu">PEKERJAAN IBU</label>
                    <input type="text" class="form-control" name="pekerjaan_ibu" id="Pkjnibu" placeholder="PEKERJAAN IBU">
                </div>
                <div class="form-group col-md-4">
                    <label for="PpbIbu">PENGHASILAN PER BULAN</label>
                    <select class="form-control" id="PpbIbu" name="penghasilan_ibu">
                        <option value="< 1.0000.000">< 1.000.000</option>
                        <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                        <option value="3.000.000 - 4.000.000">3.000.000 - 4.000.000</option>
                        <option value="> 5.000.000">> 5.000.000</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="Pendibu">PENDIDIKAN IBU</label>
                    <select class="form-control" name="pendidikan_ibu" id="Pendibu">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <label for="Nokk">NO KK</label>
                <input type="number" name="no_kk" class="form-control" id="Nokk" placeholder="NO KK">
            </div>
            <label>FOTO 3*4</label>
            <div class="form-row">
            <label class="file">
                <input type="file" name="file" accept=".png,.jpg,.jpeg" id="file" aria-label="File browser example">
                <span class="file-custom"></span>
            </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">DAFTAR</button>
            </form>
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->
        <br>
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