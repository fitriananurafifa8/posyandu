<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataPemeriksaanibuhamil/addData') ?>"><i class="fas fa-plus"></i> Tambah Data Pemeriksaan Ibu Hamil</a>

<?php echo $this->session->flashdata('pesan') ?>
<!-- menampilkan tabel pemeriksaan --> 
<table class="table table-bordered table-striped mt-2">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Id Pemeriksaan Ibu Hamil</th>
		<th class="text-center">Kode Ibu Hamil</th>
		<!-- <th class="text-center">id ibu hamil</th> -->
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
			<td><?php echo $ph->kode_pemeriksaanibu ?></td>
			<td><?php echo $ph->kode_ibuhamil ?></td>
			<td><?php echo $ph->nama ?></td>
			<td><?php echo $ph->tanggal ?></td>
			<td><?php echo $ph->berat_badan ?></td>
			<td><?php echo $ph->lingkar_lengan ?></td>
			<td><?php echo $ph->vitamin ?></td>
			<td><?php echo $ph->imunisasi ?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataPemeriksaanibuhamil/updateData/'.$ph->id_pemeriksaanibu) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPemeriksaanibuhamil/deleteData/'.$ph->id_pemeriksaanibu) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>
			
		</tr>
	<?php endforeach; ?>
</table>  
</div>
<!-- /.container-fluid -->