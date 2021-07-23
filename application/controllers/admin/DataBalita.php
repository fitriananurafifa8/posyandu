<?php

class dataBalita extends CI_Controller 
{
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
		$data['title'] = "Tambah Data Balita";
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
 			$kode_balita  = $this->input->post('kode_balita');
 			$nama_balita  = $this->input->post('nama_balita');
 			$tempat_lahir = $this->input->post('tempat_lahir');
 			$tanggal_lahir = $this->input->post('tanggal_lahir');
 			$usia		 = $this->input->post('usia');
 			$jenis_kelamin = $this->input->post('jenis_kelamin');
 			$nama_ortu	 = $this->input->post('nama_ortu');
 			$no_hp		 = $this->input->post('no_hp');
 			$alamat		 = $this->input->post('alamat');

 			$data = array(
 					'kode_balita'=> $kode_balita,
 					'nama_balita'=> $nama_balita,
 					'tempat_lahir' => $tempat_lahir,
 					'tanggal_lahir' => $tanggal_lahir,
					'usia'			=> $usia,
 					'jenis_kelamin' => $jenis_kelamin,
 					'nama_ortu'  => $nama_ortu,
 					'no_hp' 	 => $no_hp,
 					'alamat' 	 => $alamat, 
 			);

 			$this->posModel->insert_data($data,'tb_balita');

			//  var_dump($data);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			 <strong>Data berhasil ditambahkan</strong>
			</div>'
		);
 			redirect('admin/dataBalita');
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
 			// $this->updateData();
 		}else{
			$id = $this->input->post('id_balita');
 			$kode_balita= $this->input->post('kode_balita');
 			$nama_balita		= $this->input->post('nama_balita');
 			$tempat_lahir		= $this->input->post('tempat_lahir');
 			$tanggal_lahir		= $this->input->post('tanggal_lahir');
 			$usia		= $this->input->post('usia');
 			$jenis_kelamin			= $this->input->post('jenis_kelamin');
 			$nama_ortu	= $this->input->post('nama_ortu');
 			$no_hp		= $this->input->post('no_hp');
 			$alamat		= $this->input->post('alamat');

 			$data = array(
 					'kode_balita'=> $kode_balita,
 					'nama_balita' 		 => $nama_balita,
 					'tempat_lahir' 		 => $tempat_lahir,
 					'tanggal_lahir' 		 => $tanggal_lahir,
 					'usia' 		 => $usia,
 					'jenis_kelamin' 		 => $jenis_kelamin,
 					'nama_ortu'  => $nama_ortu,
 					'no_hp' 	 => $no_hp,
 					'alamat'	 => $alamat,
 			);

 			$where = array('id_balita' => $id);

 			$this->posModel->update_data('tb_balita',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/dataBalita');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('kode_balita','kode_balita','required');
 	$this->form_validation->set_rules('nama_balita','nama_balita','required');
 	$this->form_validation->set_rules('tempat_lahir','tempat_lahir','required');
 	$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
 	$this->form_validation->set_rules('usia','usia','required');
 	$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
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
