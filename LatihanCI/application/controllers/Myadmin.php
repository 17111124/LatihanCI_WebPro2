<?php 

class Myadmin extends CI_Controller {

	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model("Modeladmin");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data ['title'] = "ADMIN";
		$this->load->view('headadm',$data);
		$this->load->view('view_dashboard');
		$this->load->view('footadm');
	}

	public function mhs(){
		$data ['title'] = "Mahasiswa";
		$this->load->view('headadm',$data);
		$this->load->view('view_mahasiswa');
		$this->load->view('footadm');
	}

	public function tambahdata(){	
		$data ['title'] = "TAMBAH DATA | Sekolah Tinggi Teknologi Bandung";
		$data ['tampil'] = $this->Modeladmin->tampilkan_data();
		$this->load->view('headadm',$data);
		$this->load->view('modul/view_tambahdata',$data);
		$this->load->view('footadm');

	}

	public function editdata($id=null){
		if(is_null($id)){
			$this->session->set_flashdata('message3','<div class="alert alert-success" role="alert">Data tidak ada</div>');
			redirect('Myadmin/tambahdata');
		}
		$where = array('id' => $id);
		$data ['title'] = "EDIT DATA | Sekolah Tinggi Teknologi Bandung";
		$data ['datamhs'] = $this->Modeladmin->edit_data($where, 'data_mahasiswa')->row_array();
		$this->load->view('headadm',$data);
		$this->load->view('modul/view_editdata',$data);
		$this->load->view('footadm');
	}

	public function aksi_tambah_data(){

		$this->form_validation->set_rules('npm','NPM','required|trim',[
			'required' => 'NPM tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama','Nama','required|trim',[
			'required' => 'Nama tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('semester','Semester','required|trim',[
			'required' => 'Semester tidak boleh kosong!'
		]);
		
		if($this->form_validation->run() != false){

			$npm = $this->input->post('npm');
			$nama =$this->input->post('nama');
			$semester =$this->input->post('semester');
			$tipe =$this->input->post('tipe');
			$tipe= 0;
			$data = array(
				'npm'=> $npm, 
				'nama'=> $nama,
				'semester'=> $semester,
				'tipe'=> $tipe
			);	

			$this->Modeladmin->tambah_data($data,'data_mahasiswa');	
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil disimpan</div>');
			redirect('Myadmin/tambahdata');
		}

		else{
			$this->tambahdata();
		}

	}

	public function aksi_edit_data(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama =$this->input->post('nama');
		$semester =$this->input->post('semester');	

		$data = array(
			'npm'=> $npm, 
			'nama'=> $nama,
			'semester'=> $semester
		);	

		$where = array(
			'id' => $id
		);

		$this->Modeladmin->update_data($where,$data,'data_mahasiswa');
		$this->session->set_flashdata('message1','<div class="alert alert-success" role="alert">Data Berhasil diubah</div>');
		redirect('Myadmin/tambahdata');
	}	

	function hapus($id){		
		$where = array('id' => $id);
		$this->Modeladmin->hapus_data($where,'data_mahasiswa');
		$this->session->set_flashdata('message2','<div class="alert alert-success" role="alert">Data Berhasil dihapus</div>');
		redirect('Myadmin/tambahdata');
	}

	/*function aksi(){
		$this->form_validation->set_rules('npm','NPM','required');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('semester','Semester','required');

		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$data ['title'] = "TAMBAH DATA | Sekolah Tinggi Teknologi Bandung";
			$data ['tampil'] = $this->Modeladmin->tampilkan_data();
			$this->load->view('headadm',$data);
			$this->load->view('modul/view_tambahdata',$data);
			$this->load->view('footadm');
		}
	}*/

}
?>