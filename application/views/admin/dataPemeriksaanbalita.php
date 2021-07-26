<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>
<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataPemeriksaanbalita/addData') ?>"><i class="fas fa-plus"></i> Tambah Data Pemeriksaan Balita</a>
<a class="btn btn-sm btn-success mb-3" href="<?= base_url('admin/dataPemeriksaann/cetak')?>"> <i class="fa fa-print"></i>Cetak Data</a>
<?php echo $this->session->flashdata('pesan') ?>
<!-- menampilkan tabel pemeriksaan --> 
<table class="table table-bordered table-striped mt-2">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Kode pemeriksaan balita</th>
		<th class="text-center">Kode balita</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Tanggal</th>
		<th class="text-center">Berat Badan</th>
		<th class="text-center">Tinggi Badan</th>
		<th class="text-center">Lingkar Lengan</th>
		<th class="text-center">Lingkar Kepala</th>
		<th class="text-center">Vitamin</th>
		<th class="text-center">Imunisasi</th>
		<th class="text-center">Action</th>
	</tr>

	<?php $no=1; foreach($pemeriksaanbalita as $pb): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $pb->kode_pemeriksaan ?></td>
			<td><?php echo $pb->kode_balita ?></td>
			<td><?php echo $pb->nama ?></td>
			<td><?php echo $pb->tanggal ?></td>
			<td><?php echo $pb->berat_badan ?></td>
			<td><?php echo $pb->tinggi_badan ?></td>
			<td><?php echo $pb->lingkar_lengan ?></td>
			<td><?php echo $pb->lingkar_kepala ?></td>
			<td><?php echo $pb->vitamin ?></td>
			<td><?php echo $pb->imunisasi ?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataPemeriksaanbalita/updateData/'.$pb->id_pemeriksaan) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPemeriksaanbalita/deleteData/'.$pb->id_pemeriksaan) ?>"><i class="fas fa-trash"></i></a>
					<!-- <a href="<?php echo base_url('admin/dataPemeriksaanbalita/cetakdata/'.$pb->id_pemeriksaan) ?>" target="_blank" class="btn btn-sm btn-success"><i class="fas fa-print"></i>cetak</a> -->
				</center>
			</td>
			
		</tr>
	<?php endforeach; ?>
</table>  
</div>
<!-- /.container-fluid -->