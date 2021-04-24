<?php 
	class Mahasiswa extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Mahasiswa_model');
			$this->load->library('form_validation');
		}

		public function index(){
			$data['judul']='Daftar Mahasiswa';
			$this->load->model('Mahasiswa_model','mahasiswa');
			$this->load->library('pagination');

			//config
			$config['base_url']='http://localhost/CI-APP/mahasiswa/index';
			$config['total_rows']=$this->mahasiswa->countAllMahasiswa();
			$config['per_page']=2;	
			$config['num_links']=5;
			
			//styling
			$config['full_tag_open']='<nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']='</ul></nav>';
			
			$config['first_link']='First';
			$config['first_tag_open']='<li class="page-item">';
			$config['first_tag_close']='</li>';

			$config['last_link']='Last';
			$config['last_tag_open']='<li class="page-item">';
			$config['last_tag_close']='</li>';

			$config['next_link']='&raquo';
			$config['next_tag_open']='<li class="page-item">';
			$config['next_tag_close']='</li>';		

			$config['prev_link']='&laquo';
			$config['prev_tag_open']='<li class="page-item">';
			$config['prev_tag_close']='</li>';

			$config['cur_tag_open']='<li class="page-item active"><a class="page-link" href="#">';
			$config['cur_tag_close']='</a></li>';

			$config['num_tag_open']='<li class="page-item">';
			$config['num_tag_close']='</li>';

			$config['attributes'] = array('class' => 'page-link');

			//initialize
			$this->pagination->initialize($config);

			$data['start']=$this->uri->segment(3);
			$data['mahasiswa']=$this->mahasiswa->getMahasiswa($config['per_page'],$data['start']);

			if ($this->input->post('keyword')) {
				$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
			}
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/index',$data);
			$this->load->view('templates/footer');
		}

		public function tambah(){
			$data['judul']='Form Tambah Data Mahasiswa';
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('npm','Npm','required|numeric');
			$this->form_validation->set_rules('tugasteori','Tugas Teori','required|numeric');
			$this->form_validation->set_rules('utsteori','Uts Teori','required|numeric');
			$this->form_validation->set_rules('uasteori','Uas Teori','required|numeric');
			$this->form_validation->set_rules('tugaspratikum','Tugas Pratikum','required|numeric');
			$this->form_validation->set_rules('uaspratikum','Uas Pratikum','required|numeric');
			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header',$data);
				$this->load->view('mahasiswa/tambah');
				$this->load->view('templates/footer');
			}
			else{
				$this->Mahasiswa_model->tambahDataMahasiswa();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('mahasiswa');
			}
		}

		public function hapus($id){
			$this->Mahasiswa_model->hapusDataMahasiswa($id);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('mahasiswa');
		}

		public function detail($id){
			$data['judul']='Detail Nilai Mahasiswa';
			$data['mahasiswa']=$this->Mahasiswa_model->getMahasiswaById($id);
			$this->load->view('templates/header',$data);
			$this->load->view('mahasiswa/detail',$data);
			$this->load->view('templates/footer');

		}

		public function ubah($id){
			$data['judul']='Form Ubah Data Mahasiswa';
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('npm','Npm','required|numeric');
			$this->form_validation->set_rules('tugasteori','Tugas Teori','required|numeric');
			$this->form_validation->set_rules('utsteori','Uts Teori','required|numeric');
			$this->form_validation->set_rules('uasteori','Uas Teori','required|numeric');
			$this->form_validation->set_rules('tugaspratikum','Tugas Pratikum','required|numeric');
			$this->form_validation->set_rules('uaspratikum','Uas Pratikum','required|numeric');
			if ($this->form_validation->run() == false) {
				$this->load->view('templates/header',$data);
				$this->load->view('mahasiswa/ubah',$data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Mahasiswa_model->ubahDataMahasiswa();
				$this->session->set_flashdata('flash','Diubah');
				redirect('mahasiswa');
			}
		}
	}
 ?>