<?php 
 
class Statuskamar_model extends CI_Model{ 
	function tampil_data(){
		return $this->db->get('kamar');
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	// function data_kmr($number,$offset){
	// 	return $query = $this->db->get('kamar',$number,$offset)->result();		
	// }
 
	// function jumlah_data(){
	// 	return $this->db->get('kamar')->num_rows();
	// }

	 function hapus_data($where,$table){
	 	$this->db->where($where);
	 	$this->db->delete($table);
     }
}


?>