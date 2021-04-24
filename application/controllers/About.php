<?php 
	class About extends CI_Controller{
		public function index($nama='Fhadly Sabda Dinov',$pekerjaan='Mahasiswa',$umur=20){
			$data['nama']=$nama;
			$data['pekerjaan']=$pekerjaan;
			$data['umur']=$umur;
			$data['judul']='About Me';
			$this->load->view('templates/header',$data);
			$this->load->view('about/index',$data);
			$this->load->view('templates/footer');
		}
	}

 ?>