<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($imunisasi as $i):?>
    		<form method="POST" action="<?php echo base_url('admin/dataImunisasi/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Nama Imunisasi</label>
                    <input type="hidden" name="id_imunisasi" class="form-control" value="<?php echo $i->id_imunisasi ?>">
    				<input type="text" name="nama_imunisasi" class="form-control" value="<?php echo $i->nama_imunisasi ?>">
    				<?php echo form_error('nama_imunisasi','<div class="text-small text-danger"></div>')?>
    			</div>

    			<div class="form-group">
    				<label>Keterangan</label>
    				<input type="text" name="keterangan" class="form-control" value="<?php echo $i->keterangan ?>">
    				<?php echo form_error('keterangan','<div class="text-small text-danger"></div>')?>
    			</div>

    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->