<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('bukutamu_model');    
    }

    function pdf(){
   
   
    $data['rekap_tamu'] = $this->bukutamu_model->tampil_rekap();
    $data['nmr_kmr'] = $this->input->get('nmr_kmr');
    $data['periode'] = date('d M Y', strtotime($this->input->get('tanggal_a'))) . ' - ' . date('d M Y', strtotime($this->input->get('tanggal_b')));
    $this->db->select('nama_penghuni');
    $this->db->from('kamar');
    $this->db->where('no_kmr', $this->input->get('nmr_kmr'));
    $dt = $this->db->get();
    $data['nama_penghuni'] = $dt->result()[0]->nama_penghuni;
    $this->bukutamu_model->tampil_rekap($data,'buku_tamu');
     $this->load->view('v_laporanpdf',$data);
	}
}
?>    
