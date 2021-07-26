<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%; margin-bottom: 80px;">
    	<div class="card-body">
    		
            <?php foreach ($jadwal as $j):?>
    		<form method="POST" action="<?php echo base_url('admin/dataJadwal/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Jadwal</label>
                    <input type="hidden" name="id_jadwal" class="form-control" value="<?php echo $j->id_jadwal ?>">
    				<input type="text" name="hari" class="form-control" value="<?php echo $j->hari ?>">
    				<?php echo form_error('hari','<div class="text-small text-danger"></div>')?>
    			</div>

    			<div class="form-group">
    				<label>Tanggal</label>
    				<input type="date" name="tanggal" class="form-control" value="<?php echo $j->tanggal ?>">
    				<?php echo form_error('tanggal','<div class="text-small text-danger"></div>')?>
    			</div>

				<div class="form-group">
    				<label>Keterangan</label>
    				<textarea name="keterangan" class="form-control" id=""rows="10">
						<?php echo $j->keterangan ?>
					</textarea>
    				<?php echo form_error('hari','<div class="text-small text-danger"></div>')?>
    			</div>

    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->