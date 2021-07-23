<?php

class dataIbuhamil extends CI_Controller{
	public function index()
	{
		$data['title'] = "Data Ibu Hamil";
		$data['ibuhamil'] = $this->posModel->get_data('tb_ibuhamil')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataIbuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
	}

	public function addData()
	{
		$data['title'] = " Tambah Data Ibu Hamil";
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataIbuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
	}


	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			$kode_ibuhamil = $this->input->post('kode_ibuhamil');
 			$nama_ibuhamil = $this->input->post('nama_ibuhamil');
 			$tempat_lahir = $this->input->post('tempat_lahir');
 			$tanggal_lahir = $this->input->post('tanggal_lahir');
 			$usia = $this->input->post('usia');
 			$no_hp = $this->input->post('no_hp');
 			$alamat = $this->input->post('alamat');

 			$data = array(
 					'kode_ibuhamil'=> $kode_ibuhamil,
 					'nama_ibuhamil' => $nama_ibuhamil,
 					'tempat_lahir' 		   => $tempat_lahir,
 					'tanggal_lahir' 		   => $tanggal_lahir,
 					'usia' 		   => $usia,
 					'no_hp' 	   => $no_hp,
 					'alamat' 	   => $alamat
 			);
 			$this->posModel->insert_data($data,'tb_ibuhamil');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>'
			);
 			redirect('admin/dataIbuhamil');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_ibuhamil' => $id);
 		$data['title'] = "Ubah Data Ibu Hamil";
 		$data['ibuhamil'] = $this->db->query("SELECT * FROM tb_ibuhamil WHERE id_ibuhamil='$id'")->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataIbuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
		 $id_ibuhamil = $this->input->post('id_ibuhamil');
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->updateData($id_ibuhamil);
 		}else{
			$kode_ibuhamil = $this->input->post('kode_ibuhamil');
			$nama_ibuhamil = $this->input->post('nama_ibuhamil');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$usia = $this->input->post('usia');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');

 			$data = array(
 					'kode_ibuhamil'=> $kode_ibuhamil,
 					'nama_ibuhamil' 		=> $nama_ibuhamil,
 					'tempat_lahir' 		=> $tempat_lahir,
 					'tanggal_lahir' 		=> $tanggal_lahir,
 					'usia' 		=> $usia,
 					'no_hp' 	=> $no_hp,
 					'alamat'	=> $alamat,
 			);

 			$where = array('id_ibuhamil' => $id_ibuhamil);

 			$this->posModel->update_data('tb_ibuhamil',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataIbuhamil');
 		}
 	}

 	public function _rules(){
		$this->form_validation->set_rules('kode_ibuhamil','kode_ibuhamil','required');
		$this->form_validation->set_rules('nama_ibuhamil','nama_ibuhamil','required');
		$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		$this->form_validation->set_rules('usia','usia','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		$this->form_validation->set_rules('alamat','alamat','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_ibuhamil' => $id);
 		$this->posModel->delete_data($where, 'tb_ibuhamil');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataIbuhamil');
 	}



}
?>
