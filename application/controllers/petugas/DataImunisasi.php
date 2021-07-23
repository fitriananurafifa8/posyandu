<?php
 
 class dataImunisasi extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Data Imunisasi";
 		$data['imunisasi'] = $this->posModel->get_data('tb_imunisasi')->result(); 
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataImunisasi', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addData()
 	{
 		$data['title'] = "Tambah Data Imunisasi";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataImunisasi', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			$nama_imunisasi		= $this->input->post('nama_imunisasi');
 			$keterangan	= $this->input->post('keterangan');

 			$data = array(
 					'nama_imunisasi' => $nama_imunisasi,
 					'keterangan'	 => $keterangan,
 			);

 			$this->posModel->insert_data($data,'tb_imunisasi');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataImunisasi');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_imunisasi' => $id);
 		$data['imunisasi'] = $this->db->query("SELECT * FROM tb_imunisasi WHERE id_imunisasi='$id'")->result();
 		$data['title'] = "Ubah Data Imunisasi";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataImunisasi', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData();
 		}else{
 			
 			$nama_imunisasi		= $this->input->post('nama_imunisasi');
 			$keterangan			= $this->input->post('keterangan');

 			$data = array(
 					'nama_imunisasi' => $nama_imunisasi,
 					'keterangan'	 => $keterangan,
 			);

 			$where = array('id_imunisasi' => $id);

 			$this->posModel->update_data('tb_imunisasi',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataImunisasi');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('nama_imunisasi','nama imunisasi','required');
 	$this->form_validation->set_rules('keterangan','keterangan','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_imunisasi' => $id);
 		$this->posModel->delete_data($where, 'tb_imunisasi');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataImunisasi');
 	}

 }
?>