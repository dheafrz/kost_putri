<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Statuskamar_model');
        $this->load->model('bukutamu_model');
  }
 
  function index(){
    $this->load->view('v_dashboard');
  }
 
  function data_bukutamu(){
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){    
    $data['buku_tamu'] = $this->bukutamu_model->tampil_data();
    $this->load->view('v_bukutamu',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
  function input_bukutamu(){
    if($this->session->userdata('akses')=='1'){
      
      $this->load->view('v_input_bukutamu');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function tambah_bukutamu(){
    $tanggal = date('Y-m-d');
    $no_kmr = $this->input->post('no_kmr');
    $nama_tamu = $this->input->post('nama_tamu');
    $alamat = $this->input->post('alamat');
    $keperluan = $this->input->post('keperluan');
 
    $data = array(
      'tanggal' => date('Y-m-d'),
      'no_kmr' => $no_kmr,
      'nama_tamu' => $nama_tamu,
      'alamat' => $alamat,
      'keperluan' => $keperluan
      );

    $this->bukutamu_model->input_data($data,'buku_tamu');
    redirect('page/input_bukutamu');
  }

  function rekap_datatamu(){
    if($this->session->userdata('akses')=='1'){
    $this->load->view('v_rekap_data');
      }else{
        echo "Anda tidak berhak mengakses halaman ini";
      }
  }

  function data_statuskamar(){
    $data['kamar'] = $this->Statuskamar_model->tampil_data()->result();
    $this->load->view('v_statuskamar',$data);
  }
  
  function input_statuskamar(){
    if($this->session->userdata('akses')=='1'){
      $this->load->view('v_input_statuskamar');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function edit_statuskamar($id_kmr){
    if($this->session->userdata('akses')=='1'){
    $where = array('id_kmr' => $id_kmr);
    $data['kamar'] = $this->Statuskamar_model->edit_data($where,'kamar')->result();
    $this->load->view('v_edit_statuskamar',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function update_statuskamar(){
  if($this->session->userdata('akses')=='1'){

  $id_kmr = $this->input->post('id_kmr');
  $no_kmr = $this->input->post('no_kmr');
  $status = $this->input->post('status');
  $nama_penghuni = $this->input->post('nama_penghuni');
  $alamat_peng = $this->input->post('alamat_peng'); 

  $data = array(
    'id_kmr' => $id_kmr,
    'no_kmr' => $no_kmr,
    'status' => $status,
    'nama_penghuni' => $nama_penghuni,
    'alamat_peng' => $alamat_peng,
  );
 
  $where = array(
    'id_kmr' => $id_kmr
  );
 
  $this->Statuskamar_model->update_data($where,$data,'kamar');
  redirect('page/data_statuskamar');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
 
 function hapus_datakamar($id_kmr){
  if($this->session->userdata('akses')=='1'){
 
  $data = array(
    'status' => 'Kosong',
    'nama_penghuni' => NULL,
    'alamat_peng' => NULL,
  );
 
  $where = array(
    'id_kmr' => $id_kmr
  );
 
  $this->Statuskamar_model->update_data($where,$data,'kamar');
  redirect('page/data_statuskamar');

    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}