<?php 

class ModelAdmin extends CI_model
{
	
	function tambah_data($data,$table){
		$this->db->insert($table,$data);
		
	}

	function tampilkan_data(){
		return $this->db->get("data_mahasiswa")->result();
		// $this->db->query("SELECT * FROM")
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>