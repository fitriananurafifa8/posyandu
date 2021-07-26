<?php

class dataJadwal extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Jadwal";
		$data['jadwal'] = $this->posModel->get_data('tb_jadwal')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataJadwal', $data); 
		$this->load->view('templates_admin/footer');
	}

	public function addData()
 	{
 		$data['title'] = "Tambah Data Jadwal";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataJadwal', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			
 			$hari	= $this->input->post('hari');
 			$tanggal	= $this->input->post('tanggal');
			$keterangan = $this->input->post('keterangan');
 			$data = array(
 					'hari'	   => $hari,
 					'tanggal' => $tanggal,
					 'keterangan' => $keterangan
 			);

 			$this->posModel->insert_data($data,'tb_jadwal');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataJadwal');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_user' => $id);
 		$data['jadwal'] = $this->db->query("SELECT * FROM tb_jadwal WHERE id_jadwal='$id'")->result();
 		$data['title'] = "Ubah Data Jadwal";
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataJadwal', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData($this->input->post('id_jadwal'));
 		}else{
 			
 			$hari	= $this->input->post('hari');
 			$tanggal	= $this->input->post('tanggal');
			 $keterangan = $this->input->post('keterangan');
 			

 			$data = array(
 					'hari' => $hari,
 					'tanggal' => $tanggal,
					 'keterangan' => $keterangan
 					
 			);

 			$where = array('id_jadwal' => $this->input->post('id_jadwal'));

 			$this->posModel->update_data('tb_jadwal',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataJadwal');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('hari','hari','required');
 	$this->form_validation->set_rules('tanggal','tanggal','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_jadwal' => $id);
 		$this->posModel->delete_data($where, 'tb_jadwal');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataJadwal');
 	}

}
?>
