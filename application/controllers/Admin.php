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
		$a['post'] = $this->M_data->tampil_data('id DESC',3)->result();
		$a['blog'] = $this->M_data->get_blogpost('id DESC',3)->result();
		$this->load->view('v_admin', $a);
	}
	function post(){
		$a['page'] = 'Blog';
		$this->load->view('v_post', $a);
	}
}