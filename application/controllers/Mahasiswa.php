<?php 
	class Mahasiswa extends CI_Controller{ 
		public function index(){
			$data['judul']='Daftar Mahasiswa';
			$data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa();
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/index');
			$this->load->view('templates/footer');
		}
	}
 ?>