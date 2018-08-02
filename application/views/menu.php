<!-- Header -->
<header id="header">
  <nav id="nav">
    <ul>              
      <?php if($this->session->userdata('akses')=='1'):?>
	    <li><a href="<?php echo base_url().'page'?>"><b>Beranda</b></a></li>
	    <li><a href="<?php echo base_url().'page/data_bukutamu'?>"><b>Buku Tamu</b></a></li>
	    <li><a href="<?php echo base_url().'page/data_statuskamar'?>"><b>Status Kamar</b></a></li>
	    <li><a href="<?php echo base_url().'login/logout'?>"><b>Keluar</b></a></li>

      <?php elseif($this->session->userdata('akses')=='2'):?>
      	<li><a href="<?php echo base_url().'page'?>"><b>Beranda</b></a></li>
	    <li><a href="<?php echo base_url().'page/data_bukutamu'?>"><b>Buku Tamu</b></a></li>
	    <li><a href="<?php echo base_url().'page/data_statuskamar'?>"><b>Status Kamar</b></a></li>
	    <li><a href="<?php echo base_url().'login/logout'?>"><b>Keluar</b></a></li>

	   <?php else:?>
	   <li><a href="<?php echo base_url().'page'?>"><b>Beranda</b></a></li>
       <li><a href="<?php echo base_url().'page/data_statuskamar'?>"><b>Status Kamar</b></a></li>
       <li><a href="<?php echo base_url().'Login/index'?>"><b>Login</b></a></li>
      <?php endif;?>
    </ul>
  </nav>
</header>