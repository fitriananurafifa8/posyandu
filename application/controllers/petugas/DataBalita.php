<?php

class dataBalita extends CI_Controller {
	public function index()
	{
		$data['title'] = "Data Balita";
		$data['balita'] = $this->posModel->get_data('tb_balita')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataBalita', $data); 
		$this->load->view('templates_admin/footer'); 
	}

	public function addData()
	{
		$data['title'] = " Tambah Data Balita";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataBalita', $data); 
		$this->load->view('templates_admin/footer'); 
	}

	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			$nama		= $this->input->post('nama');
 			$ttl		= $this->input->post('ttl');
 			$usia		= $this->input->post('usia');
 			$jk			= $this->input->post('jk');
 			$nama_ortu	= $this->input->post('nama_ortu');
 			$no_hp		= $this->input->post('no_hp');
 			$alamat		= $this->input->post('alamat');

 			$data = array(
 					'nama' 		=> $nama,
 					'ttl' 		=> $ttl,
 					'usia' 		=> $usia,
 					'jk' 		=> $jk,
 					'nama_ortu' => $nama_ortu,
 					'no_hp' 	=> $no_hp,
 					'alamat' 	=> $alamat, 
 			);

 			$this->posModel->insert_data($data,'tb_balita');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataBalita');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_balita' => $id);
 		$data['title'] = "Ubah Data Balita";
 		$data['balita'] = $this->db->query("SELECT * FROM tb_balita WHERE id_balita='$id'")->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataBalita', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData();
 		}else{
 			
 			$nama		= $this->input->post('nama');
 			$ttl		= $this->input->post('ttl');
 			$usia		= $this->input->post('usia');
 			$jk			= $this->input->post('jk');
 			$nama_ortu	= $this->input->post('nama_ortu');
 			$no_hp		= $this->input->post('no_hp');
 			$alamat		= $this->input->post('alamat');

 			$data = array(
 					'nama' 		=> $nama,
 					'ttl' 		=> $ttl,
 					'usia' 		=> $usia,
 					'jk' 		=> $jk,
 					'nama_ortu' => $nama_ortu,
 					'no_hp' 	=> $no_hp,
 					'alamat'	=> $alamat,
 			);

 			$where = array('id_balita' => $id);

 			$this->posModel->update_data('tb_balita',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataBalita');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('nama','nama','required');
 	$this->form_validation->set_rules('ttl','ttl','required');
 	$this->form_validation->set_rules('usia','usia','required');
 	$this->form_validation->set_rules('jk','jk','required');
 	$this->form_validation->set_rules('nama_ortu','nama_ortu','required');
 	$this->form_validation->set_rules('no_hp','no_hp','required');
 	$this->form_validation->set_rules('alamat','alamat','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_balita' => $id);
 		$this->posModel->delete_data($where, 'tb_balita');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataBalita');
 	}

}

?>
