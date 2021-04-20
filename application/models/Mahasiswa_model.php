<?php 
	class Mahasiswa_model extends CI_model{
		public function getAllMahasiswa(){
			return $this->db->get('tblmahasiswa')->result_array();
		}
	}
 ?>