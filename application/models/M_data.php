<?php
class M_data extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('contact');
	}

	function get_blogpost(){
		return $this->db->get('blog');
	}

	function list_posting($key)
	{
        $query = $this->db->query("select * from blog where id = $key");
		$row = $query->row();
		return $row;
        }
    function admin($key)
	{
        $set = $this->db->query("select * from admin where mail = '$key'");
		$get = $set->row();
		return $get;
        }
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>