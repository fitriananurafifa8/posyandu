<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>

	</div>

	<?php echo $this->session->flashdata('pesan')?>

	<a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataIbuhamil/addData')?>"><i
			class="fas fa-plus"></i> Tambah Data Ibu Hamil</a>
	<!-- menampilkan tabel ibu hamil -->
	<table class="table table-bordered table-striped mt-2">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Tempat Lahir</th>
			<th class="text-center">Tanggal Lahir</th>
			<th class="text-center">Usia</th>
			<th class="text-center">No Hp</th>
			<th class="text-center">Alamat</th>
			<th class="text-center">Action</th>
		</tr>

		<?php $no=1; foreach($ibuhamil as $i): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $i->nama_ibuhamil ?></td>
			<td><?php echo $i->tempat_lahir ?></td>
			<td><?php echo $i->tanggal_lahir ?></td>
			<td><?php echo $i->usia ?></td>
			<td><?php echo $i->no_hp ?></td>
			<td><?php echo $i->alamat ?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning"
						href="<?php echo base_url('admin/dataIbuhamil/updateData/'.$i->id_ibuhamil) ?>"><i
							class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger"
						href="<?php echo base_url('admin/dataIbuhamil/deleteData/'.$i->id_ibuhamil) ?>"><i
							class="fas fa-trash"></i></a>
				</center>
			</td>

		</tr>
		<?php endforeach; ?>
	</table>

</div>
<!-- /.container-fluid -->
