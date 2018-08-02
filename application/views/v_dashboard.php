<!DOCTYPE HTML>
<html>
<link rel ="shortcut icon" href="assets/arcana/assets/images/rumah.png">
  <head>
    <title>Beranda</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="<?php echo base_url().'assets/arcana/assets/js/ie/html5shiv.js'?>"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/main.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/ie8.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/ie9.css'?>" />
  <style type="text/css">
  .left    { text-align: left;}
  .right   { text-align: right;}
  .center  { text-align: center;}
  .justify { text-align: justify;}
  .text_content{text-indent: 60px;}
  </style>
  </head>

  <body>
    <div id="header">
      <h1 style="font-family:Cooper Black; color:DarkBlue;"><center><a href="" id="logo">KOST PUTRI SATRIA CANTIK</a></center></h1>
    </div>
    <?php $this->load->view('menu');?>                      
      <!-- Banner -->
      <section id="banner">
        <div class="container">
          <center><h2 style="font-family:Cooper Black; color:White;">Selamat Datang <i><?php echo $this->session->userdata('ses_nama');?></i></h2></center>
          <header>
            <?php if($this->session->userdata('akses')=='1'):?>
            <a href="<?php echo base_url().'index.php/page/input_bukutamu'?>" class="button">Tambah Tamu</a>
            <?php endif;?>
          </header>
      </section>

      <!-- Highlights -->
        <section class="wrapper style1">
          <div class="container">
            <div class="row 200%">        
              <section class="4u 12u(narrower)">
                <div class="box highlight">
                  <i class="icon major fa-paper-plane"></i>
                  <h3>Lokasi</h3>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3005000610747!2d106.83987861406928!3d-6.355133063939789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec40ae6c3c7f%3A0x9dd05117067a010f!2sRuko+Satria+Lantai%2C+Jl.+Akses+Ui%2C+Tugu%2C+Cimanggis%2C+Kota+Depok%2C+Jawa+Barat+16451!5e0!3m2!1sen!2sid!4v1530600606170" width="370" height="200" frameborder="0" style="border:5" allowfullscreen></iframe>
                </div>
              </section>
              
              <section class="4u 12u(narrower)">
                <div class="box highlight">
                  <i class="icon major fa-pencil"></i>
                  <h3>Informasi</h3>
                  <p class="justify">Kost Putri Satria Cantik adalah Kost Putri yang terletak di Jalan Akses UI No. 26 Kelapa Dua Depok. Kost Putri ini memiliki 38 kamar kost dengan fasilitas:
                  <br> - Tempat tidur dalam kamar
                  <br> - Lemari dalam kamar
                  <br> - Kamar mandi dalam
                  <br> - Lobby
                  <br> - Dapur Bersama
                  <br> - Cctv di dalam lobby utama
                  <br> - Wifi. 
                  <br> Tarif sewa kamar kost adalah Rp 500.000 per bulan yang dibayarkan setiap tanggal 1</br></p>
                </div>
              </section>
              
              <section class="4u 12u(narrower)">
                <div class="box highlight">
                  <i class="icon major fa-list-alt"></i>
                  <h3>Tata Tertib</h3>
                  <p class="justify">   1. Tamu pria di larang masuk ke dalam kamar
                  <br>  2. Waktu bertamu :
                    <br> - Senin s/d Jumat: 08.00 - 21.30
                    <br> - Sabtu s/d Minggu: 09.00 - 22.30
                  <br>  3. Menjaga dan memelihara semua fasilitas yang tersedia
                  <br>  4. Menjaga kebersihan kamar dan kamar mandi
                  <br>  5. Menjaga kebersihan dan ketertiban lingkungan sekitar
                  <br>  6. Dilarang memelihara/membawa hewan peliharaan dikamar maupun dilingkungan kost
                  <br>  7. Dilarang menggunakan barang-barang ilegal atau narkoba dan sejenisnya dikamar maupun di sekitar kost.
                </div>
              </section>
            </div>
          </div>
        </section>

      <!-- Footer -->
        <div id="footer">
          <div class="container"></div>

      <!-- Icons -->
      <ul class="icons">
        <h2><center><a href="#" class="icon fa-phone">    021 - 8790 2281</a></center></h2>
      </ul>

      <!-- Copyright -->
        <div class="copyright">
          <ul class="menu">
            <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
          </ul>
        </div>

      <!-- Scripts -->
        <script src="<?php echo base_url().'assets/arcana/assets/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/arcana/assets/js/jquery.dropotron.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/arcana/assets/js/skel.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/arcana/assets/js/util.js'?>"></script>
        <script src="<?php echo base_url().'assets/arcana/assets/js/ie/respond.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/arcana/assets/js/main.js'?>"></script>
  </body>
</html>