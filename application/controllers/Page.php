<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Page extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
				$this->load->helper('url');
	}
		public function work(){
		$var['page'] = 'Portfolio';
		$this->load->view('work', $var);
	}
		public function blog(){
		$var['page'] = 'Blog';
		$this->load->view('blog', $var);
	}
		public function contact(){
		$key['page'] = 'Contact';
		$key['data'] = $this->uri->segment(3);
		$this->load->view('contact', $key);
	}

}
