<?php
 
 class dataPemeriksaanbalita extends CI_Controller
 {
 	
 	public function index()
 	{
 		$data['title'] = "Data Pemeriksaan Balita";
 		$data['pemeriksaanbalita'] = $this->posModel->get_data('tb_pemeriksaanbalita')->result(); 
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/dataPemeriksaanbalita', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addData()
 	{
 		$data['title'] = "Tambah Data Pemeriksaan";
 		$data['balita'] = $this->posModel->get_data('tb_balita')->result();
 		$data['vitamin'] = $this->posModel->get_data('tb_vitamin')->result();
 		$data['imunisasi'] = $this->posModel->get_data('tb_imunisasi')->result();
		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/addDataPemeriksaanbalita'); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function addDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			$this->addData();
 		}else{
			$kode_pemeriksaan = $this->input->post('kode_pemeriksaan');
			$kode_balita = $this->input->post('kode_balita');
 			$nama			= $this->input->post('nama');
 			$tanggal		= $this->input->post('tanggal');
 			$berat_badan	= $this->input->post('berat_badan');
 			$tinggi_badan	= $this->input->post('tinggi_badan');
 			$lingkar_lengan	= $this->input->post('lingkar_lengan');
 			$lingkar_kepala	= $this->input->post('lingkar_kepala');
 			$vitamin		= $this->input->post('vitamin');
 			$imunisasi		= $this->input->post('imunisasi');
 			

 			$data = array(
				 'kode_pemeriksaan' => $kode_pemeriksaan,
				 'kode_balita' => $kode_balita,
 					'nama' 			=> $nama,
 					'tanggal'	 	=> $tanggal,
 					'berat_badan' 	=> $berat_badan,
 					'tinggi_badan' 	=> $tinggi_badan,
 					'lingkar_lengan'=> $lingkar_lengan,
 					'lingkar_kepala'=> $lingkar_kepala,
 					'vitamin' 		=> $vitamin,
 					'imunisasi' 	=> $imunisasi,
 			);

 			$this->posModel->insert_data($data,'tb_pemeriksaanbalita');
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil ditambahkan</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanbalita');
 		}
 	}

 	public function updateData($id)
 	{
 		$where = array('id_pemeriksaan' => $id);
 		$data['pemeriksaanbalita'] = $this->db->query("SELECT * FROM tb_pemeriksaanbalita WHERE id_pemeriksaan='$id'")->result();
 		$data['title'] = "Ubah Data Pemeriksaan Balita";
		$data['balita'] = $this->posModel->get_data('tb_balita')->result();
 		$data['vitamin'] = $this->posModel->get_data('tb_vitamin')->result();
 		$data['imunisasi'] = $this->posModel->get_data('tb_imunisasi')->result();
 		$this->load->view('templates_admin/header', $data); 
		$this->load->view('templates_admin/sidebar'); 
		$this->load->view('admin/updateDataPemeriksaanbalita', $data); 
		$this->load->view('templates_admin/footer'); 
 	}

 	public function updateDataAksi()
 	{
 		$this->_rules();

 		if($this->form_validation->run() == FALSE) {
 			// $this->updateData();
 		}else{
 			$id    	  = $this->input->post('id_pemeriksaan');
 			$kode_pemeriksaan       = $this->input->post('kode_pemeriksaan');
 			$kode_balita       = $this->input->post('kode_balita');
 			$nama	      = $this->input->post('nama');
 			$tanggal	  = $this->input->post('tanggal');
 			$berat_badan  = $this->input->post('berat_badan');
 			$tinggi_badan  = $this->input->post('tinggi_badan');
 			$lingkar_lengan= $this->input->post('lingkar_lengan');
 			$lingkar_kepala= $this->input->post('lingkar_kepala');
 			$vitamin= $this->input->post('vitamin');
 			$imunisasi= $this->input->post('imunisasi');

 			$data = array(
 					'kode_pemeriksaan' => $kode_pemeriksaan,
 					'kode_balita' => $kode_balita,
 					'nama' => $nama,
 					'tanggal'	 => $tanggal,
 					'berat_badan' => $berat_badan,
 					'tinggi_badan' => $tinggi_badan,
 					'lingkar_lengan' => $lingkar_lengan,
 					'lingkar_kepala' => $lingkar_kepala,
 					'vitamin' => $vitamin,
 					'imunisasi' => $imunisasi,

 			);

 			$where = array('id_pemeriksaan' => $id);
 			// $where = array('id_balita' => $id);

 			$this->posModel->update_data('tb_pemeriksaanbalita',$data,$where);
 			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data berhasil diubah</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanbalita');
 		}
 	}

 	public function _rules(){
 	$this->form_validation->set_rules('nama','nama','required');
 	$this->form_validation->set_rules('tanggal','tanggal','required');
 	$this->form_validation->set_rules('berat_badan','tinggi badan','required');
 	$this->form_validation->set_rules('lingkar_lengan','lingkar lengan','required');
 	$this->form_validation->set_rules('lingkar_kepala','lingkar kepala','required');
 	$this->form_validation->set_rules('vitamin','vitamin','required');
 	$this->form_validation->set_rules('imunisasi','imunisasi','required');
 	}

 	public function deleteData($id)
 	{
 		$where = array('id_pemeriksaan' => $id);
 		$this->posModel->delete_data($where, 'tb_pemeriksaanbalita');
 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data berhasil dihapus</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
 			redirect('admin/DataPemeriksaanbalita');
 	}

	 public function cetak(){
		 $data['pemeriksaanbalita'] = $this->posModel->get_data('tb_pemeriksaanbalita')->result();
		 $this->load->view('dataLaporanbalita', $data);
	 }

 }
?>