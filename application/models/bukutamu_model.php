<?php 
 
class bukutamu_model extends CI_Model{
	function tampil_data(){
    $this->db->select('buku_tamu.*, kamar.nama_penghuni'); //mengambil semua data dari tabel data_users dan users
    $this->db->from('buku_tamu'); //dari tabel data_users
    $this->db->join('kamar', 'kamar.no_kmr = buku_tamu.no_kmr'); //menyatukan tabel users menggunakan left join
    $this->db->order_by('tanggal', 'DESC');
    $data = $this->db->get(); //mengambil seluruh data
    return $data->result(); //mengembalikan data
    }
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    function tampil_rekap(){
        
        $this->db->select('buku_tamu.*, kamar.nama_penghuni'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('buku_tamu'); //dari tabel data_users
        $this->db->join('kamar', 'kamar.no_kmr = buku_tamu.no_kmr');
        $this->db->where('buku_tamu.no_kmr', $this->input->get('nmr_kmr'));
        $this->db->where('tanggal BETWEEN "' . $this->input->get('tanggal_a') . '" AND "' . $this->input->get('tanggal_b') .'"');
        $this->db->order_by('tanggal', 'ASC');
        $data = $this->db->get();
        return $data->result();
    }
}
?>
		

