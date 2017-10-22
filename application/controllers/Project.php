<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Project extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_data');
				$this->load->helper('url');
	}
	public function index(){
		$this->load->view('saya');
	}
	public function portfolio(){
		$d['page'] = 'Portfolio';
		$key = $this->uri->segment(3);
		$d['data'] = $this->M_data->list_posting($key);
		$this->load->view('v_portfolio', $d);
	}
}
