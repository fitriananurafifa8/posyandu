<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($user as $u):?>
    		<form method="POST" action="<?php echo base_url('admin/dataUser/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Username</label>
                    <input type="hidden" name="id_user" class="form-control" value="<?php echo $u->id_user ?>">
    				<input type="text" name="username" class="form-control" value="<?php echo $u->username ?>">
    				<?php echo form_error('username','<div class="text-small text-danger"></div>')?>
    			</div>

    			<div class="form-group">
    				<label>Password</label>
    				<input type="text" name="password" class="form-control" value="<?php echo $u->keterangan ?>">
    				<?php echo form_error('password','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
                    <?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Level</label>
                    <input type="text" name="level" class="form-control" value="<?php echo $u->keterangan ?>">
                    <?php echo form_error('level','<div class="text-small text-danger"></div>')?>
                </div>


    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->