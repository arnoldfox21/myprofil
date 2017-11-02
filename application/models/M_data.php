<?php
class M_data extends CI_Model{
	
	function tampil_data($ob,$limit){
           $this->db->order_by($ob);
           $this->db->limit($limit);
		return $this->db->get('contact');
	}

	function get_blogpost($ob,$limit){
           $this->db->order_by($ob);
           $this->db->limit($limit);
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
    function where_table($table,$field,$where_key)
	{
       return $this->db->get_Where($table, array($field=>$where_key));

        }
    function select_order($table,$order_by,$da){
   			   $this->db->select('*');
    		   $this->db->from($table);
          	   $this->db->order_by($order_by,$da);
        return $this->db->get(); 
    }
    function last_row(){
    	  	   $this->db->select('*');
    		   $this->db->from('blog');
          	   $this->db->order_by('id','DESC');
          	   $this->db->limit(1);
        return $this->db->get(); 
    }
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}
?>