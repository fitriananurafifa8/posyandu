<?php
 
 class dataVitamin extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Data Vitamin";
 		$data['vitamin'] = $this->posModel->get_data('tb_vitamin')->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataVitamin', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addData()
 	{
 		$data['title'] = "Tambah Data Vitamin";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataVitamin', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();
//untuk menentukan form yg setiap kita buat
 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			
 			$nama_vitamin	= $this->input->post('nama_vitamin');

 			$data = array(
 					'nama_vitamin' => $nama_vitamin,
 			);

 			$this->posModel->insert_data($data,'tb_vitamin');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataVitamin');
 		}
 	}


 	public function updateData($id)
 	{
 		$where = array('id_vitamin' => $id);
 		$data['vitamin'] = $this->db->query("SELECT * FROM tb_vitamin WHERE id_vitamin='$id'")->result();
 		$data['title'] = "Ubah Data Vitamin";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataVitamin', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData();
 		}else{
 			$id 			= $this->input->post('id_vitamin');
 			$nama_vitamin	= $this->input->post('nama_vitamin');

 			$data = array(
 					'nama_vitamin' => $nama_vitamin,
 			);

 			$where = array('id_vitamin' => $id);

 			$this->posModel->update_data('tb_vitamin',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataVitamin');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('nama_vitamin','nama vitamin','required');
 	
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_vitamin' => $id);
 		$this->vitaminModel->delete_data($where, 'tb_vitamin');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataVitamin');
 	}

 }
?>