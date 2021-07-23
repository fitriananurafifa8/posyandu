<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataBalita/addData')?>"><i class="fas fa-plus"></i> Tambah Data Balita</a>

    <table class="table table-striped table-bordered">
    <tr>
    	<th class="text-center">No</th>
    	<th class="text-center">Kode Balita</th>
		<th class="text-center">Nama Balita</th>
		<th class="text-center">Tempat Lahir</th>
		<th class="text-center">Tanggal Lahir</th>
		<th class="text-center">Usia</th>
		<th class="text-center">Jenis Kelamin</th>
		<th class="text-center">Nama Ortu</th>
		<th class="text-center">No hp</th>
		<th class="text-center">Alamat</th>
		<th class="text-center">Aksi</th>
    </tr>

    <?Php $no=1; foreach($balita as $b) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $b->kode_balita ?></td>
		<td><?php echo $b->nama_balita ?></td>
		<td><?php echo $b->tempat_lahir ?></td>
		<td><?php echo $b->tanggal_lahir ?></td>
		<td><?php echo $b->usia ?></td>
		<td><?php echo $b->jenis_kelamin ?></td>
		<td><?php echo $b->nama_ortu ?></td>
		<td><?php echo $b->no_hp ?></td>
		<td><?php echo $b->alamat ?></td>

		<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataBalita/updateData/'.$b->id_balita) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin /dataBalita/deleteData/'.$b->id_balita) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>

	</tr>
	<?php endforeach;?>
	</table>

</div>
<!-- /.container-fluid -->
