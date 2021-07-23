<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('admin/dataUser/addData')?>"><i class="fas fa-plus"></i> Tambah Data User</a>

    <table class="table table-striped table-bordered">
    <tr>
    	<th class="text-center">No</th>
    	<th class="text-center">id user</th>
		<th class="text-center">Username</th>
		<th class="text-center">Password</th>
		<th class="text-center">Nama</th>
		<th class="text-center">Level</th>
    </tr>

    <?Php $no=1; foreach($user as $u) : ?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $u->id_user; ?></td>
		<td><?php echo $u->username ?></td>
		<td><?php echo $u->nama ?></td>
		<td><?php echo $u->level ?></td>

		<td>
				<center>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataUser/updateData/'.$u->id_user) ?>"><i class="fas fa-edit"></i></a>
					<a onclick="return confirm('apakah ingin di hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin /dataUser/deleteData/'.$u->id_user) ?>"><i class="fas fa-trash"></i></a>
				</center>
			</td>

	</tr>
	<?php endforeach;?>
	</table>
</div>
<!-- /.container-fluid -->
 