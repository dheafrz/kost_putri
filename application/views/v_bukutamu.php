<!DOCTYPE HTML>
<html>
  <link rel ="shortcut icon" href="assets/arcana/assets/images/buku_tamu.png">
  <head>
    <title>Buku Tamu</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="<?php echo base_url().'assets/arcana/assets/js/ie/html5shiv.js'?>"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/main.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/ie8.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/arcana/assets/css/ie9.css'?>" />
    <style>
      table {
        font-family: Century Schoolbook, sans-serif;
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
    </style>
  </head>
  
  <body>
  <div id="header">
    <h1 style="font-family:Cooper Black;"><center><a href="" id="logo">KOST PUTRI SATRIA CANTIK</a></center></h1>
  </div>
    <div id="page-wrapper">
      <?php $this->load->view('menu');?> 
        <section id="five" class="wrapper style2 special fade">
          <div class="container">
            <h2 style="font-family:Goudy Old Style;">Buku Tamu</h2>
              <?php if($this->session->userdata('akses')=='1'):?>
              <a href="<?php echo base_url('page/rekap_datatamu');?>" class="button">Rekap Data</a>
              <?php endif;?>
              <br></br>
              <table row=1 class="table table-bordered">
                <thead>
                  <tr>
                  <th>Tanggal</th>
                  <th>Nama Tamu</th>
                  <th>Alamat</th>
                  <th>No Kamar</th>
                  <th>Nama Penghuni</th>
                  <th>Keperluan</th>
                </tr>
                </thead>
                <?php 
                  $no = 1;
                  foreach($buku_tamu as $t){ 
                  ?>
                  <tr>
                    <td><?php echo $t->tanggal ?></td>
                    <td><?php echo $t->nama_tamu ?></td>
                    <td><?php echo $t->alamat ?></td>
                    <td><?php echo $t->no_kmr ?></td>
                    <td><?php echo $t->nama_penghuni ?></td>
                    <td><?php echo $t->keperluan ?></td>
                  </tr>
                <?php } ?>
            </table>           
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
    </div>
  </body>
</html>
