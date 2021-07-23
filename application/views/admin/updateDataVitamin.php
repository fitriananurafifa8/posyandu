<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
            <?php foreach ($vitamin as $v):?>
    		<form method="POST" action="<?php echo base_url('admin/dataVitamin/updateDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Nama Vitamin</label>
                    <input type="hidden" name="id_vitamin" class="form-control" value="<?php echo $v->id_vitamin ?>">
    				<input type="text" name="nama_vitamin" class="form-control" value="<?php echo $v->nama_vitamin ?>">
    				<?php echo form_error('nama_vitamin','<div class="text-small text-danger"></div>')?>
    			</div>

    			<button type="submit" class="btn btn-success">Update</button>
    		</form>

        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->