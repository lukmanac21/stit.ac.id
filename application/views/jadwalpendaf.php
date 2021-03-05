<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view('_partials/head');?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
table, th, td {
  border: 1px solid black;
}
</style>
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="about-two">
            <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                    <h3>Jadwal Pendaftaran</h3>
                    <table style="width:100%">
                    <tr>
                        <th>Tahun</th>
                        <th>Gelombang</th>
                        <th>Tanggal Mulai - Selesai</th>
                        <th>Status </th>
                    </tr>
                    <?php foreach($jadwal as $rjadwal){?>
                    <tr>
                        <td><?= $rjadwal->tahun?></td>
                        <td><?= $rjadwal->periode;?></td>
                        <td><?= $rjadwal->tgl_mulai .' sampai '. $rjadwal->tgl_selesai;?></td>
                        <td><?php if ($rjadwal->status =='0') echo 'Dibuka'; else echo 'Ditutup';?></td>
                    </tr>
                    <?php }?>
                    </table>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->
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