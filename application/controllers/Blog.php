<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Blog extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_data');
				$this->load->helper('url');
	}
	public function post(){
		$key = $this->uri->segment(3);
		$d['data'] = $this->M_data->list_posting($key);
		$d['page'] = 'Blog';
		
		$this->load->view('post', $d);
	} 
	public function index(){
		$var['page'] = 'Official Website';
		$this->load->view('saya', $var);
	}

}
