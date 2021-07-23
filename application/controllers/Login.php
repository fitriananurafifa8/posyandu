<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index() {
		$data['title'] = "Login";
		$this->load->view('login/index', $data);
	}

	public function submitLogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = [
			'username' => $username,
			'password' => md5($password)
		];

		$cek = $this->LoginModel->checkLogin('tb_user', $where)->result_array();
		
		if(count($cek) > 0){
			$data_session = [
				'nama'=> $cek[0]['nama'],
				'status' => 'isLogin',
				'level' => $cek[0]['level']
			];

			$this->session->set_userdata($data_session);

			if($cek[0]['level'] === 'admin'){
				redirect(base_url('admin/dashboard'));
			}else{
				redirect(base_url('petugas/dashboard'));
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('/login'));
	}
}

?>