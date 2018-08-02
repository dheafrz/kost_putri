<!DOCTYPE HTML>
<html>
  <head>
    <title>Rekap</title>
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
            <h2 style="font-family:Goudy Old Style;">Rekap Data Tamu</h2>        
              <form action="<?php echo base_url().'laporanpdf/pdf'?>" method="get">
                <table style="margin:20px auto;">
                  <tr>
                    <td>Nomor Kamar   : </td>
                    <td><select name="nmr_kmr">
                        <option>201</option>
                        <option>202</option>
                        <option>203</option>
                        <option>204</option>
                        <option>205</option>
                        <option>206</option>
                        <option>207</option>
                        <option>208</option>
                        <option>209</option>
                        <option>210</option>
                        <option>211</option>
                        <option>212</option>
                        <option>213</option>
                        <option>214</option>
                        <option>215</option>
                        <option>216</option>
                        <option>217</option>
                        <option>218</option>
                        <option>219</option>
                        <option>---</option>
                        <option>301</option>
                        <option>302</option>
                        <option>303</option>
                        <option>304</option>
                        <option>305</option>
                        <option>306</option>
                        <option>307</option>
                        <option>308</option>
                        <option>309</option>
                        <option>310</option>
                        <option>311</option>
                        <option>312</option>
                        <option>313</option>
                        <option>314</option>
                        <option>315</option>
                        <option>316</option>
                        <option>317</option>
                        <option>318</option>
                        <option>319</option>
                        </select>
                    </td>
                  </tr>

                  <tr>
                    <td><div class="form-group">Dari Tanggal  : </td>
                    <td><div class="form-group"><input type="date" class="form-control" name="tanggal_a" required></div></td>
                  </tr>

                  <tr>
                    <td><div class="form-group">Sampai Tanggal  : </td>
                    <td><div class="form-group"><input type="date" class="form-control" name="tanggal_b" required></div></td>
                  </tr>

                  <tr>
                    <td></td>
                    <td>
                      <input type="submit" name="rekap_data" value="Rekap"><a href="<?php echo base_url().'laporanpdf/pdf'?>"></a>
                    </td>
                  </tr>
                </table>
              </form> 

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