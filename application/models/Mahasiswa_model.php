<?php 
	class Mahasiswa_model extends CI_model{
		public function getMahasiswa($limit,$start,$cari=null)
	    {
	        if ($cari) {
				$this->db->like('nama',$cari);
				$this->db->or_like('npm',$cari);
			}
	        return $this->db->get('tblmahasiswa',$limit,$start)->result_array();
	    }

		public function countAllMahasiswa(){
			return $this->db->get('tblmahasiswa')->num_rows();
		}

		public function tambahDataMahasiswa(){
			$nilaiteori=($this->input->post('tugasteori')*0.3)+($this->input->post('utsteori')*0.3)+($this->input->post('uasteori')*0.4); 
			$nilaipratikum=($this->input->post('tugaspratikum')*0.6)+($this->input->post('uaspratikum')*0.4); 
			$nilaiakhir=($nilaiteori*0.6)+($nilaipratikum*0.4);
			if ($nilaiakhir>=80 && $nilaiakhir<=100) {
				$nilaihuruf='A';
			}
			elseif($nilaiakhir>=70 && $nilaiakhir<=79){
				$nilaihuruf='B';
			}
			elseif($nilaiakhir>=60 && $nilaiakhir<=69){
				$nilaihuruf='C';
			}
			elseif($nilaiakhir>=40 && $nilaiakhir<=59){
				$nilaihuruf='D';
			}
			else{
				$nilaihuruf='E';	
			}
			$data= [
				"nama" => $this->input->post('nama',true),
				"npm" => $this->input->post('npm',true),
				"tugasteori" => $this->input->post('tugasteori',true),
				"utsteori" => $this->input->post('utsteori',true),
				"uasteori" => $this->input->post('uasteori',true),
				"tugaspratikum" => $this->input->post('tugaspratikum',true),
				"uaspratikum" => $this->input->post('uaspratikum',true),
				"nilaiteori" => $nilaiteori,
				"nilaipratikum" => $nilaipratikum,
				"nilaiakhir" => $nilaiakhir,
				"nilaihuruf" => $nilaihuruf
			];
			 
			$this->db->insert('tblmahasiswa',$data);
		}

		public function hapusDataMahasiswa($id){
			$this->db->delete('tblmahasiswa',['id' => $id]);
		}

		public function getMahasiswaById($id){
			return $this->db->get_where('tblmahasiswa',['id' => $id])->row_array();
		}

		public function ubahDataMahasiswa(){
			$nilaiteori=($this->input->post('tugasteori')*0.3)+($this->input->post('utsteori')*0.3)+($this->input->post('uasteori')*0.4); 
			$nilaipratikum=($this->input->post('tugaspratikum')*0.6)+($this->input->post('uaspratikum')*0.4); 
			$nilaiakhir=($nilaiteori*0.6)+($nilaipratikum*0.4);
			if ($nilaiakhir>=80 && $nilaiakhir<=100) {
				$nilaihuruf='A';
			}
			elseif($nilaiakhir>=70 && $nilaiakhir<=79){
				$nilaihuruf='B';
			}
			elseif($nilaiakhir>=60 && $nilaiakhir<=69){
				$nilaihuruf='C';
			}
			elseif($nilaiakhir>=40 && $nilaiakhir<=59){
				$nilaihuruf='D';
			}
			else{
				$nilaihuruf='E';	
			}
			$data= [
				"nama" => $this->input->post('nama',true),
				"npm" => $this->input->post('npm',true),
				"tugasteori" => $this->input->post('tugasteori',true),
				"utsteori" => $this->input->post('utsteori',true),
				"uasteori" => $this->input->post('uasteori',true),
				"tugaspratikum" => $this->input->post('tugaspratikum',true),
				"uaspratikum" => $this->input->post('uaspratikum',true),
				"nilaiteori" => $nilaiteori,
				"nilaipratikum" => $nilaipratikum,
				"nilaiakhir" => $nilaiakhir,
				"nilaihuruf" => $nilaihuruf
			];
			$this->db->where('id',$this->input->post('id')); 
			$this->db->update('tblmahasiswa',$data);
		}

	}
 ?>