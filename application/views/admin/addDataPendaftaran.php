<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%">
    	<div class="card-body">
    		
    		<form method="POST" action="<?php echo base_url('admin/dataPendaftaran/addDataAksi')?>">
    			
    			<div class="form-group">
    				<label>No pendaftaran</label>
    				<input type="text" name="no_pendaftaran" class="form-control">
    				<?php echo form_error('no_pendaftaran','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    <?php echo form_error('nama','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Usia</label>
                    <input type="text" name="usia" class="form-control">
                    <?php echo form_error('usia','<div class="text-small text-danger"></div>')?>
                </div>

    			<div class="form-group">
    				<label>No hp</label>
    				<input type="text" name="no_hp" class="form-control">
    				<?php echo form_error('no_hp','<div class="text-small text-danger"></div>')?>
    			</div>

    			<button type="submit" class="btn btn-success">Submit</button>
    		</form>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->