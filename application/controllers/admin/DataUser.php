<?php

class dataUser extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data User";
		$data['user'] = $this->posModel->get_data('tb_user')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataUser', $data); 
		$this->load->view('templates_admin/footer'); 
	}

	public function addData()
 	{
 		$data['title'] = "Tambah Data User";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataUser', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			
 			$username		= $this->input->post('username');
 			$password	= $this->input->post('password');
 			$nama		= $this->input->post('nama');
 			$level		= $this->input->post('level');

 			$data = array(
 					'nama'	   => $nama,
 					'password' => $password,
 					'nama'     => $nama,
 					'level'	   => $level,
 			);

 			$this->posModel->insert_data($data,'tb_user');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataUser');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_user' => $id);
 		$data['user'] = $this->db->query("SELECT * FROM tb_user WHERE id_user='$id'")->result();
 		$data['title'] = "Ubah Data User";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataUser', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData();
 		}else{
 			
 			$username	= $this->input->post('username');
 			$password	= $this->input->post('password');
 			$nama		= $this->input->post('nama');
 			$level		= $this->input->post('level');
 			
 			

 			$data = array(
 					'username' => $username,
 					'password' => $password,
 					'nama' 	   => $nama,
 					'level'    => $level,
 			);

 			$where = array('id_user' => $id);

 			$this->posModel->update_data('tb_user',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataUser');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('username','username','required');
 	$this->form_validation->set_rules('password','password','required');
 	$this->form_validation->set_rules('nama','nama','required');
 	$this->form_validation->set_rules('level','level','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_user' => $id);
 		$this->posModel->delete_data($where, 'tb_user');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataUser');
 	}

}
?>
