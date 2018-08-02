<?php
class Login_model extends CI_Model{
	//login
	function auth_login($username,$password){
		$query=$this->db->query("SELECT * FROM pengguna WHERE nama_pengguna ='$username' AND pass='$password'");
		return $query;
	}

	function tampil_data(){
		return $this->db->get('pengguna');
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	//login penghuni
	//function auth_penghuni($username,$password){
	//	$query=$this->db->query("SELECT * FROM pemilik WHERE nama ='$username' AND pass='$password'");
	//	return $query;
	//}
}

?>

