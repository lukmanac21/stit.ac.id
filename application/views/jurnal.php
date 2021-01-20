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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <?php $this->load->view('_partials/navbar');?>
        <section class="blog-one blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    <h3>Data Jurnal</h3>
                    <table style="width:100%">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Jurnal</th> 
                        <th>Download</th>
                    </tr>
                    <?php $no=1; foreach($jurnal as $rjurnal){?>
                    <tr>
                        <td width="1%"><?= $no;?></td>
                        <td><?= $rjurnal->nama;?></td>
                        <td><?= $rjurnal->judul;?></td>
                        <!-- <td><?= $rjurnal->file;?></td> -->
                        <td width="10%"><a href="<?= site_url('LPPM/Download_action/').$rjurnal->file?>" type="button" class="btn btn-primary">Download</a></td>
                    </tr>
                    <?php } $no++;?>
                    </table>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one blog-page -->
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