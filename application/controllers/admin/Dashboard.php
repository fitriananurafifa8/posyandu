<?php

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') !== 'isLogin'){
			redirect(base_url('login'));
		}
	}

	public function index()
	// menampilkan/mengubah nama di tab bar
	{
		$data['title'] = "Dashboard";
		$balita = $this->db->query("SELECT * FROM tb_balita");
		$data['balita']=$balita->num_rows();
		$ibuhamil = $this->db->query("SELECT * FROM tb_ibuhamil");
		$data['ibuhamil']=$ibuhamil->num_rows();
		$user = $this->db->query("SELECT * FROM tb_user");
		$data['user']=$user->num_rows();

		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dashboard', $data); 
		$this->load->view('templates_admin/footer'); 
	}
}  

?>  