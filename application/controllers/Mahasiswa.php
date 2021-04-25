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
			if ($this->input->post('kirim')) {
				$data['cari']=$this->input->post('cari');
				$this->session->set_userdata('cari',$data['cari']);
			}else{
				$data['cari']=$this->session->userdata('cari');
			}
			//config
			$this->db->like('nama',$data['cari']);
			$this->db->or_like('npm',$data['cari']);
			$this->db->from('tblmahasiswa');
			$config['total_rows']=$this->db->count_all_results();
			$data['total_rows']=$config['total_rows'];
			$config['per_page']=2;	

			//initialize
			$this->pagination->initialize($config);

			$data['start']=$this->uri->segment(3);
			$data['mahasiswa']=$this->mahasiswa->getMahasiswa($config['per_page'],$data['start'],$data['cari']);
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