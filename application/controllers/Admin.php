<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_data');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$a['page'] = 'admin';
		$a['data'] = $this->M_data->admin($this->session->userdata('umail'));
		$a['post'] = $this->M_data->tampil_data()->result();
		$this->load->view('v_admin', $a);
	}
	function post(){
		$this->load->view('v_post');
	}
}