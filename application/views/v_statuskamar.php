<!DOCTYPE HTML>
<html>
  <link rel ="shortcut icon" href="assets/arcana/assets/images/list.png">
  <head>
    <title>Status Kamar</title>
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
      <!--Include menu-->
      <?php $this->load->view('menu');?> 
        <section id="five" class="wrapper style2 special fade">
          <div class="container">
            <h2 style="font-family:Goudy Old Style;">Data Kamar</h2>
              <table border="1">
                <thead>
                <tr>
                  <th>No Kamar</th>
                  <th>Status</th>
                  <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
                  <th>Penghuni</th>
                  <th>Alamat</th>
                  <?php endif;?>
                  <?php if($this->session->userdata('akses')=='1'):?>
                  <th>Aksi</th>
                  <?php endif;?>
                </tr>
                </thead>
                
                <?php 
                  $no = 1;
                  foreach($kamar as $z){ 
                ?>
                  <tr>
                    <td><?php echo $z->no_kmr ?></td>
                    <td><?php echo $z->status ?></td>
                    <?php if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'):?>
                    <td><?php echo $z->nama_penghuni ?></td>   
                    <td><?php echo $z->alamat_peng ?></td> 
                     <?php endif;?>  
                    <?php if($this->session->userdata('akses')=='1'):?>
                    <td>
                       <a href="<?php echo base_url('page/edit_statuskamar/');?>/<?php echo $z->id_kmr; ?>" class="btn  btn-success  fa fa-edit"></a>
                       <a href="<?php echo base_url('page/hapus_datakamar');?>/<?php echo $z->id_kmr; ?>" class="btn  btn-success fa fa-trash"></a>
                      <?php endif;?>
                    </td>
                  </tr>
                  <?php } ?>
              </table>
              <br/>
              <?php echo $this->pagination->create_links(); ?>
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