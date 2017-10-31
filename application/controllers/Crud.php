<?php
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->helper('url');
 
	}
 
	function tambah_aksi(){
		echo "string";

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$sub_pesan = $this->input->post('sub_pesan');
		$pesan = $this->input->post('pesan');
 
		$data = array(
			'nama' => $nama,
			'sub_pesan' => $sub_pesan,
			'pesan' => $pesan,
			'mail' => $email
			);
		$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';
		$secret_key = '6LfVlzQUAAAAANCRtRl0AzQhgLJ7ttkG142S7o6z'; 
		
		if ($captcha != '') {
		   $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
		   $recaptcha = file_get_contents($url);
		   $recaptcha = json_decode($recaptcha, true);
		   if (!$recaptcha['success']){
			 redirect('http://www.kurniawan.info/page/contact/2');
		   }else{
			$this->m_data->input_data($data,'contact');
			redirect('http://www.kurniawan.info/page/contact/1');
					}
		}else{
		redirect('http://www.kurniawan.info/page/contact/2');
			}
			
	function tambah_komentar(){
		$data = array(
			'post_id' => $this->input->post('pid1'),
			'nama' => $this->input->post('name1'),
			'mail' => $this->input->post('email1'),
			'to_comment_id' => $this->input->post('comid1'),
			'pesan' => $this->input->post('pesan1')
			);
		$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response']:'';
		$secret_key = '6LfVlzQUAAAAANCRtRl0AzQhgLJ7ttkG142S7o6z'; 
		
		if ($captcha != '') {
		   $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secret_key) . '&response=' . $captcha;   
		   $recaptcha = file_get_contents($url);
		   $recaptcha = json_decode($recaptcha, true);
		   if (!$recaptcha['success']){
			 echo "gagal";
		   }else{
			$this->M_data->input_data($data,'komentar');
			echo "sukses";
					}
		}else{
		echo "whats wrong";
			}
	}

	function add_post(){
		$nama = $this->input->post('judul');
		$email = $this->input->post('isi');
 		if($nama != '' and $email != ''){
			$data = array(
				'judul' => $nama,
				'post' => $sub_pesan,
				);
			$this->m_data->input_data($data,'blog');
			redirect("http://localhost/codeignitier/admin/post/1");
		}else{
			redirect(base_url('admin/post/2'));
		}
	}
 
}
?>