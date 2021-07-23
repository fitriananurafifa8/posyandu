<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($pendaftaran as $p):?>
    		<form method="POST" action="<?php echo base_url('admin/dataPendaftaran/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Nama</label>
                    <input type="hidden" name="no_pendaftaran" class="form-control" value="<?php echo $p->id_pendaftaran ?>">
    				<input type="text" name="nama" class="form-control" value="<?php echo $p->nama ?>">
    				<?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
    			</div>

				<div class="form-group">
    				<label>No Pendaftaran</label>
    				<input type="text" name="no_pendaftaran" class="form-control" value="<?php echo $p->no_pendaftaran ?>">
    				<?php echo form_error('no_pendaftaran','<div class="text-small text-danger"></div>')?>
    			</div>

    			<div class="form-group">
    				<label>Usia</label>
    				<input type="text" name="usia" class="form-control" value="<?php echo $p->usia ?>">
    				<?php echo form_error('usia','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $p->no_hp ?>">
                    <?php echo form_error('no_hp','<div class="text-small text-danger"></div>')?>
                </div>

    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->