<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
        
    </div>


    <div class="card" style="width: 60%; margin-bottom: 80px">
    	<div class="card-body">
    		
            <?php foreach ($ibuhamil as $h):?>
    		<form method="POST" action="<?php echo base_url('admin/dataIbuhamil/updateDataAksi')?>">
                <div class="form-group">
    				<label>Kode Ibu Hamil</label>
    				<input type="text" name="kode_ibuhamil" class="form-control" value="<?php echo $h->kode_ibuhamil ?>">
    			</div>
    			<div class="form-group">
    				<label>Nama</label>
                    <input type="hidden" name="id_ibuhamil" class="form-control" value="<?php echo $h->id_ibuhamil ?>">
    				<input type="text" name="nama_ibuhamil" class="form-control" value="<?php echo $h->nama_ibuhamil ?>">
    				<?php echo form_error('nama_ibuhamil','<div class="text-small text-danger"></div>')?>
    			</div>

                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $h->tempat_lahir ?>">
                    <?php echo form_error('tempat_lahir','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $h->tanggal_lahir ?>">
                    <?php echo form_error('tanggal_lahir','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Usia</label>
                    <input type="text" name="usia" class="form-control" value="<?php echo $h->usia ?>">
                    <?php echo form_error('usia','<div class="text-small text-danger"></div>')?>
                </div>


                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $h->no_hp ?>">
                    <?php echo form_error('no_hp','<div class="text-small text-danger"></div>')?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $h->alamat ?>">
                    <?php echo form_error('alamat','<div class="text-small text-danger"></div>')?>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
    		</form>
        <?php endforeach; ?>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->