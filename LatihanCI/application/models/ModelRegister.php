<?php 
 
class ModelRegister extends CI_model{	

	function aksi_register_mhs($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update('data_mahasiswa', $data);

	}

}