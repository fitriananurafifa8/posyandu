<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataImunisasi/addData') ?>"><i class="fas fa-plus"></i> Tambah Data Imunisasi</a>

<?php echo $this->session->flashdata('pesan') ?>
<!-- menampilkan tabel imunisasi --> 
<table class="table table-bordered table-striped mt-2">
	<tr>
		<th class="text-center">No</th>
		<th class="text-center">Nama Imunisasi</th>
		<th class="text-center">Keterangan</th>
		<th class="text-center">Action</th>
	</tr>

	<?php $no=1; foreach($imunisasi as $i): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $i->nama_imunisasi ?></td>
			<td><?php echo $i->keterangan ?></td>

			<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataImunisasi/updateData/'.$i->id_imunisasi) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin /dataImunisasi/deleteData/'.$i->id_imunisasi) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>
			
		</tr>
	<?php endforeach; ?>
</table>  
</div>
<!-- /.container-fluid -->