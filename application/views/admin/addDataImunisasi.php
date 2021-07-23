<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataImunisasi/addDataAksi')?>">
    			
    			<div class="form-group">
    				<label>Nama Imunisasi</label>
    				<input type="text" name="nama_imunisasi" class="form-control">
    				<?php echo form_error('nama_imunisasi','<div class="text-small text-danger"></div>')?>
    			</div>

    			<div class="form-group">
    				<label>Keterangan</label>
    				<input type="text" name="keterangan" class="form-control">
    				<?php echo form_error('keterangan','<div class="text-small text-danger"></div>')?>
    			</div>

    			<button type="submit" class="btn btn-success">Submit</button>
    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->