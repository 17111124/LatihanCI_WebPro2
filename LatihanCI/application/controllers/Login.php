<?php 

class Login extends CI_Controller {
	function __construct(){
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model("Modellogin");		
	}

	public function index(){
		$data ['title'] = "Login";
		$this->load->view('headadm',$data);
		$this->load->view('login/view_login');
		$this->load->view('footadm');
	}

	public function login_mhs(){
		$data ['title'] = "Login Mahasiswa";
		$this->load->view('headadm',$data);
		$this->load->view('login/view_login_mhs');
		$this->load->view('footadm');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Modellogin->cek_login("login",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Myadmin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function aksi_login_mhs(){
		$npm = $this->input->post('npm');
		$password = $this->input->post('password');
		$where = array(
			'npm' => $npm,
			'password' => $password
			);
		$cek = $this->Modellogin->cek_login("data_mahasiswa",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Myadmin/mhs"));
 
		}else{
			echo "Username dan password salah !";
		}
	}	
 
}