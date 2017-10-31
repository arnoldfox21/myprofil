<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		if($this->session->userdata('umail')!=''){
			redirect(base_url('admin'));
		}

	}

	function index(){
		$f['page'] = 'Login';	
		$this->load->view('v_login', $f);
	}

	function aksi_login(){
		$mail = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'mail' => $mail,
			'pass' => $password
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'umail' => $mail,
				'status' => 'login'
				);
			$this->session->set_userdata($data_session);
			echo "ok";

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}