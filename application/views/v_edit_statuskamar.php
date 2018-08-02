<!DOCTYPE HTML>
<html>
  <head>
    <title>Edit Data</title>
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
            <h2 style="font-family:Goudy Old Style;">Edit Data Kamar</h2>
            <?php foreach($kamar as $z){ ?>
              <form action="<?php echo base_url().'index.php/page/update_statuskamar'?>" method="post">
								<table style="margin:20px auto;">
									<tr>
										<td>Nomor Kamar</td>
										<td>
											<input type="hidden" name="id_kmr" value="<?php echo $z->id_kmr ?>">
											<input type="text" name="no_kmr" value="<?php echo $z->no_kmr ?>" readonly="true">
										</td>
									</tr>

									<tr>
										<td>Status</td>
										<td><select name="status">
											<option>Kosong</option>
											<option>Terisi</option>
										</select></td>
									</tr>

									<tr>
										<td>Nama Penghuni</td>
										<td><input type="text" name="nama_penghuni" value="<?php echo $z->nama_penghuni ?>"></td>
									</tr>

                  <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat_peng" value="<?php echo $z->alamat_peng ?>"></td>
                  </tr>

									<tr>
										<td></td>
										<td><input type="submit" value="Simpan"></td>
									</tr>

								</table>
							</form>	
            <?php } ?>
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
