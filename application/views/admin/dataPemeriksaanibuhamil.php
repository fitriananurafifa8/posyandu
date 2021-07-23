<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

     <div class="card mb-3">
  <div class="card-header bg-warning text-white">
    Filter Data Pemeriksaan Ibu Hamil
  </div>
  <div class="card-body">
    <form class="form-inline">
    	<div class="form-group mb-2">
    		<label for="staticemail2">Bulan</label>
    		<select class="form-control ml-3" name="bulan">
    			<option value="">--Pilih Bulan--</option>
    			<option value="01">Januari</option>
    			<option value="02">Februari</option>
    			<option value="03">Mare</option>
    			<option value="04">April</option>
    			<option value="05">Mei</option>
    			<option value="06">Juni</option>
    			<option value="07">Juli</option>
    			<option value="08">Agustus</option>
    			<option value="09">September</option>
    			<option value="10">Oktober</option>
    			<option value="11">November</option>
    			<option value="12">Desember</option>
    		</select>
    	</div>

    	<div class="form-group mb-2 ml-5 ">
    		<label for="staticemail2">Tahun</label>
    		<select class="form-control ml-3" name="tahun">
    			<option value="">--Pilih Tahun--</option>
    			<?php $tahun = date('Y');
    			for($i=2021;$i<$tahun+5;$i++) {?> 
    			<option value="<?php echo $i ?>"><?php echo $i ?></option>
    		<?php } ?>
    		</select>
    	</div>
    	
    	<button type="submit" class="btn btn-warning mb-2 ml-auto"><i class="fas fa-eye"> </i> Tampilkan Data</button>

    </form> 

  </div>
</div>

<?php
		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun ;
		}else{
			$bulan = date('m');
			$tahun = date('y'); 
			$bulantahun = $bulan.$tahun; 
		}
?>
<div class="alert alert-info">
	Menampilkan Data Pemeriksaan Data Pemeriksaan Ibu Hamil Bulan: <span class="font-weight-bold"><?php echo $bulan?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun?></span>
</div>

<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataPemeriksaanibuhamil/addData') ?>"><i class="fas fa-plus"></i> Tambah Data Pemeriksaan Ibu Hamil</a>

<?php echo $this->session->flashdata('pesan') ?>
<!-- menampilkan tabel pemeriksaan --> 
<table class="table table-bordered table-striped mt-2">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">id pemeriksaan ibu hamil</th>
		<th class="text-center">id ibu hamil</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Tanggal</th>
		<th class="text-center">Berat Badan</th>
		<th class="text-center">Lingkar Lengan</th>
		<th class="text-center">Vitamin</th>
		<th class="text-center">Imunisasi</th>
		<th class="text-center">Action</th>
	</tr>

	<?php $no=1; foreach($pemeriksaanibuhamil as $ph): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $i->id_pemeriksaanibuhamil ?></td>
			<td><?php echo $i->id_ibuhamil ?></td>
			<td><?php echo $i->nama ?></td>
			<td><?php echo $i->tanggal ?></td>
			<td><?php echo $i->berat_badan ?></td>
			<td><?php echo $i->lingkar_lengan ?></td>
			<td><?php echo $i->vitamin ?></td>
			<td><?php echo $i->imunisasi ?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataPemeriksaanibuhamil/updateData/'.$i->id_pemeriksaanibuhamil) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin /dataPemeriksaanibuhamil/deleteData/'.$i->id_pemeriksaanibuhamil) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>
			
		</tr>
	<?php endforeach; ?>
</table>  
</div>
<!-- /.container-fluid -->