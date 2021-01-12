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
            <form>
            <div class="form-group">
                <label for="exampleFormControlSelect1">PROGRAM STUDI</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="">PAI</option>>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">NAMA</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NAMA LENGKAP" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Tempat">TEMPAt</label>
                    <input type="text" class="form-control" id="Tempat" placeholder="TEMPAT">
                </div>
                <div class="form-group col-md-6">
                    <label for="Tgllahir">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" id="Tgllahir" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option value="L">LAKI-LAKI</option>>
                <option value="P">PEREMPUAH</option>>
                </select>
            </div>
            <div class="form-group">
                <label for="Alamat">ALAMAT</label>
                <input type="text" class="form-control" id="Alamat" placeholder="ALAMAT">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Kota">KOTA</label>
                    <input type="text" class="form-control" id="Kota" placeholder="KOTA">
                </div>
                <div class="form-group col-md-4">
                    <label for="Kabupaten">KABUPATEN</label>
                    <input type="text" class="form-control" id="Kabupaten" placeholder="KABUPATEN">
                </div>
                <div class="form-group col-md-4">
                    <label for="Kodepos">KODE POS</label>
                    <input type="number" class="form-control" id="Kodepos" placeholder="KODE POS">
                </div>
            </div>
            <div class="form-group">
                <label for="Asalsekolah">ASAL SEKOLAH</label>
                <input type="text" class="form-control" id="Asalsekolah" placeholder="ASAL SEKOLAH">
            </div>
            <div class="form-group">
                <label for="Alamatsekolah">ALAMAT</label>
                <input type="text" class="form-control" id="Alamatsekolah" placeholder="ALAMAT">
            </div>
            <div class="form-group">
                <label for="Jurusan">JURUSAN</label>
                <select class="form-control" id="Jurusan">
                    <option value="L">IPA</option>>
                    <option value="P">IPS</option>>
                </select>
            </div>
            <div class="form-group">
                <label for="Nisn">NISN</label>
                <input type="number" class="form-control" id="Nisn" placeholder="NISN">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Noijasah">NO IJASAH</label>
                    <input type="text" class="form-control" id="Noijasah" placeholder="NO IJASAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="Tglijasah">TANGGAL IJASAH</label>
                    <input type="date" class="form-control" id="Tglijasah" placeholder="TANGGAL IJASAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="NilaiUN">NILAI UN</label>
                    <input type="text" class="form-control" id="NilaiUN" placeholder="NILAI UN">
                </div>
            </div>
            <div class="form-group">
                <label for="Namaayah">NAMA AYAH</label>
                <input type="text" class="form-control" id="Namaayah" placeholder="NAMA AYAH">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Pkjnayah">PEKERJAAN AYAH</label>
                    <input type="text" class="form-control" id="Pkjnayah" placeholder="PEKERJAAN AYAH">
                </div>
                <div class="form-group col-md-4">
                    <label for="PpbIbu">PENGHASILAN PER BULAN</label>
                    <select class="form-control" id="PpbIbu">
                    <option value="L">IPA</option>>
                    <option value="P">IPS</option>>
                </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="Pendayah">PENDIDIKAN AYAH</label>
                    <input type="text" class="form-control" id="NilaiUN" placeholder="PENDIDIKAN AYAH">
                </div>
            </div>
            <div class="form-group">
                <label for="Namaibu">NAMA IBU</label>
                <input type="text" class="form-control" id="Namaibu" placeholder="NAMA IBU">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="Pkjnibu">PEKERJAAN IBU</label>
                    <input type="text" class="form-control" id="Pkjnibu" placeholder="PEKERJAAN IBU">
                </div>
                <div class="form-group col-md-4">
                    <label for="PpbIbu">PENGHASILAN PER BULAN</label>
                    <select class="form-control" id="PpbIbu">
                    <option value="L">IPA</option>>
                    <option value="P">IPS</option>>
                </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="Pendibu">PENDIDIKAN AYAH</label>
                    <input type="text" class="form-control" id="Pendibu" placeholder="PENDIDIKAN AYAH">
                </div>
            </div>

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