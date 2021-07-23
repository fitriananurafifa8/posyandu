<?php
 
 class DataPendaftaran extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Data Pendaftaran";
 		$data['pendaftaran'] = $this->posModel->get_data('tb_pendaftaran')->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataPendaftaran', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addData()
 	{
 		$data['title'] = "Tambah Data Pendaftaran";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataPendaftaran', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			$nama	= $this->input->post('nama');
 			$usia	= $this->input->post('usia');
 			$no_hp	= $this->input->post('no_hp');

 			$data = array(
 					'nama' => $nama,
 					'usia'	 => $usia,
 					'no_hp' => $no_hp,
 			);

 			$this->posModel->insert_data($data,'tb_pendaftaran');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Data berhasil ditambahkan</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
 			redirect('admin/DataPendaftaran');
 		}
 	}


 	public function updateData($id)
 	{
 		$where = array('id_pendaftaran' => $id);
 		$data['pendaftaran'] = $this->db->query("SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id'")->result();
 		$data['title'] = "Ubah Data Pendaftaran";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataPendaftaran', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData();
 		}else{
 			$no         = $this->input->post('no_pendaftaran');
 			$nama		= $this->input->post('nama');
 			$usia		= $this->input->post('usia');
 			$no_hp		= $this->input->post('no_hp');

 			$data = array(
 					'nama' 	=> $nama,
 					'usia'	=> $usia,
 					'no_hp'	=> $no_hp,
 			);

 			$where = array('no_pendaftaran' => $no);

 			$this->posModel->update_data('tb_pendaftaran',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPendaftaran');
 		}
 	}

 	public function _rules()
 	{
 	$this->form_validation->set_rules('nama','nama','required');
 	$this->form_validation->set_rules('usia','usia','required');
 	$this->form_validation->set_rules('no_hp', 'no_hp','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('no_pendaftaran' => $no);
 		$this->posModel->delete_data($where, 'tb_pendaftaran');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPendaftaran');
 	}
 }
?>