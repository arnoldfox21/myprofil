<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Blog extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
	}
	public function post(){

        $this->load->helper('smiley');
        $this->load->library('table');
        $template = array('table_open' => '<table class="table">');
        $this->table->set_template($template);
        $image_array = get_clickable_smileys(base_url().'asset/images/smileys/', 'comment_id');
        $col_array = $this->table->make_columns($image_array, 8);
        $d['smiley_table'] = $this->table->generate($col_array);

		$key = $this->uri->segment(3);
		$d['data'] = $this->M_data->list_posting($key);
		if($key != 1){
		$d['prev'] = $this->M_data->list_posting($key-1);
					}
		$last_key = $this->M_data->last_row();
		if($last_key != $key){
			$d['next'] = $this->M_data->list_posting($key+1);
		}
		$d['page'] = 'Blog';
		$d['kom'] = $this->M_data->select_order('komentar','id','DESC')->result();
		$d['count'] = $this->M_data->where_table('komentar','post_id',$key)->num_rows();
		$this->load->view('post', $d);
	} 
	public function index(){
		$var['page'] = 'Official Website';
		$this->load->view('saya', $var);
	}

}
