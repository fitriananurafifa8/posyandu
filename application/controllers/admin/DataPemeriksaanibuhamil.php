<?php
 
 class dataPemeriksaanibuhamil extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Data Pemeriksaan Ibu Hamil";
 		$data['pemeriksaanibuhamil'] = $this->posModel->get_data('tb_pemeriksaanibuhamil')->result(); 
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataPemeriksaanibuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addData()
 	{
 		$data['title'] = "Tambah Data Pemeriksaan Ibu Hamil";
 		$data['ibuhamil'] = $this->posModel->get_data('tb_ibuhamil')->result();
 		$data['imunisasi'] = $this->posModel->get_data('tb_imunisasi')->result();
		$data['vitamin'] = $this->posModel->get_data('tb_vitamin')->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataPemeriksaanibuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
 			$kode_pemeriksaanibu			= $this->input->post('kode_pemeriksaanibu');
 			$kode_ibuhamil			= $this->input->post('kode_ibuhamil');
 			$nama			= $this->input->post('nama');
 			$tanggal		= $this->input->post('tanggal');
 			$berat_badan	= $this->input->post('berat_badan');
 			$lingkar_lengan	= $this->input->post('lingkar_lengan');
 			$vitamin		= $this->input->post('vitamin');
 			$imunisasi		= $this->input->post('imunisasi');

 			$data = array(
				 'kode_pemeriksaanibu' 	=> $kode_pemeriksaanibu,
				 'kode_ibuhamil' 	=> $kode_ibuhamil,
 					'nama' 		 	=> $nama,
 					'tanggal'	 	=> $tanggal,
 					'berat_badan' 	=> $berat_badan,
 					'lingkar_lengan'=> $lingkar_lengan,
 					'vitamin' 		=> $vitamin,
 					'imunisasi' 	=> $imunisasi,
 			);

 			$this->posModel->insert_data($data,'tb_pemeriksaanibuhamil');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanibuhamil');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_pemeriksaanibuhamil' => $id);
		 $data['pemeriksaanibu'] = $this->db->query("SELECT * FROM tb_pemeriksaanibuhamil WHERE id_pemeriksaanibu='$id'")->result();
 		$data['title'] = "Ubah Data Pemeriksaan Ibu Hamil";
		$data['ibuhamil'] = $this->posModel->get_data('tb_ibuhamil')->result();
 		$data['imunisasi'] = $this->posModel->get_data('tb_imunisasi')->result();
		$data['vitamin'] = $this->posModel->get_data('tb_vitamin')->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataPemeriksaanibuhamil', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			// $this->updateData();
 		}else{
 			$id 		   = $this->input->post('id_pemeriksaanibu');
			 $kode_pemeriksaanibu			= $this->input->post('kode_pemeriksaanibu');
 			$kode_ibuhamil            = $this->input->post('kode_ibuhamil');
 			$nama		   = $this->input->post('nama');
 			$tanggal       = $this->input->post('tanggal');
 			$berat_badan    = $this->input->post('berat_badan');
 			$lingkar_lengan = $this->input->post('lingkar_lengan');
 			$vitamin       = $this->input->post('vitamin');
 			$imunisasi     = $this->input->post('imunisasi');

 			$data = array(
				'kode_pemeriksaanibu' 	=> $kode_pemeriksaanibu,
 					'kode_ibuhamil' 			 => $kode_ibuhamil,
 					'nama' 			 => $nama,
 					'tanggal' 		 => $tanggal,
 					'berat_badan'	 => $berat_badan,
 					'lingkar_lengan' => $lingkar_lengan,
 					'vitamin' 		 => $vitamin,
 					'imunisasi' 	 => $imunisasi,

 			);

 			$where = array('id_pemeriksaanibu' => $id);
 			// $where = array('id_ibuhamil' => $id);

 			$this->posModel->update_data('tb_pemeriksaanibuhamil',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanibuhamil');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('nama','nama','required');
 	$this->form_validation->set_rules('tanggal','tanggal','required');
 	$this->form_validation->set_rules('berat_badan','berat badan','required');
 	$this->form_validation->set_rules('lingkar_lengan','lingkar lengan','required');
 	$this->form_validation->set_rules('vitamin','vitamin','required');
 	$this->form_validation->set_rules('imunisasi','imunisasi','required');
 	}


 	public function deleteData($id)
 	{
 		$where = array('id_pemeriksaanibu' => $id);
 		$this->posModel->delete_data($where, 'tb_pemeriksaanibuhamil');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanibuhamil');
 	}

 }
?>