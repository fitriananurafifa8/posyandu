<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>

	</div>

	<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataJadwal/addData') ?>"><i
			class="fas fa-plus"></i> Tambah Jadwal</a>

	<?php echo $this->session->flashdata('pesan') ?>
	<!-- menampilkan tabel imunisasi -->
	<table class="table table-bordered table-striped mt-2">
		<tr>
			<th class="text-center">No</th>
			<th class="text-center">Hari</th>
			<th class="text-center">Tanggal</th>
			<th class="text-center">Action</th>
		</tr>

		<?php $no=1; foreach($jadwal as $i): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $i->hari ?></td>
			<td><?php echo $i->tanggal?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning"
						href="<?php echo base_url('admin/dataJadwal/updateData/'.$i->id_jadwal) ?>"><i
							class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger"
						href="<?php echo base_url('admin/dataJadwal/deleteData/'.$i->id_jadwal) ?>"><i
							class="fas fa-trash"></i></a>
				</center>
			</td>

		</tr>
		<?php endforeach; ?>
	</table>
</div>
<!-- /.container-fluid -->
